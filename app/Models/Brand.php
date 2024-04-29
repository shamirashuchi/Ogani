<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Brand extends Model
{
    use HasFactory;
    private static $brand, $image, $imageUrl,$brands;
    public $timestamps = false;

    public $updated_at = null;
    public static function newCategory($request)
    {
        $brand = new Brand();
        $brand->custom_created_at = Carbon::now('Asia/Dhaka');
        self::saveBasicInfo($brand, $request, getFileUrl($request->file('image'), 'upload/brand-images/'));
        $brand->save();
    }

    public static function updateNewCategory()
    {
        $brands = Brand::where('flag', 0)->get();
        foreach ($brands as $brand) {
            $brand->action = "Seen";
            $brand->flag = 1;
            $brand->save();
        }
    }
    public static function acceptCategory($id)
    {
        $brand    = Brand::find($id);
        $brand->custom_created_at = Carbon::now('Asia/Dhaka');
        $brand->flag = 2;
        $brand->action = "Accepted";
        $brand->save();
    }

    public static function cancelCategory($id)
    {
        $brand    = Brand::find($id);
        $brand->custom_created_at = Carbon::now('Asia/Dhaka');
        $brand->flag = 3;
        $brand->action = "Canceled";
        $brand->save();
    }
    public static function deleteCategory($id)
    {
        self::$brand = Brand::find($id);
        deleteFile(self::$brand->image);
        self::$brand->delete();
    }




    private static function saveBasicInfo($brand, $request, $imageUrl)
    {
        $brand->name           = $request->name;
        $brand->user_id        =Auth::user()->id;
        $brand->description    = $request->description;
        $brand->image          = $imageUrl;
        $brand->status         = $request->status;
        return $brand;
    }
//    private static $brand, $image, $extension, $imageName, $directory, $imageUrl;
//
//    private static function getImageUrl($image)
//    {
//        self::$extension    = $image->getClientOriginalExtension(); // png
//        self::$imageName    = time().'.'.self::$extension; // 32123435.png
//        self::$directory    = 'upload/Brand-images/';
//        $image->move(self::$directory, self::$imageName);
//        self::$imageUrl     = self::$directory.self::$imageName; // upload/Brand-images/32123435.png
//        return self::$imageUrl;
//    }
//
//    public static function newBrand($request)
//    {
//        self::saveBasicInfo(new Brand(), $request, self::getImageUrl($request->file('image')));
//    }
//
//    public static function updateBrand($request, $id)
//    {
//        self::$brand = Brand::find($id);
//        if (self::$image = $request->file('image'))
//        {
//            self::deleteImageFormFolder(self::$brand->image);
//            self::$imageUrl = self::getImageUrl($request->file('image'));
//        }
//        else
//        {
//            self::$imageUrl = self::$brand->image;
//        }
//        self::saveBasicInfo(self::$brand, $request, self::$imageUrl);
//    }
//
//    public static function deleteBrand($id)
//    {
//        self::$brand = Brand::find($id);
//        self::deleteImageFormFolder(self::$brand->image);
//        self::$brand->delete();
//    }
//
//    private static function saveBasicInfo($brand, $request, $imageUrl)
//    {
//        $brand->name           = $request->name;
//        $brand->description    = $request->description;
//        $brand->image          = $imageUrl;
//        $brand->status         = $request->status;
//        $brand->save();
//    }
//
//    private static function deleteImageFormFolder($imageUrl)
//    {
//        if (file_exists($imageUrl))
//        {
//            unlink($imageUrl);
//        }
//    }
}
