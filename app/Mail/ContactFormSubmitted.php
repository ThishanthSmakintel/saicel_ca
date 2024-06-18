<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactFormSubmitted extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $subject;
    public $service;
    public $messageContent;

    /**
     * Create a new message instance.
     *
     * @param string $name
     * @param string $email
     * @param string $subject
     * @param string $service
     * @param string $message
     */
    public function __construct($name, $email, $subject, $service, $messageContent)
    {
        $this->name = (string) $name;
        $this->email = (string) $email;
        $this->subject = (string) $subject;
        $this->service = (string) $service;
        $this->messageContent = (string) $messageContent;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('mail-template.welcome-mail')
                    ->subject($this->subject);
    }
}
