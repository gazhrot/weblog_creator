<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table = 'categorie';

    protected $primaryKey = 'id';

	public $timestamps 	  = true;

    protected $fillable = [
    	'blog_id',
    	'name'
    ];

    protected $rules 	  = [];
	protected $hidden 	  = [];

	public function blog()
	{
		return $this->belongsTo('App\Blog');
	}

	public function article()
    {
        return $this->hasMany('App\Article');
    }
}