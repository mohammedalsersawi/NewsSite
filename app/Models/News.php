<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class News extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $appends = ['name_category'];

    public function category(){
        return @$this->belongsTo(Category::class);
    }
    public function getNamecategoryAttribute()
    {
        return @$this->category->name;
    }

    public const STATUS = [
        0 => 'inactive',
        1 => 'active',
    ];
}
