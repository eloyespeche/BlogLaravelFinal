<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableInterface;
use Cviebrock\EloquentSluggable\SluggableTrait;


class Article extends Model implements SluggableInterface
{

	use SluggableTrait;

	protected $sluggable = [
        'build_from' => 'title', // de dónde va a sacar el slug
        'save_to'    => 'slug', // será la columna de la BBDD
    ];

	protected $table = "articles";

	protected $fillable = ['title','content','category_id','user_id'];

	// Relacion
	// (Debe llevar por nombre: el nombre del Modelo a
    // la cual se va a relacionar, en este caso en
    // SINGULAR, ya que es 1 a muchos (una categoria puede
    // tener muchos artículos))
	public function category()
	{
		return $this->belongsTo('App\Category'); // 1 a muchos
	}

	// Relación
	public function user()
	{
		return $this->belongsTo('App\User'); // 1 a muchos
	}

	// Relación
	public function images()
	{
		return $this->hasMany('App\Image'); // 1 a muchos
	}

	// Relacion
	public function tags()
	{
		return $this->belongsToMany('App\Tag'); // muchos a muchos
	}

	public function scopeSearch($query, $title)
	{
		return $query->where('title', 'LIKE', "%$title%");
	}
}
