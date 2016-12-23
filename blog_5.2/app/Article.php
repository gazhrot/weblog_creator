<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table 	  = 'article';

    protected $primaryKey = 'id';

	public $timestamps 	  = true;

    protected $fillable   = [
    	''
    ];

    protected $rules 	  = [];
	protected $hidden 	  = [];

	public function categorie()
	{
		return $this->belongsTo('App\Categorie');
	}

	public function commentaire()
    {
        return $this->hasMany('App\Commentaire');
    }
}
