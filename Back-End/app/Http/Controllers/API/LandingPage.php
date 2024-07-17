<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\ResponseJson;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPage extends Controller
{
    use ResponseJson;

    public function getCategories()
    {
        try {
            $categories = Category::all();
            return $this->response_success('Categories retrieved successfully', 200, $categories->toArray());
        } catch (\Exception $e) {
            return $this->response_error('Failed to retrieve categories', 500, [$e->getMessage()]);
        }
    }

    public function getCategory(int $id)
    {
        try {
            $categories = Category::find($id);
            return $this->response_success('Categories retrieved successfully', 200, $categories->toArray());
        } catch (\Exception $e) {
            return $this->response_error('Failed to retrieve categories', 500, [$e->getMessage()]);
        }
    }

    public function getProduct(int $id)
    {
        try {
            $category = Category::find($id);
            $product = Product::where('category', $category->category)->where('brand', $category->brand)->orderBy('price', 'asc')->get();
            return $this->response_success('Products retrieved successfully', 200, $product->toArray());
        } catch (\Exception $e) {
            return $this->response_error('Failed to retrieve products', 500, [$e->getMessage()]);
        }
    }
}