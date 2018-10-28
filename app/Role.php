<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "role";

    protected $fillable = [
    	"name","value",
    ];

    public function users() {
    	return $this->belongsToMany(User::class, "user_role",'user_id','role_id');
    }

    public function permissions() {
        return $this->belongsToMany(Role::class, "role_permission", "role_id", "permission_id")
                ->withPivot(['role_id', 'permission_id']);
    }
}
