<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    
    protected $primaryKey = 'id';

	public $timestamps 	  = true;

    protected $fillable = [
    	''
    ];

    protected $rules 	  = [];
	protected $hidden 	  = [];
}
