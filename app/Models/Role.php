<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable=['name'];

    public $timestamps = false;

    public function user()
    {
        return $this->hasMany(UserRole::class, 'role_id', 'id');
    }
    
//14
    public static function getRoleByName($name)
        {
            return \Illuminate\Support\Facades\DB::table('roles')->select('id')->where('name', '=', $name)->get()[0]->id;
        }

 

}
