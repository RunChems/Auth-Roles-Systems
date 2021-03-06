<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    public $timestamps = false;
    protected $fillable = ['permission_name'];

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function auths(): BelongsToMany
    {
        return $this->belongsToMany(Auth::class, 'extra_permissions')
            ->withPivot('allowed');
    }

}