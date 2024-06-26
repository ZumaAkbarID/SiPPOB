<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Traits\ResponseJson;
use App\Models\Category;
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
}
