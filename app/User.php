<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'surname', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];

    public static $rules = [
        'name' => 'required',
        'surname' => 'required',
        'email' => 'required|email|unique:users,id',
        'password' => 'required'
    ];

    public static $rulesUpdate = [
        'name' => 'required',
        'surname' => 'required',
        'email' => 'required|email|unique:users,id',
        'club_id' => 'required',
        'taille' => 'required',
        'birthday' => 'required',
        'poste' => 'required'
    ];

    public function club()
    {
        return $this->belongsTo('App\Club');
    }

}
