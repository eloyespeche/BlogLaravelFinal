<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = "tags";

    protected $fillable = ['name'];

    // Relación
    public function articles()
    {
    	return $this->belongsToMany('App\Article')->withTimestamps(); //muchos a muchos
    }

    public function scopeSearch($query, $name)
    {
    	return $query->where('name', 'LIKE', "%$name%");
    }

}
