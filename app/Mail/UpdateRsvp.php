<?php

namespace App\Mail;

use App\Rsvp;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class UpdateRsvp extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The rsvp instance.
     *
     * @var Rsvp
     */
    public $rsvp;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Rsvp $rsvp)
    {
        $this->rsvp = $rsvp;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.updatersvp');
    }
}
