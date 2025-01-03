<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'category_id', 'name', 'unit', 'price'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
