<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'category_id',
        'title',
        'image',
        'address',
        'price',
        'area',
        'rooms',
        'description'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
