<?php

namespace App\Livewire\Category;

use App\Models\Category;
use App\Traits\Digiflazz;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class Forms extends Component
{
    use Digiflazz, LivewireAlert, WithFileUploads;

    public $idEditGambar = null;
    public $gambar = null;

    public function fetchData()
    {
        $data = $this->getPriceList();
        if (key_exists('error', $data))
            return $this->alert('error', 'Terjadi kesalahan!');

        try {
            DB::beginTransaction();

            foreach ($data['data'] as $item) {
                $exist = Category::where('brand', $item['brand'])->where('category', $item['category'])->first();
                if (!$exist)
                    Category::create($item);
            }

            DB::commit();

            return $this->dispatch('updatedCategory');
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->alert('error', 'Terjadi kesalahan! ' . $e->getMessage());
        }
    }

    public function cancelGambar()
    {
        $this->idEditGambar = null;
    }

    #[On('gantiGambar')]
    public function gantiGambar(int $id)
    {
        $this->idEditGambar = $id;
    }

    public function saveGambar()
    {
        $this->validate([
            'gambar' => 'image|max:1024', // 1MB Max
        ]);

        $newName = $this->idEditGambar . '.png';

        try {
            $this->gambar->storePubliclyAs(path: 'public/product', name: $newName);
            Category::findOrFail($this->idEditGambar)->update([
                'image' => $newName
            ]);
            $this->alert('success', 'Berhasil diperbarui');
            $this->dispatch('updatedCategory');
        } catch (\Throwable $th) {
            $this->alert('error', 'Terjadi Kesalahan!');
        }
        $this->idEditGambar = null;
    }

    public function render()
    {
        return view('livewire.category.forms');
    }
}
