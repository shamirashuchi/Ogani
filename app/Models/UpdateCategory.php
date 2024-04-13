<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UpdateCategory extends Model
{
    use HasFactory;
    private static $category, $image, $imageUrl;
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
