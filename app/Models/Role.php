<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Role extends Model
{
    use HasFactory;
    protected $table = 'role'; 
    protected $fillable = [
        'role_name'
    ];

    // Mối quan hệ nếu cần (ví dụ, một Role có thể có nhiều Staff)
    public function staff()
    {
        return $this->hasMany(Staff::class);
    }
}
