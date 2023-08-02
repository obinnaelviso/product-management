<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Product\ImageUploadRequest;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProuctImageUpload extends Controller
{
    /**
     * Handle the product image upload.
     */
    public function __invoke(ImageUploadRequest $request, Product $product)
    {
        // check if file exists
        if ($request->file('image')) {
            $path = $request->file('image')->store(
                'image');
            $product->update([
                'image_url' => $path
            ]);
            return new ProductResource($product->refresh());
        }
    }
}
