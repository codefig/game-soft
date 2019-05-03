<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\VerifyEmail;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $guard = 'user';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'verification_token',
        'picture',
        'referral_count',
        'referral_bouns',
        'quiz_funds',
        'withdrawals',
        'email_verified_at',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function verified(){
        return $this->verification_token ===  null;
    }

    /**
     *  Send user a verification email
     */
    public function sendVerificationEmail(){

        $this->notify(new VerifyEmail($this));
    }
}
