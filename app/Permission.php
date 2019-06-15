<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Permission extends Model
{
    protected $fillable = [
        'name', 'slug', 'description', 'role_id'
    ];

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function users()
    {
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function store($request)
    {
        $permission = self::create($request->all() + [
                'slug' => Str::slug($request->name, '-')
            ]);

        toast('Permiso guardado', 'success', 'top-right');

        return $permission;
    }
}
