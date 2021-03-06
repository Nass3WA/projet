<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;
    
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }   
    
     public function platforms()
    {
        return $this->belongsToMany(Platform::class,'game_platforms');
    }
     public function studio()
    {
        return $this->belongsTo(Studio::class);
    }
    
 
    protected $dates =[
        'release_date'
    ];
}
