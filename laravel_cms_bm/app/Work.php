<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    protected $table='work';
    protected $fillable=['name','email','phone','address','experience','type'];
}
