<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FormSend extends Mailable
{
    use Queueable, SerializesModels;
    public $infos;
    public $subjectTitle;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        // dd(count($data));
        if (count($data) > 1) {
            $this->infos = $data[0];
            $this->subjectTitle = $data[1];
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from($this->infos->email)->view('template.templateForm')->subject($this->subjectTitle != NULL ? $this->subjectTitle->subject : $this->infos->subject_id)->with(['name' => $this->infos->name, 'email' => $this->infos->email, 'subject' => $this->subjectTitle->subject, 'content' => $this->infos->content]);
    }
}
