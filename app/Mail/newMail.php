<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class newMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * newMail constructor.
     */

    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('nesterov.andrey.a@yandex.ru')->markdown('email')->to('nesterov.andrey.a@yandex.ru');
    }
}
