<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Volunteer extends Mailable
{
    use Queueable, SerializesModels;

    public $name;
    public $email;

    public $title;
    public $content;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct(String $name, String $email) {
       $this->name = $name;
       $this->email = $email;

       $this->title = "New Swamp Volunteer";
       $this->content = "Please contact me about volunteering!";
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
                  ->subject("New Swamp Volunteer");
       // return $this->view('emails.volunteer');
    }
}
