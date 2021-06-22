<?php

namespace App;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //protected $table = 'user_info';
    protected $primaryKey = 'userId';
    public $timestamps = false;
}
