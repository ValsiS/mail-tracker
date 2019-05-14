<?php

namespace valsis\MailTracker\Events;

use valsis\MailTracker\Model\SentEmail;
use Illuminate\Queue\SerializesModels;

class PermanentBouncedMessageEvent
{
    use SerializesModels;

    public $email_address;

    /**
     * Create a new event instance.
     *
     * @param  email_address  $email_address
     * @return void
     */
    public function __construct($email_address)
    {
        $this->email_address = $email_address;
    }
}
