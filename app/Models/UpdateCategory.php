<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UpdateCategory extends Model
{
    use HasFactory;
    private static $category, $image, $imageUrl,$updateCategoryinfo;
    public $timestamps = false;

    public $updated_at = null;
    public static function newCategory($request,$id)
    {
        $category = new UpdateCategory();
        $category->custom_created_at = Carbon::now('Asia/Dhaka');
        self::$category     = Category::find($id);
        if (self::$image    = $request->file('image'))
        {
//            deleteFile(self::$category->image);
            self::$imageUrl = getFileUrl(self::$image, 'upload/category-images/');
        }
        else
        {
            self::$imageUrl = self::$category->image;
        }
        self::saveBasicInfo($category, $request,self::$imageUrl ,$id);
        $category->save();
    }

    public static function updateCategoryflag()
    {
        $updateCategories = UpdateCategory::where('flag', 0)->get();
        foreach ($updateCategories as $category) {
            $category->flag = 1;
            $category->save();
        }
    }

    public static function updateCategorystart($id)
    {
        $updateCategoryinfo     = UpdateCategory::find($id);
        $category     = Category::find($updateCategoryinfo->category_id);
        $category->user_id  = $updateCategoryinfo->user_id;
        $category->name  = $updateCategoryinfo->name;
        $category->description  = $updateCategoryinfo->description;
        $category->image  = $updateCategoryinfo->image;
        $category->status  = $updateCategoryinfo->status;
        $category->custom_updated_at = Carbon::now('Asia/Dhaka');
        $updateCategoryinfo->flag = 2;
        $updateCategoryinfo->action = "Accepted";
        $updateCategoryinfo->save();
        $category->save();
    }

    public static function cancelCategorystart($id)
    {
        $updateCategoryinfo     = UpdateCategory::find($id);
        $updateCategoryinfo->flag = 3;
        $updateCategoryinfo->action = "Canceled";
        $updateCategoryinfo->save();
    }

    public static function deleteCategorydata($id)
    {
        self::$category = UpdateCategory::find($id);
//        deleteFile(self::$category->image);
        self::$category->delete();
    }

    private static function saveBasicInfo($category, $request, $imageUrl,$id)
    {
        $category->name           = $request->name;
        $category->user_id        =Auth::user()->id;
        $category->category_id    =$id;
        $category->description    = $request->description;
        $category->image          = $imageUrl;
        $category->status         = $request->status;
        return $category;
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
