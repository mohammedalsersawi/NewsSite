<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Uplode extends Model
{
    use HasFactory;
    protected $guarded = [];


    public static function boot()
    {
        parent::boot();
        self::creating(function ($uplode) {
            $uplode->uuid = Str::uuid();
        });
    }
}
