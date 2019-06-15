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
        return $this->belongsToMany('App\User')->withTimestamps();
    }

    public function create($request)
    {
        $rpermission = self::create($request->all() + [
                'slug' => Str::slug($request->name, '-')
            ]);

        toast('Permiso guardado', 'success', 'top-right');

        return $rpermission;
    }
}
