<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreakingNews extends Model
{
    use HasFactory;
    protected $guarded = [];

    public const STATUS = [
        0 => 'inactive',
        1 => 'active',
    ];
}
