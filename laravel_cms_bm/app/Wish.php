<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Wish extends Model
{
    protected $table = 'wishes';
    protected $fillable = ['name', 'email', 'wishes'];
}
