<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

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

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
{
    return $this
        ->belongsToMany('App\Role')
        ->withTimestamps();
}

public function authorizeRoles($roles)
{
    if ($this->hasAnyRole($roles)) {
        return true;
    }
    abort(401, 'Esta acción no está autorizada.');
}
public function hasAnyRole($roles)
{
    if (is_array($roles)) {
        foreach ($roles as $role) {
            if ($this->hasRole($role)) {
                return true;
            }
        }
    } else {
        if ($this->hasRole($roles)) {
            return true;
        }
    }
    return false;
}
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function talleres()
    {
        return $this->belongsToMany('App\taller','taller_users')->withPivot('taller_id');
    }

    public function inscribir_taller($taller_id)
    {
        $t = new taller_user();
        $t->user_id = $this->id;
        $t->taller_id = $taller_id;
        $t->save();
        return true;
    }

    

}
