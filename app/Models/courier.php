<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courier extends Model
{
    use HasFactory;

    private static $courier, $image, $imageUrl;

    public static function newCourier($request)
    {
        self::saveBasicInfo(new Courier(), $request, getFileUrl($request->file('image'), 'upload/courier-images/'));
    }

    public static function updateCourier($request, $id)
    {
        self::$courier     = Courier::find($id);
        if (self::$image   = $request->file('image'))
        {
            deleteFile(self::$courier->logo);
            self::$imageUrl = getFileUrl(self::$image, 'upload/courier-images/');
        }
        else
        {
            self::$imageUrl = self::$courier->logo;
        }
        self::saveBasicInfo(self::$courier, $request, self::$imageUrl);
    }

    public static function deleteCourier($id)
    {
        self::$courier = Courier::find($id);
        deleteFile(self::$courier->logo);
        self::$courier->delete();
    }

    private static function saveBasicInfo($courier, $request, $imageUrl)
    {
        $courier->name      = $request->name;
        $courier->email     = $request->email;
        $courier->mobile    = $request->mobile;
        $courier->address   = $request->address;
        $courier->logo      = $imageUrl;
        $courier->cost      = $request->cost;
        $courier->save();
    }
}
