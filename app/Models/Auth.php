<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;


class Auth extends Model
{
    protected $table = 'auths';
    protected $fillable = ['username', 'email', 'password'];
    public $timestamps = false;

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class, 'auths_roles',
            'auth_id', 'role_id');
    }

    public function extraPermissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class, 'extra_permissions')
            ->withPivot('allowed');
    }
}