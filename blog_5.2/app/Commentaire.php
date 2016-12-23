<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    protected $table = 'commentaire';

    protected $primaryKey = 'id';

	public $timestamps 	  = true;

    protected $fillable = [
    	''
    ];

    protected $rules 	  = [];
	protected $hidden 	  = [];

	public function article()
    {
        return $this->belongsTo('App\Article');
    }
}
