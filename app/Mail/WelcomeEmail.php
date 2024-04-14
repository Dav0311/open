<?php
namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class WelcomeEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $title;
    public $body;
    public $student;

    public function __construct($title, $body, $student)
    {
        $this->title = $title;
        $this->body = $body;
        $this->student = $student;
    }

    public function build()
    {
        return $this->view('emails.welcome')
                    ->with([
                        'title' => $this->title,
                        'body' => $this->body,
                        'student' => $this->student
                    ])
                    ->subject('Welcome to UICT Open library System');
    }
}
