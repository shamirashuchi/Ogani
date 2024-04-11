<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Laravel\Prompts\select;
use Carbon\Carbon;
class Category extends Model
{
    use HasFactory;

    private static $category, $image, $imageUrl;
    public $timestamps = false;

    public $updated_at = null;
    public static function newCategory($request)
    {
        $category = new Category();
        $category->custom_created_at = Carbon::now('Asia/Dhaka');
        self::saveBasicInfo($category, $request, getFileUrl($request->file('image'), 'upload/category-images/'));
        $category->save();
    }

    public static function updateCategory($request, $id)
    {
        self::$category     = Category::find($id);
        if (self::$image    = $request->file('image'))
        {
            deleteFile(self::$category->image);
            self::$imageUrl = getFileUrl(self::$image, 'upload/category-images/');
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }
        self::$category->custom_updated_at = Carbon::now('Asia/Dhaka');
        self::saveBasicInfo(self::$category, $request, self::$imageUrl);
        self::$category->save();
    }

    public static function deleteCategory($id)
    {
        self::$category = Category::find($id);
        deleteFile(self::$category->image);
        self::$category->delete();
    }

    private static function saveBasicInfo($category, $request, $imageUrl)
    {
        $category->name           = $request->name;
        $category->description    = $request->description;
        $category->image          = $imageUrl;
        $category->status         = $request->status;
        return $category;
    }

    public function subCategory()
    {
        return $this->hasMany(SubCategory::class);
    }
}
