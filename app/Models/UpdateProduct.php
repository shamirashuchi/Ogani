<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UpdateProduct extends Model
{
    use HasFactory;
    private static $product,$updateproducts,$updateproductinfo;
    public $timestamps = false;

    public $updated_at = null;
    public static function newProduct($request, $id)
    {
        $product =  new UpdateProduct();
        $product->user_id = Auth::user()->id;
        $product->product_manager_id = $request->input('product_manager_id');
        $product->field = $request->input('field');
        $product->old_value = $request->input('old_value');
        if ($request->hasFile('new_value')) {
            $file = $request->file('new_value');

            $fileName = rand(10000, 500000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/updateproduct/directory/'), $fileName);

            $fileUrl = '/updateproduct/directory/' . $fileName;

            $product->new_value = $fileUrl;

        } else {
            $product->new_value = $request->input('new_value');
        }
        $product->product_id = $request->input('product_id');
        $product->custom_created_at = Carbon::now('Asia/Dhaka');
        $product->save();
        return $product;
    }
    public static function updateProductflag()
    {
        $updateproducts = UpdateProduct::where('product_manager_id', auth()->id())->where('flag', 0)->get();
        foreach ($updateproducts as $product) {
            $product->action = "Seen";
            $product->flag = 1;
            $product->save();
        }
    }
    public static function deleteImageFormFolder($imageUrl)
    {
        if (file_exists($imageUrl))
        {
            unlink($imageUrl);
        }
    }
    public static function deleteProductImage($id)
    {
        $productImages = ProductImage::where('product_id', $id)->get();
        foreach ($productImages as $productImage)
        {
            if (file_exists($productImage->image))
            {
                self::deleteImageFormFolder($productImage->image);
                $productImage->delete();
            }
        }

    }

    public static function updateProductImage($id)
    {
        self::deleteProductImage($id);
        $updateimageinfo = UpdateProductImage::where('product_id', $id)->get();
        foreach ($updateimageinfo as $image)
        {
            $productImage = New ProductImage();
            $productImage->product_id = $id;
            $productImage->image = $image->image;
            $productImage->save();
            $image->flag =2;
            $image->action ='Accepted';
            $image->save();
        }
        $lastImage = $updateimageinfo->last();
        $updateinfo = Product::find($id);
        $updateinfo->custom_updated_at = Carbon::now();
        $updateinfo->product_manager_id = $lastImage->product_manager_id;
        $updateinfo->user_id = $lastImage->user_id;
        $updateinfo->save();
    }


    public static function acceptProduct($id)
    {
        $updateproductinfo = UpdateProduct::find($id);
        if($updateproductinfo) {
            $product = Product::find($updateproductinfo->product_id);

            $product->user_id = $updateproductinfo->user_id;

            if ($updateproductinfo->field === "category_id") {
                $product->category_id = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "sub_category_id") {
                $product->sub_category_id = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "brand_id") {
                $product->brand_id = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "unit_id") {
                $product->unit_id = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "name") {
                $product->name = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "code") {
                $product->code = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "short_description") {
                $product->short_description = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "long_description") {
                $product->long_description = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "meta_title") {
                $product->meta_title = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "meta_description") {
                $product->meta_description = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "regular_price") {
                $product->regular_price = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "selling_price") {
                $product->selling_price = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "stock_amount") {
                $product->stock_amount = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "status") {
                $product->status = $updateproductinfo->new_value;
            }
            if ($updateproductinfo->field === "image") {
                $product->image = $updateproductinfo->new_value;
            }
            $product->custom_updated_at = Carbon::now('Asia/Dhaka');

            $updateproductinfo->flag = 2;
            $updateproductinfo->action = "Accepted";
            $updateproductinfo->save();

            $product->save();
        }
        else{
//                $images = ProductImage::find($id);
                self::updateProductImage($id);
        }



    }


    public static function cancelProduct($id)
    {
        $updateproductinfo = UpdateProduct::find($id);
        $updateproductinfo->flag = 3;
        $updateproductinfo->action = "Canceled";
        $updateproductinfo->save();
    }

    public static function deleteProductdata($id)
    {
        self::$product = UpdateProduct::find($id);
        self::$product->delete();
    }
}
