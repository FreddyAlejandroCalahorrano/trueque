<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Description;

class Product extends Model
{
    protected $fillable = [ 'title', 'image', 'value', 'description'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function questions(){
        return $this->hasMany('App\Question');
    }

    public function category(){
        return $this->belongsTo('App\Category');
    }
}

