<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'zi'
        ,'siteId'
        ,'gsmId'
        ,'topoCont'
        ,'plannRedr'
        ,'Country'
        ,'dateReal'
        ,'semReal'
        ,'statuts'
    ];
}
