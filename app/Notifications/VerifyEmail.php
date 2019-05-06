<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\User;

class VerifyEmail extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        // return (new MailMessage)
        //             ->line('The introduction to the notification.')
        //             ->action('Please verify your account ', route('verify', $this->user->verification_token))
        //             ->line('Thank you for joining Gamesoft!');

        return (new MailMessage)
        ->from('support@weedoo-documents.com', 'WeeDoo-Documents')
        ->subject('Account Verification')
        ->action('ACtivate Account ', route('verify', $this->user->verification_token))
        ->line('Thank you for using our application!')
        ->markdown('vendor.mail.markdown.message', [
            'user' => $this->user->name,
            'url' => route('verify', $this->user->verification_token),
            'title' => 'Email  Verification',
            'message' => 'Please click on this link to verify your account',
            'subcopy' => 'support@WeeDoo-documents.com'
        ]);
        // return (new MailMessage)
        //     ->line('The introduction to the notification.')
        //     ->action('Please verify your account ', route('verify', $this->user->verification_token))
        //     ->line('Thank you for joining Gamesoft!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
