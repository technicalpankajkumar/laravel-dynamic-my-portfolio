<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutProfile extends Model
{
    use HasFactory;

    protected $fillable=[
        'tagline',
        'link',
        'image',
        'description'
    ];
}
