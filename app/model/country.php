<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    protected $table = 'countries';
    protected $fillable = ['name','country_code'];
}
