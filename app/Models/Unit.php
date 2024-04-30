<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Unit extends Model
{
    use HasFactory;
    private static $unit;
    private static $image, $imageUrl,$brands;
    public $timestamps = false;

    public $updated_at = null;
    public static function newCategory($request)
    {
        $unit = new Unit();
        $unit->custom_created_at = Carbon::now('Asia/Dhaka');
        self::saveBasicInfo($unit, $request);
        $unit->save();
    }

    public static function updateNewCategory()
    {
        $units = Unit::where('flag', 0)->get();
        foreach ($units as $unit) {
            $unit->action = "Seen";
            $unit->flag = 1;
            $unit->save();
        }
    }
    public static function acceptCategory($id)
    {
        $unit    = Unit::find($id);
        $unit->custom_created_at = Carbon::now('Asia/Dhaka');
        $unit->flag = 2;
        $unit->action = "Accepted";
        $unit->save();
    }

    public static function cancelCategory($id)
    {
        $unit    = Unit::find($id);
        $unit->custom_created_at = Carbon::now('Asia/Dhaka');
        $unit->flag = 3;
        $unit->action = "Canceled";
        $unit->save();
    }
    public static function deleteCategory($id)
    {
        self::$unit = Unit::find($id);
        self::$unit->delete();
    }




    private static function saveBasicInfo($unit, $request)
    {
        $unit->name           = $request->name;
        $unit->user_id        =Auth::user()->id;
        $unit->description    = $request->description;
        $unit->code           =$request->code;
        $unit->status         = $request->status;
        return $unit;
    }
//    public static function newUnit($request)
//    {
//        self::saveBasicInfo(new Unit(), $request,);
//    }
//
//    public static function updateUnit($request, $id)
//    {
//        self::saveBasicInfo(Unit::find($id), $request,);
//    }
//
//    public static function deleteUnit($id)
//    {
//        self::$unit = Unit::find($id);
//        self::$unit->delete();
//    }
//
//    private static function saveBasicInfo($unit, $request)
//    {
//        $unit->name           = $request->name;
//        $unit->code           = $request->code;
//        $unit->description    = $request->description;
//        $unit->status         = $request->status;
//        $unit->save();
//    }

}
