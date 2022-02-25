<?php

namespace App\Mail;

use App\Services\Mail\MailEntity;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ForgetPasswordMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var MailEntity
     */
    public $mailEntity;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->subject($this->mailEntity->getSubject())
            ->view($this->mailEntity->getView());
    }

    public function setMailable(MailEntity $mailEntity){
        $this->mailEntity = $mailEntity;
    }
}
