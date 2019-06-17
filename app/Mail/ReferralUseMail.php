<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

use App\Models\User;
use App\Models\Transaction;
use App\Models\Ref;

class ReferralUseMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $transaction;
    public $ref;

    /**
     * Create a new message instance.
     *
     * @return void 
     */
    public function __construct(User $user, Transaction $transaction, Ref $ref)
    {
        $this->user = $user;
        $this->transaction = $transaction;
        $this->ref = $ref;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.referral-use');
    }
}
