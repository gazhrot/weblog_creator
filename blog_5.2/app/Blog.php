<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    
    protected $primaryKey = 'id';

	public $timestamps 	  = true;

    protected $fillable = [
    	'user_id',
    	'titre',
    	'description',
    	'banniere'
    ];

    protected $rules 	  = [];
	protected $hidden 	  = [];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

    public function categorie()
    {
        return $this->hasMany('App\Categorie');
    }

    public function article()
    {
        return $this->hasMany('App\Article');
    }
}
