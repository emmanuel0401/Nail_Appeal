<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ResetContrasena extends Notification
{
    /**
     * The password reset token.
     *
     * @var string
     */
    public $token;
    /**
     * Create a notification instance.
     *
     * @param  string  $token
     * @return void
     */
    public function __construct($token)
    {
        $this->token = $token;
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
        return (new MailMessage)
                    ->subject('Solicitud de reestablecimiento de contraseña')
                    ->greeting('Hola  ' .$notifiable->name)
                    ->line('Recibes este correo electronico porque se solicitó un reestablecimiento
                    de contraseña para tu cuenta.')
                    ->action('Reestablecer contraseña', url('/'))
                    ->line('Si no realizaste esta petición, puedes ignorar este correo o borrarlo!')
                    ->line('Gracias por visitar nuestro sitio web!')
                    ->salutation('Te enviamos saludos desde The Nail Appeal');
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
