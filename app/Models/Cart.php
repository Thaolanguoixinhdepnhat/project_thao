<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = 'cart'; // Đảm bảo đúng tên bảng trong DB
    protected $fillable = ['customer_id', 'product_id', 'product_class_id', 'quantity', 'price', 'created_at'];

    public $timestamps = false; // Nếu bảng không có `updated_at`
}


