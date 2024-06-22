<?php

namespace App\Livewire\Product;

use App\Models\Product;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;

class TableList extends Component
{
    use LivewireAlert;

    public $products = [];

    #[On('updatedProduct')]
    public function reRender()
    {
        $this->products = Product::query()->orderBy('product_name')->orderBy('category')->orderBy('seller_name')->get();
    }

    public function hapus(int $id)
    {
        try {
            Product::findOrFail($id)->delete();
            $this->reRender();
            return $this->alert('success', 'Berhasil');
        } catch (\Throwable $th) {
            return $this->alert('error', 'Terjadi Kesalahan!');
        }
    }

    public function render()
    {
        $this->reRender();
        return view('livewire.product.table-list');
    }
}
