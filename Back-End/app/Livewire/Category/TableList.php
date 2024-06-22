<?php

namespace App\Livewire\Category;

use App\Models\Category;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class TableList extends Component
{
    use LivewireAlert;

    public $category = [];

    #[On('updatedCategory')]
    public function reRender()
    {
        $this->category = Category::query()->get();
    }

    public function hapus(int $id)
    {
        try {
            Category::findOrFail($id)->delete();
            $this->reRender();
            return $this->alert('success', 'Berhasil');
        } catch (\Throwable $th) {
            return $this->alert('error', 'Terjadi Kesalahan!');
        }
    }

    public function gantiGambar(int $id)
    {
        $this->dispatch('gantiGambar', id: $id);
    }

    public function render()
    {
        $this->reRender();
        return view('livewire.category.table-list');
    }
}