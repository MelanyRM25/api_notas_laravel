<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Note extends Model
{
    use SoftDeletes; //usams softdeletes importamos la clase 
    protected $fillable = ['title','content','date','user_id','color']; //campos a llenar 
    protected $hidden = ['created_at','updated_at','deleted_at']; //ocultar datos

//relacion usuario que usuario se ha registrado 
    function user(){ 
        return $this->belongsTo(User::class);
    }
}
