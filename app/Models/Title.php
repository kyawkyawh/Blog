<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    use HasFactory;
    protected $table = 'titles';
    protected $guarded = [];

    public function episodes(){
        return $this->hasMany('App\Models\Episode');
    }
}
