<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $fullName;
    public $email;
    public $subject;
    public $message;
    /**
     * Create a new message instance.
     */
    public function __construct($details)
    {
        $this->fullName = $details["fullName"];
        $this->email    = $details["email"];
        $this->subject  = $details["subject"];
        $this->message  = $details["message"];
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Sedima - Website Form',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'contact_mail',
            with: [
                'fullName' => $this->fullName,
                'email'    => $this->email,
                'subject'  => $this->subject,
                'messageString'  => $this->message,
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
