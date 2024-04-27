<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use function Laravel\Prompts\select;
use Carbon\Carbon;
class Category extends Model
{
    use HasFactory;

    private static $category, $image, $imageUrl,$categories;
    public $timestamps = false;

    public $updated_at = null;
    public static function newCategory($request)
    {
        $category = new Category();
        $category->custom_created_at = Carbon::now('Asia/Dhaka');
        self::saveBasicInfo($category, $request, getFileUrl($request->file('image'), 'upload/category-images/'));
        $category->save();
    }

    public static function updateNewCategory()
    {
        $categories = Category::where('flag', 0)->get();
        foreach ($categories as $category) {
            $category->action = "Seen";
            $category->flag = 1;
            $category->save();
        }
    }
    public static function acceptCategory($id)
    {
        $category    = Category::find($id);
        $category->custom_created_at = Carbon::now('Asia/Dhaka');
        $category->flag = 2;
        $category->action = "Accepted";
        $category->save();
    }

    public static function cancelCategory($id)
    {
        $category    = Category::find($id);
        $category->custom_created_at = Carbon::now('Asia/Dhaka');
        $category->flag = 3;
        $category->action = "Canceled";
        $category->save();
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
        $category->user_id        =Auth::user()->id;
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
