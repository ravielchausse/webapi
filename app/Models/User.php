<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function listAll ($attributes)
    {
        return User::all();
    }

    public function getById ($id)
    {
        return User::find($id);
    }

    public function deleteById ($id)
    {
        return (string) $this->where('id', $id)->delete();
    }
}
