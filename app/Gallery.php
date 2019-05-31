<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $fillable = [
	'name',
	'body',
	'price',
	'picture',
	'user_id',
	'status',
	'catalog_id'
	];
}
