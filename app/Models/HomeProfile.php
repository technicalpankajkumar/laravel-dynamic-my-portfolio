<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeProfile extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'web_name',
        'image',
        'description'
    ];
}
