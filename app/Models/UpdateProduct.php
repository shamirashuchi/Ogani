<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class UpdateProduct extends Model
{
    use HasFactory;
    private static $product,$updateproducts,$updateproductinfo;
    public $timestamps = false;

    public $updated_at = null;
    public static function newProduct($request, $id)
    {
        $product =  new UpdateProduct();
        $product->user_id = Auth::user()->id;
        $product->product_manager_id = $request->input('product_manager_id');
        $product->field = $request->input('field');
        $product->old_value = $request->input('old_value');
        $product->new_value = $request->input('new_value');
        $product->product_id = $request->input('product_id');
        $product->custom_created_at = Carbon::now('Asia/Dhaka');
        $product->save();
        return $product;
    }
}
