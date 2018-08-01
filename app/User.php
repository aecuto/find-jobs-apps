<?php

namespace App;

use App\Models\MemberProfile;
use App\Models\JobPosition;
use App\Models\company;
use App\Models\package;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

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

    public function roles()
    {
      return $this->belongsToMany(Role::class);
    }

    public function member_register()
    {
      return $this->belongsToMany(JobPosition::class, 'member_register');
    }

    public function member_star()
    {
      return $this->belongsToMany(JobPosition::class, 'member_star');
    }

    public function member_profile()
    {
      return $this->hasOne(MemberProfile::class);
    }

    public function have_resume()
    {
      return $this->belongsToMany(MemberProfile::class, 'manager_member_profile');
    }

    public function have_package()
    {
      return $this->belongsToMany(package::class, 'manager_package');
    }

    public function company()
    {
      return $this->hasOne(company::class);
    }

    /**
    * @param string|array $roles
    */
    public function authorizeRoles($roles)
    {
      if (is_array($roles)) {
          return $this->hasAnyRole($roles);
      }
      return $this->hasRole($roles);
    }
    /**
    * Check multiple roles
    * @param array $roles
    */
    public function hasAnyRole($roles)
    {
      return null !== $this->roles()->whereIn('name', $roles)->first();
    }
    /**
    * Check one role
    * @param string $role
    */
    public function hasRole($role)
    {
      return null !== $this->roles()->where('name', $role)->first();
    }
}
