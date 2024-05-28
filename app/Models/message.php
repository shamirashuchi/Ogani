<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    public $timestamps = false;

    public $custom_updated_at = null;
    protected $fillable = ['user_id',
        'customer_id',
        'product_id',
        'message',
        'flag',
        'action',
        'custom_created_at',
        'custom_updated_at'];
    // Disable default timestamps if you don't need them

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::creating(function ($model) {
//            $model->custom_created_at = Carbon::now();
//        });
//
//        static::updating(function ($model) {
//            $model->custom_updated_at = Carbon::now();
//        });
//    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function  users()
    {
        return $this->hasMany(User::class);
    }

}
