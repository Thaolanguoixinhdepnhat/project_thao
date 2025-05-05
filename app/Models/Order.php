<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Bắt buộc thêm

class Order extends Model
{
    
    use HasFactory, SoftDeletes; // Kích hoạt SoftDeletes

    protected $table = 'order'; 
    protected $fillable = ['customer_id', 'order_date', 'amount', 'status_id']; 


    // Định nghĩa cột cho xóa mềm
    protected $dates = ['deleted_at']; 

   // Trong model Order.php
    public function items()
    {
        return $this->hasMany(OrderItem::class, 'order_id');
    }

    public function productClass()
    {
        return $this->belongsTo(ProductClass::class);
    }

    public function customers()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    public $timestamps = false;
}
