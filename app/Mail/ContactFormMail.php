<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
 
class ContactFormMail extends Mailable
{
    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        return $this->from('zcradle7@gmail.com', 'zcradle')
        ->subject('Zcradle Contact Us Message')
        ->view('emails.contact-form')
        ->with([
            'name' => $this->data['name'],
            'email' => $this->data['email'],
            'subject' => $this->data['subject'],
            'user_message' => $this->data['user_message'], // Update the key here
        ]);
    }
}