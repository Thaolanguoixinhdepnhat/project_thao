<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Bắt buộc thêm


class OrderItem extends Model
{

    use HasFactory, SoftDeletes; // Kích hoạt SoftDeletes

    protected $table = 'order_item'; 
    protected $fillable = ['order_id', 'product_name', 'quantity', 'cost', 'price', 'note', 'status_id', 'ship_date','created_at','updated_at','deleted_at', 'create_staff', 'update_staff', 'delete_staff','customer_name','customer_address','customer_phone','customer_email','product_class_id']; 

    // Định nghĩa cột cho xóa mềm
    protected $dates = ['deleted_at']; 

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // In your Cart model
    public function product_class()
    {
        return $this->belongsTo(ProductClass::class, 'product_class_id'); // Make sure 'product_class_id' is the correct foreign key
    }

    public $timestamps = false;

}
