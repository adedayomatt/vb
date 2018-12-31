<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Vendor extends Authenticatable implements MustVerifyEmail
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
     * This is to send verification email, it overrides the default laravel verification notification
	 * 
    */
     public function sendEmailVerificationNotification()
    {
        $this->notify(new \App\Notifications\VendorVerificationEmail); 
    }
    
    /**
     * This is to send password reset email, it overrides the default laravel password reset notification
	 * please refer to https://laravel.com/docs/5.7/passwords/#password-customization for proper documentation
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
	public function sendPasswordResetNotification($token){
		$this->notify(new \App\Notifications\sendVendorPasswordResetNotification($token));
	}  

}
