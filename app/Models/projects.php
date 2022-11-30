<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    use HasFactory;

    protected $fillable=[
          'name',
          'link',
          'image',
          'language_id',
          'framework_id',
          'library_id',
          'description'

    ];
    public function frameworks(){
        return $this->hasOne(framework::class,'id','framework_id');
    }
    public function languages(){
        return $this->hasOne(Languages::class,'id','language_id');
    }
    public function libraries(){
        return $this->hasOne(LanguageLibrary::class,'id','library_id');
    }
}
