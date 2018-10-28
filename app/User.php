<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = "users";

    /**
     * The attributes that are mass assignable.
     * $fillable和guarded属性都是laravel的批量赋值方法create()
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     * $hidden属性可以隐藏字段，使其不出现在数组或者json格式中。
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function roles() {
        return $this->belongsToMany(Role::class, "user_role", "user_id", "role_id")
                ->withPivot(['user_id', 'role_id']);
    }
}
