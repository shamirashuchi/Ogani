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
        if ($request->hasFile('new_value')) {
            $file = $request->file('new_value');

            $fileName = rand(10000, 500000) . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('/updateproduct/directory/'), $fileName);

            $fileUrl = '/updateproduct/directory/' . $fileName;

            $product->new_value = $fileUrl;

        } else {
            $product->new_value = $request->input('new_value');
        }
        $product->product_id = $request->input('product_id');
        $product->custom_created_at = Carbon::now('Asia/Dhaka');
        $product->save();
        return $product;
    }
}
