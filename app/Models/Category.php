<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'slug',
        'description',
        'icon',
        'is_active'
    ];

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function getProductCountAttribute()
    {
        return $this->products()->count();
    }
}
