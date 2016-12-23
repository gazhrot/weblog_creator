<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $table = 'media';

    protected $primaryKey = 'id';

	public $timestamps 	  = true;

    protected $fillable = [
    	''
    ];

    protected $rules 	  = [];
	protected $hidden 	  = [];
}
