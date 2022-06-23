<?php

namespace App\Http\Controllers\API;

use App\Destinations;
// use App\Models;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function all(Request $request)
    {
        $id = $request->input('id');
        $limit = $request->input('limit', 6);
        $title = $request->input('title');
        $description = $request->input('description');
        $tags = $request->input('tags');
        $category = $request->input('category');

        $pricing = $request->input('pricing');
        // $image = $request->image->store('destinations');

        // $destination = Destinations::input([
        //     'title' => $request->title,
        //     'pricing'=>$request->pricing,
        //     'description' => $request->description,
        //     'content' => $request->content,
        //     'image' => $image,
        //     'published_at' => $request->published_at,
        //     'category_id'=>$request->category
        // ]);
        

        if($id)
        {
            $product = Destinations::with(['category'])->find($id);

            if($product)
                return ResponseFormatter::success(
                    $product,
                    'Data produk berhasil diambil'
                );
            else
                return ResponseFormatter::error(
                    null,
                    'Data produk tidak ada',
                    404
                );
        }

        $product = Destinations::with(['category']);

        if($title)
            $product->where('title', 'like', '%' . $title . '%');

        if($description)
            $product->where('description', 'like', '%' . $description . '%');

        if($tags)
            $product->where('tags', 'like', '%' . $tags . '%');

        if($pricing)
            $product->where('price', '>=', $pricing);


        if($category)
            $product->where('category_id', $category);

        return ResponseFormatter::success(
            $product->paginate($limit),
            'Data list produk berhasil diambil'
        );
    }
}
