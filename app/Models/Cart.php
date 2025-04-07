<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Bắt buộc thêm

class Cart extends Model
{
    use HasFactory, SoftDeletes; // Kích hoạt SoftDeletes
    protected $table = 'cart'; // Đảm bảo đúng tên bảng trong DB
    protected $fillable = ['customer_id', 'product_id', 'product_class_id', 'product_images_id', 'quantity', 'price', 'created_at'];


    public $timestamps = false;

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // Define the relationship with ProductClass
    // public function productClass()
    // {
    //     return $this->belongsTo(ProductClass::class);
    // }
    public function productClass()
{
    return $this->belongsTo(ProductClass::class, 'product_class_id');
}


    public function productImages()
    {
        return $this->belongsTo(ProductImage::class, 'product_images_id');
    }
        // Định nghĩa cột cho xóa mềm
        protected $dates = ['deleted_at']; 


       
}





