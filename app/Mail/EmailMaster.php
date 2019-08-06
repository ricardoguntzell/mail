<?php

namespace Email\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * Class EmailMaster
 * @package Email\Mail
 */
class EmailMaster extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * @var
     */
    private $sender;
    /**
     * @var
     */
    private $addressee;
    /**
     * @var
     */
    private $name;

    /**
     * @var string
     */
    private $subjectMaster;

    /**
     * @var
     */
    private $message;

    /**
     * @var null
     */
    private $cell;

    /**
     * EmailMaster constructor.
     * @param $sender
     * @param $name
     * @param $message
     * @param $cell
     */
    public function __construct($sender, $name, $message, $cell)
    {
        $this->sender = $sender;
        $this->addressee = env('MAIL_DEFAULT');
        $this->name = $name;
        $this->subjectMaster = "Novo Contato: {$name}";
        $this->message = $message;
        $this->cell = $cell;
    }


    /**
     * @return EmailMaster
     */
    public function build()
    {
        return $this->replyTo($this->sender, $this->name)
            ->to($this->addressee, $this->addressee)
            ->from($this->addressee)
            ->subject($this->subjectMaster)
            ->markdown('web.components.email', [
                'name' => $this->name,
                'sender' => $this->sender,
                'message' => $this->message,
                'cell' => $this->cell,
            ]);
    }
}
