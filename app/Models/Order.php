<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    private static $order;
    public static function newOrder($request){
        self::$order = new Order();
        self::$order->name =$request->name;
        self::$order->email =$request->email;
        self::$order->mobile =$request->mobile;
        self::$order->delivery_address =$request->delivery_address;
        self::$order->sub_total =$request->sub_total;
        self::$order->tax_total =$request->tax_total;
        self::$order->shipping_total =$request->shipping_total;
        self::$order->order_total =$request->order_total;
        self::$order->payment_method =$request->payment_method;
        self::$order->order_timestamp =strtotime(date('F-j-Y, g:i a'));
        self::$order->save();

        return self::$order;

    }

    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function orderDetails(){
        return $this->hasMany(OrderDetail::class);
    }

    public static function updateOrder($request)
    {
        self::$order = Order::find($request->id);

        if ($request->order_status == 'Pending')
        {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_status   = $request->order_status;
            self::$order->payment_status    = $request->order_status;
        }
        else if($request->order_status == 'Processing')
        {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_address  = $request->delivery_address;
            self::$order->courier_id        = $request->courier_id;
            self::$order->delivery_status   = $request->order_status;
            self::$order->payment_status    = $request->order_status;
        }
        else if($request->order_status == 'Complete')
        {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_status   = $request->order_status;
            self::$order->payment_status    = $request->order_status;
            self::$order->payment_date      = date('Y-m-d');
            self::$order->payment_timestamp = strtotime(date('Y-m-d'));
            self::$order->delivery_date     = date('Y-m-d');
            self::$order->delivery_timestamp= strtotime(date('Y-m-d'));
        }
        else if($request->order_status == 'Cancel')
        {
            self::$order->order_status      = $request->order_status;
            self::$order->delivery_status   = $request->order_status;
            self::$order->payment_status    = $request->order_status;
        }
        self::$order->save();
    }

    public static function deleteOrder($id)
    {
        self::$order = Order::find($id);
        deleteFile(self::$order->image);
        self::$order->delete();
    }

}
