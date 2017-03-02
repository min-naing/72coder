<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PageView extends Model
{
    
    protected $table = 'pageview';
    protected $fillable = ['pageName','ip_address','total_view','date'];
}
