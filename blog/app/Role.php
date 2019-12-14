<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $timestamps = false;
    protected $fillable = [
    	'role_name','create_at', 'update_at'
    ];
    public function getUserObject()
    {
    	return $this->belongToMany(User::class)->using(UserRole:class);
    }
}