<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $table = "permission";

    protected $fillable = [
        'name', 'value',
    ];


    public function roles() {
        return $this->belongsToMany(Role::class, "role_permission", "role_id", "permission_id")
                ->withPivot(['role_id', 'permission_id']);
    }
}
