<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UpdateBrand extends Model
{
    use HasFactory;
    private static $brand, $image, $imageUrl,$updatebrands,$updatebrandinfo;
    public $timestamps = false;

    public $updated_at = null;
    public static function newCategory($request, $id)
    {
        $brand =  new UpdateBrand();
        $brand->user_id = Auth::user()->id;
        $brand->field = $request->input('field');
        $brand->old_value = $request->input('old_value');

        if ($request->hasFile('new_value')) {
            $file = $request->file('new_value');
            $fileName = rand(10000, 500000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/brand/directory/'), $fileName);
            $fileUrl = '/brand/directory/' . $fileName;
            $brand->new_value = $fileUrl;
        } else {
            $brand->new_value = $request->input('new_value');
        }

        $brand->brand_id = $request->input('brand_id');
        $brand->custom_created_at = Carbon::now('Asia/Dhaka');
        $brand->save();
    }
    public static function updateCategoryflag()
    {
        $updatebrands = UpdateBrand::where('flag', 0)->get();
        foreach ($updatebrands as $brand) {
            $brand->action = "Seen";
            $brand->flag = 1;
            $brand->save();
        }
    }
    public static function acceptCategory($id)
    {
        $updatebrandinfo     = UpdateBrand::find($id);
        $brand     = Brand::find($updatebrandinfo->brand_id);
        $brand->user_id  = $updatebrandinfo->user_id;
        if($updatebrandinfo->field === "name")
        {
            $brand->name  = $updatebrandinfo->new_value;
        }
        if($updatebrandinfo->field === "description")
        {
            $brand->description = $updatebrandinfo->new_value;
        }
        if($updatebrandinfo->field === "image")
        {
            $brand->image = $updatebrandinfo->new_value;
        }
        if($updatebrandinfo->field === "status")
        {
            $brand->status = $updatebrandinfo->new_value;
        }
        $brand->custom_updated_at = Carbon::now('Asia/Dhaka');
        $updatebrandinfo->flag = 2;
        $updatebrandinfo->action = "Accepted";
        $updatebrandinfo->save();
        $brand->save();
    }
    public static function cancelCategory($id)
    {
        $updatebrandinfo     = UpdateBrand::find($id);
        $updatebrandinfo->flag = 3;
        $updatebrandinfo->action = "Canceled";
        $updatebrandinfo->save();
    }
    public static function deleteCategorydata($id)
    {
        self::$brand = UpdateBrand::find($id);
        deleteFile(self::$brand->image);
        self::$brand->delete();
    }
}
