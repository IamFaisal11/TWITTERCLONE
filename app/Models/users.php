<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\post;
class users extends Model
{
    use HasFactory;
    protected $table="user";
    protected $primarykey="id";
function post(){
    return $this->hasMany('App\Models\post','id');
}
}
