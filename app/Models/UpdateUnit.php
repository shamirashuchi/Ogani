<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UpdateUnit extends Model
{
    use HasFactory;
    private static $unit,$updateunits,$updateunitinfo;
    public $timestamps = false;

    public $updated_at = null;
    public static function newCategory($request, $id)
    {
        $unit =  new UpdateUnit();
        $unit->user_id = Auth::user()->id;
        $unit->field = $request->input('field');
        $unit->old_value = $request->input('old_value');
        $unit->new_value = $request->input('new_value');
        $unit->unit_id = $request->input('unit_id');
        $unit->custom_created_at = Carbon::now('Asia/Dhaka');
        $unit->save();
    }
    public static function updateCategoryflag()
    {
        $updateunits = UpdateUnit::where('flag', 0)->get();
        foreach ($updateunits as $unit) {
            $unit->action = "Seen";
            $unit->flag = 1;
            $unit->save();
        }
    }
    public static function acceptCategory($id)
    {
        $updateunitinfo     = UpdateUnit::find($id);
        $unit     = Unit::find($updateunitinfo->unit_id);
        $unit->user_id  = $updateunitinfo->user_id;
        if($updateunitinfo->field === "name")
        {
            $unit->name  = $updateunitinfo->new_value;
        }
        if($updateunitinfo->field === "description")
        {
            $unit->description = $updateunitinfo->new_value;
        }
        if($updateunitinfo->field === "code")
        {
            $unit->code = $updateunitinfo->new_value;
        }
        if($updateunitinfo->field === "status")
        {
            $unit->status = $updateunitinfo->new_value;
        }
        $unit->custom_updated_at = Carbon::now('Asia/Dhaka');
        $updateunitinfo->flag = 2;
        $updateunitinfo->action = "Accepted";
        $updateunitinfo->save();
        $unit->save();
    }
    public static function cancelCategory($id)
    {
        $updateunitinfo     = UpdateUnit::find($id);
        $updateunitinfo->flag = 3;
        $updateunitinfo->action = "Canceled";
        $updateunitinfo->save();
    }
    public static function deleteCategorydata($id)
    {
        self::$unit = UpdateUnit::find($id);
        self::$unit->delete();
    }
}
