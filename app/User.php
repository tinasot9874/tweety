<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, Followable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'avatar', 'cover', 'name', 'email', 'password',
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

    public function getAvatarAttribute($value)
    {
        if (isset($value)) {
            return asset('storage/' . $value);
        } else {
            return asset('images/default-avatar.jpeg');
        }
    }

    public function getCoverAttribute($value)
    {
        return asset('storage/' . $value);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function timeline()
    {
        // include all of the user's tweets
        // as well as the tweets of everyone
        // they follow... in descending order by date.

        $friends = $this->follows()->pluck('id');


        return Tweet::whereIn('user_id', $friends)
            ->orWhere('user_id', $this->id)
            ->latest()->get();
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class)->latest();
    }

    public function path($append = '')
    {
        $path = route('profile', $this->username);
        return $append ? "{$path}/{$append}" : $path;
    }
}
