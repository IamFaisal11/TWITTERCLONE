<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class post extends Model
{   protected $table ="posts";
     protected $primaykey="postid"; 
    use HasFactory;
}
