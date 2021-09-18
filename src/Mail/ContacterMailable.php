<?php

namespace SamuelKrupik\Contacter\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use SamuelKrupik\Contacter\Models\Contact;

class ContacterMailable extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    /**
     * Contact model
     *
     * @var Contact
     */
    private Contact $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( Contact $contact )
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this
            ->from($this->contact->email, $this->contact->name)
            ->markdown( 'contacter::mails.contact' )->with( [
            'contact' => $this->contact
        ] );
    }
}
