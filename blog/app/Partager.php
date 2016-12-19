<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partager extends Model
{
	protected $table 	  = 'partager';

	protected $primaryKey = 'id';

	public $timestamps 	  = true;

	protected $fillable   = [
		'id_user',
		'id_blog'
	];

	protected $rules 	  = [];
	protected $hidden 	  = [];
}
