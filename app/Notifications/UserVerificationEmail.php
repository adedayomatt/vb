<?php

namespace App\Notifications;


use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Lang;
use Illuminate\Auth\Notifications\VerifyEmail as VerifyEmailBase;


class UserVerificationEmail extends Notification
{
    use Queueable;

    /**
     * Get the notification's channels.
     *
     * @param  mixed  $notifiable
     * @return array|string
     */
    public function via($notifiable)
    {
        return ['mail'];
    } 
    
public function toMail($notifiable)
  {

      return (new MailMessage)
          ->subject(Lang::getFromJson('Verify Email Address'))
          ->line(Lang::getFromJson('Please click the button below to verify your email address.'))
          ->action(
              Lang::getFromJson('Verify Email Address'),
              $this->verificationUrl($notifiable)
          )
          ->line(Lang::getFromJson('If you did not create an account, no further action is required.'));
  }

    /**
     * Get the verification URL for the given notifiable.
     *
     * @param  mixed  $notifiable
     * @return string
     */
    protected function verificationUrl($notifiable)
    {
        return URL::temporarySignedRoute(
            'user.verification.verify', Carbon::now()->addMinutes(60), ['id' => $notifiable->getKey()]
        );
    }


}
