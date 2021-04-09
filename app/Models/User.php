<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'surname',
        'job_id',
        'role_id',
        'photo_id',
        'description',
        'password',
        'approuved'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function jobs()
    {
        return $this->belongsTo(Job::class,'job_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class,'author_id');
    }

    public function photos()
    {
        return $this->belongsTo(Picture::class,'photo_id');
    }

    public function roles()
    {
        return $this->belongsTo(Role::class,'role_id');
    }
}
