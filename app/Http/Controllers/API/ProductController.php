<?php

namespace App\Http\Controllers\API;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function all(Request $request){
        $id = $request->input('id');
        $limit = $request->input('limit');
        $name = $request->input('name');
        $description = $request->input('description');

        $tags = $request->input('tags');
        $categories = $request->input('categories');
        $price_from = $request->input('price_from');
        $price_to = $request->input('price_to');

        if ($id) {
            $product = Product::with(['category','galleries'])->find($id);

            if ($product) {
                // return $product;
                return ResponseFormatter::success(
                    $product,
                    'Data Product Ada'
                );
            }else {
                // return 'kosong';
                return ResponseFormatter::error(
                    null,
                    'Data Product Tidak Ada',
                    404
                );
            }
        }
    }
}
