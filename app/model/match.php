<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;
use App\model\country;

class match extends Model
{
     protected $table = 'matches';
     protected $fillable = ['group_id','teame1','teame2','points','goals','teame1-goals	','teame2-goals	'];


public function teame1name()
{
	return $this->hasOne(country::class,'id','teame1');
}

public function teame2name()
{
	return $this->hasOne(country::class,'id','teame2');
}

public function group()
{
	return $this->hasOne(group::class,'id', 'group_id');
}



}//end of class
