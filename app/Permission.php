<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $fillable = [
        'name', 'slug', 'description'
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
