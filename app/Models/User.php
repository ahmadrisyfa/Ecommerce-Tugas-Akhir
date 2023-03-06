<?php

namespace App\Models;

use App\Models\Review;
use App\Models\ProfileUser;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    public function getPictureAttribute($value){
        if($value){
            return asset('fotoprofil/'.$value);
        }else{
            return asset('fotoprofil/user.png');
        }
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_as',
        'picture'
    ];
/**
 * Get the userDetail associated with the User
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasOne
 */
public function userDetail()
{
    return $this->hasOne(ProfileUser::class, 'user_id', 'id');
}
public function review()
{        
        return $this->hasMany(Review::class, 'category_id', 'id');
  
}
public function hubungiKami()
{        
        return $this->hasMany(HubungiKami::class, 'category_id', 'id');
  
}
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

}
