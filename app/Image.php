<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
	protected $tabla = "Images";

	protected $fillable = ['name','article_id'];

	// Relación
	public function article()
	{
		return $this->belongsTo('App\Article'); // 1 a muchos
	}

}
