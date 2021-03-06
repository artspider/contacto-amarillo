<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tag extends Model
{
    //

    protected $fillable = [
      'name',
    ];

    public function experts()
    {
      return $this->belongsToMany('App\Expert');
    }

    public function scopeName($query, $name)
    {
      if($name)
        return $query->where('name', 'LIKE', "%$name%");
    }

    public function scopeOrName($query, $name)
    {
      if($name)
        return $query->orWhere('name', 'LIKE', "%$name%");
    }
}
