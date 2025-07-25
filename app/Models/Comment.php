<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    protected $table = 'comment'; 

    protected $fillable = [
        'product_id',
        'customer_id',
        'rating',
        'note',
        'create_at',
        'update_at',
        'delete_at',
    ];

    public $timestamps = false;


    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_id');
    }

    public function product()
    {
        return $this->hasMany(Product::class, 'id');
    }
}
