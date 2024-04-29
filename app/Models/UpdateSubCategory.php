<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UpdateSubCategory extends Model
{
    use HasFactory;
    private static $category, $image, $imageUrl,$info;
    public $timestamps = false;

    public $updated_at = null;
    public static function newCategory($request, $id)
    {
        $category =  new UpdateSubCategory();
        $category->user_id = Auth::user()->id;
        $category->field = $request->input('field');
        $category->old_value = $request->input('old_value');

        if ($request->hasFile('new_value')) {
            $file = $request->file('new_value');
            $fileName = rand(10000, 500000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/sub-upload/directory/'), $fileName);
            $fileUrl = '/sub-upload/directory/' . $fileName;
            $category->new_value = $fileUrl;
        } else {
            $category->new_value = $request->input('new_value');
        }

        $category->sub_category_id = $request->input('sub_category_id');
        $category->category_id = $request->input('category_id');
        $category->custom_created_at = Carbon::now('Asia/Dhaka');
        $category->save();
    }
    public static function updateCategoryflag()
    {
        $updateCategories = UpdateSubCategory::where('flag', 0)->get();
        foreach ($updateCategories as $category) {
            $category->action = "Seen";
            $category->flag = 1;
            $category->save();
        }
    }
    public static function acceptCategory($id)
    {
        $info     = UpdateSubCategory::find($id);

        if ($info) {
            $category = SubCategory::find($info->sub_category_id);
            $category->user_id = $info->user_id;
            if ($info->field === "category_id") {
                $category->category_id = $info->new_value;
                $category->custom_updated_at = Carbon::now('Asia/Dhaka');
                $info->flag = 2;
                $info->action = "Accepted";
                $info->save();
                $category->save();
            }
            if ($info->field === "name") {
                $category->name = $info->new_value;
                $category->custom_updated_at = Carbon::now('Asia/Dhaka');
                $info->flag = 2;
                $info->action = "Accepted";
                $info->save();
                $category->save();
            }
            if ($info->field === "description") {
                $category->description = $info->new_value;
                $category->custom_updated_at = Carbon::now('Asia/Dhaka');
                $info->flag = 2;
                $info->action = "Accepted";
                $info->save();
                $category->save();
            }

            if ($info->field === "image") {
                $category->image = $info->new_value;
                $category->custom_updated_at = Carbon::now('Asia/Dhaka');
                $info->flag = 2;
                $info->action = "Accepted";
                $info->save();
                $category->save();
            }
            if ($info->field === "status") {
                $category->status = $info->new_value;
                $category->custom_updated_at = Carbon::now('Asia/Dhaka');
                $info->flag = 2;
                $info->action = "Accepted";
                $info->save();
                $category->save();
            }
        }

    }
    public static function cancelCategory($id)
    {
        $updateCategoryinfo     = UpdateSubCategory::find($id);
        $updateCategoryinfo->flag = 3;
        $updateCategoryinfo->action = "Canceled";
        $updateCategoryinfo->save();
    }
    public static function deleteCategorydata($id)
    {
        self::$category = UpdateSubCategory::find($id);
        deleteFile(self::$category->image);
        self::$category->delete();
    }
}
