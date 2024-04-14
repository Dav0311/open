<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class LoginCredentialsNotification extends Notification
{
    use Queueable;

    protected $password;
    protected $reg_no;

    /**
     * Create a new notification instance.
     *
     * @param string $password
     * @param string $reg_no
     */
    public function __construct($password, $reg_no)
    {
        $this->password = $password;
        $this->reg_no = $reg_no;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array<int, string>
     */
    public function via($notifiable): array
    {
        return ['mail'];
    }

    /**
     * Build the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return MailMessage
     */
    public function toMail($notifiable): MailMessage
    {
        return (new MailMessage)
            ->subject('Your Login Credentials')
            ->line('Your account has been successfully created.')
            ->line('Here are your login credentials:')
            ->line('Email: ' . $notifiable->email)
            ->line('Registration Number: ' . $this->reg_no)
            ->line('Password: ' . $this->password)
            ->action('Login', route('login'));
    }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
