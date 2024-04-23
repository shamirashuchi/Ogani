<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpsateSubCategory extends Model
{
    use HasFactory;
    public static  $category;
    public static function updateSubCategory($request, $id)
    {
        $category =  new upsateSubCategory();

        $category->field = $request->input('field');
        $category->old_value = $request->input('old_value');
        $category->new_value = $request->input('new_value');
        $category->category_id = $request->input('category_id');
//        $subCategory = SubCategory::find($id);
//
//        // Check if the field to be updated is 'name'
//        if ($request->has('field') && $request->input('field') === 'name') {
//            // Update the name field with the new value
//            $subCategory->name = $request->input('new_value');
//        }
//
//        // Check if the field to be updated is 'description'
//        if ($request->has('field') && $request->input('field') === 'description') {
//            // Update the description field with the new value
//            $subCategory->description = $request->input('new_value');
//        }
////        self::$subCategory = SubCategory::find($id);
////        if (self::$image = $request->file('image'))
////        {
////            self::deleteImageFormFolder(self::$subCategory->image);
////            self::$imageUrl = self::getImageUrl($request->file('image'));
////        }
////        else
////        {
////            self::$imageUrl = self::$subCategory->image;
////        }
////        self::saveBasicInfo(self::$subCategory, $request, self::$imageUrl);
        $category->save();
    }
}
