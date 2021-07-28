<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class CorreoE extends Mailable
{
    use Queueable, SerializesModels;

    public $subject = "Comentarios del Cliente";
    public $contactar = "haciendo pruebas";
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contactar)
    {
        $this->contactar= $contactar;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.contactanos');
    }
}
