<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UpdateProductImage extends Model
{
    use HasFactory;

    private static $productImage, $image, $extension, $imageName, $directory, $imageUrl, $productImages;
    public $timestamps = false;

    public $updated_at = null;

    private static function getImageUrl($image)
    {
        self::$extension = $image->getClientOriginalExtension();
        self::$imageName = rand(100, 5000) . '.' . self::$extension;
        self::$directory = 'upload/product-other-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newProductImage($images, $productId, $request)
    {

        foreach ($images as $image) {
            self::$imageUrl = self::getImageUrl($image);
            self::$productImage = new UpdateProductImage();
            self::$productImage->product_id = $productId;
            self::$productImage->image = self::$imageUrl;
            self::$productImage->custom_created_at = Carbon::now('Asia/Dhaka');
            self::$productImage->user_id = Auth::user()->id;
            self::$productImage->product_manager_id = $request->input('product_manager_id');
            self::$productImage->save();
        }

        return self::$productImage;

    }
    public static function deleteImageFormFolder($imageUrl)
    {
        if (file_exists($imageUrl))
        {
            unlink($imageUrl);
        }
    }
    public static function updateProductImage($image, $id)
    {
        self::deleteProductImage($id);
        self::newProductImage($image, $id);
    }

    public static function deleteProductImage($id)
    {
        self::$productImages = UpdateProductImage::where('product_id', $id)->get();
        foreach (self::$productImages as $productImage)
        {
            if (file_exists($productImage->image))
            {
                self::deleteImageFormFolder($productImage->image);
                $productImage->delete();
            }
        }
    }
}
