<?php

namespace App\Http\Controllers\API;

use App\Helpers\ResponseFormatter;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $name = $request->input('name');
        $types = $request->input('types');
        $categories = $request->input('categories');

        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        $rate_from = $request->input('rate_from');
        $rate_to = $request->input('rate_to');

        if($id)
        {
            $product = Product::find($id);

            if($product)
            {
                return ResponseFormatter::success($product, 'Product Datas succesfully taken');
            } else {
                return ResponseFormatter::error(null, 'Product Datas is empty', 404);
            }
        }

        $product = Product::query();

        if($name)
        {
            $product->where('name', 'like', '%' . $name . '%');
        }

        if($types)
        {
            $product->where('types', 'like', '%' . $types . '%');
        }

        if($categories)
        {
            $product->where('categories', 'like', '%' . $categories . '%');
        }

        if($price_from)
        {
            $product->where('price', '>=', $price_from);
        }

        if($price_to)
        {
            $product->where('price', '<=', $price_to);
        }

        if($rate_from)
        {
            $product->where('rate', '>=', $rate_from);
        }

        if($rate_to)
        {
            $product->where('rate', '<=', $rate_to);
        }

        return ResponseFormatter::success($product->get(), 'Product data list is successfully taken');
    }
}
