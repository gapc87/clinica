<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Role extends Model
{
    protected $fillable = [
        'name', 'slug', 'description'
    ];

    public function permissions()
    {
        return $this->hasMany('App\Permission');
    }

    public function users()
    {
        return $this->belongsToMany('App\Users')->withTimestamps();
    }

    public function store($request)
    {
        $role = self::create($request->all() + [
            'slug' => Str::slug($request->name, '-')
        ]);

        toast('Rol guardado', 'success', 'top-right');

        return $role;
    }

    public function my_update($request)
    {
        self::update($request->all() + [
            'slug' => Str::slug($request->name, '-')
        ]);
    }
}
