<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    public $timestamps = false;
    protected $fillable = ['role_name'];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class
            , 'roles_permissions');
    }

    public function auths()
    {
        return $this->belongsToMany(Auth::class, 'auths_roles');
    }
}