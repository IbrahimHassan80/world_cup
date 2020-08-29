<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\match;
class group extends Model
{
    protected $table = 'groups';
    protected $fillable = ['name'];


    public function matches(){
    	return $this->hasMany(match::class, 'group_id','id');
    }










}/// end of class
