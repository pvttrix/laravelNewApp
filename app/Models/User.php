<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{

   
    use Notifiable;

    protected $fillable = ['email', 'password'];

    public function roles()
    {
        return $this->hasMany(UserRole::class, 'user_id', 'id');
    }

    public function isAdmin(): bool
    {
        $userRoles = $this->roles()->get()->toArray();
        foreach ($userRoles as $userRole)
        {
            if($userRole['role_id'] == Role::getIdByName('admin'))
                return true;
        }
        return false;
    }
}

