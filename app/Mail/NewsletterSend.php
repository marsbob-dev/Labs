<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NewsletterSend extends Mailable
{
    use Queueable, SerializesModels;
    public $infos;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->infos = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('marsbob@live.fr')->view('template.templateNewsletter')->subject('Newsletter')->with(['email' => $this->infos->email]);
    }
}
