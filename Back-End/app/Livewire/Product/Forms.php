<?php

namespace App\Livewire\Product;

use App\Models\Product;
use App\Traits\Digiflazz;
use Illuminate\Support\Facades\DB;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Forms extends Component
{
    use Digiflazz, LivewireAlert;

    public function fetchData()
    {
        $data = $this->getPriceList();
        if (key_exists('error', $data))
            return $this->alert('error', 'Terjadi kesalahan!');

        try {
            DB::beginTransaction();

            foreach ($data['data'] as $item) {
                $exist = Product::where('buyer_sku_code', $item['buyer_sku_code'])->first();
                if ($exist) {
                    $exist->update($item);
                } else {
                    Product::create($item);
                }
            }

            DB::commit();

            return $this->dispatch('updatedProduct');
        } catch (\Exception $e) {
            DB::rollBack();
            return $this->alert('error', 'Terjadi kesalahan! ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.product.forms');
    }
}
