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
    public static function newCategory($request, $id)
    {
        $category =  new UpdateCategory();
        $category->user_id = Auth::user()->id;
        $category->field = $request->input('field');
        $category->old_value = $request->input('old_value');

        if ($request->hasFile('new_value')) {
            $file = $request->file('new_value');
            $fileName = rand(10000, 500000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/upload/directory/'), $fileName);
            $fileUrl = '/upload/directory/' . $fileName;
            $category->new_value = $fileUrl;
        } else {
            $category->new_value = $request->input('new_value');
        }

        $category->category_id = $request->input('category_id');
        $category->custom_created_at = Carbon::now('Asia/Dhaka');
        $category->save();
    }
        public static function updateCategoryflag()
    {
        $updateCategories = UpdateCategory::where('flag', 0)->get();
        foreach ($updateCategories as $category) {
            $category->action = "Seen";
            $category->flag = 1;
            $category->save();
        }
    }
    public static function acceptCategory($id)
        {
        $updateCategoryinfo     = UpdateCategory::find($id);
        $category     = Category::find($updateCategoryinfo->category_id);
        $category->user_id  = $updateCategoryinfo->user_id;
        if($updateCategoryinfo->field === "name")
        {
            $category->name  = $updateCategoryinfo->new_value;
        }
        if($updateCategoryinfo->field === "description")
        {
            $category->description = $updateCategoryinfo->new_value;
        }
        if($updateCategoryinfo->field === "image")
        {
            $category->image = $updateCategoryinfo->new_value;
        }
        if($updateCategoryinfo->field === "status")
        {
            $category->status = $updateCategoryinfo->new_value;
        }
        $category->custom_updated_at = Carbon::now('Asia/Dhaka');
        $updateCategoryinfo->flag = 2;
        $updateCategoryinfo->action = "Accepted";
        $updateCategoryinfo->save();
        $category->save();
    }
    public static function cancelCategory($id)
    {
        $updateCategoryinfo     = UpdateCategory::find($id);
        $updateCategoryinfo->flag = 3;
        $updateCategoryinfo->action = "Canceled";
        $updateCategoryinfo->save();
    }
        public static function deleteCategorydata($id)
    {
        self::$category = UpdateCategory::find($id);
        deleteFile(self::$category->image);
        self::$category->delete();
    }
}
