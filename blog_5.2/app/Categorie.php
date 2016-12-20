<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';

    protected $primaryKey = 'id';

	public $timestamps 	  = true;

    protected $fillable = [
    	''
    ];

    protected $rules 	  = [];
	protected $hidden 	  = [];
}
