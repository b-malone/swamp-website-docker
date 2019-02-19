<?php

namespace App\Mail;

// https://api.mailgun.net/v3/YOUR_DOMAIN/

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Message extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;
    public $message;

    public $title;
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(String $name, String $email, String $message) {
      $this->name = $name;
      $this->email = $email;
      $this->message = $message;

      $this->title = "Swamp Website Message";
      $this->content = $message;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.basic')
                    ->from("bmalone.developer@gmail.com", "SWAMP")
                    ->subject("Swamp Website Message");
        // return $this->view('emails.message');
    }


}
