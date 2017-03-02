<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    protected $table = 'shop_receive';
    protected $fillable = ['name','email','phone','full_address','ip_address','book','slug'];
}
