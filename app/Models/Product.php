<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Product extends Model
{
    use HasFactory;
    private static $product, $image, $extension, $imageName, $directory, $imageUrl;
    public $timestamps = false;

    public $updated_at = null;
    private static function getImageUrl($image)
    {
        self::$extension    = $image->getClientOriginalExtension(); // png
        self::$imageName    = time().'.'.self::$extension; // 32123435.png
        self::$directory    = 'upload/product-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory.self::$imageName; // upload/product-images/32123435.png
        return self::$imageUrl;
    }

    public static function newProduct($request)
    {
        $product = new Product();
        $product->custom_created_at = Carbon::now('Asia/Dhaka');
        self::saveBasicInfo($product, $request, self::getImageUrl($request->file('image')));
        $product->save();
        return $product;
    }
    public static function updateNewProduct()
    {
        $products = Product::where('product_manager_id', auth()->id())->where('flag', 0)->get();
        foreach ($products as $product) {
            $product->action = "Seen";
            $product->flag = 1;
            $product->save();
        }
    }

    public static function acceptProduct($id)
    {
        $product    = Product::find($id);
        $product->custom_created_at = Carbon::now('Asia/Dhaka');
        $product->flag = 2;
        $product->action = "Accepted";
        $product->save();
    }

    public static function cancelProduct($id)
    {
        $product    = Product::find($id);
        $product->custom_created_at = Carbon::now('Asia/Dhaka');
        $product->flag = 3;
        $product->action = "Canceled";
        $product->save();
    }
    public static function deleteProduct($id)
    {
        self::$product = Product::find($id);
        ProductImage::deleteImageFormFolder(self::$product->image);
        self::$product->delete();
    }

    public static function updateProduct($request, $id)
    {
        self::$product = Product::find($id);
        if (self::$image = $request->file('image'))
        {
            self::deleteImageFormFolder(self::$product->image);
            self::$imageUrl = self::getImageUrl($request->file('image'));
        }
        else
        {
            self::$imageUrl = self::$product->image;
        }
        self::saveBasicInfo(self::$product, $request, self::$imageUrl);
    }

//    public static function deleteProduct($id)
//    {
//        self::$product = Product::find($id);
//        self::deleteImageFormFolder(self::$product->image);
//        self::$product->delete();
//    }

    private static function saveBasicInfo($product, $request, $imageUrl)
    {
        $product->user_id               = Auth::user()->id;;
        $product->product_manager_id    = $request->product_manager_id;
        $product->category_id           = $request->category_id;
        $product->sub_category_id       = $request->sub_category_id;
        $product->brand_id              = $request->brand_id;
        $product->unit_id               = $request->unit_id;
        $product->name                  = $request->name;
        $product->code                  = $request->code;
        $product->short_description     = $request->short_description;
        $product->long_description      = $request->long_description;
        $product->meta_title            = $request->meta_title;
        $product->meta_description      = $request->meta_description;
        $product->regular_price         = $request->regular_price;
        $product->selling_price         = $request->selling_price;
        $product->stock_amount          = $request->stock_amount;
        $product->image                 = $imageUrl;
        $product->status                = $request->status;
    }

    private static function deleteImageFormFolder($imageUrl)
    {
        if (file_exists($imageUrl))
        {
            unlink($imageUrl);
        }
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
    public function otherImage()
    {
        return $this->hasMany(ProductImage::class);
    }
}
