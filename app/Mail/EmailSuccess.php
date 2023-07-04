<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailable\Adress;
use Illuminate\Mail\Mailable\Content;
use Illuminate\Mail\Mailable\Envelope;
use Illuminate\Queue\SerializesModels;
use App\User;

class EmailSuccess extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(protected User $user)
    {
        //
    }

    public function envelope():Envelope
    {
        return new Envelope(
            from: new Address('forumdance@mail.ru',"Forum-dance school"),
            subject:'RegisterSuccess',
        );
    }

    public function content():Content
    {
        return new Content(
            view:'mails.register-success',
            with: [
                'name'=>$this->name,
                'email'=>$this->email,
                'password'=>$this->password
            ]
        );
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->content();
    }
}
