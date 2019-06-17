<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Purchase;
use App\Models\User;

class ReceiptMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * The order instance.
     *
     * @var Purchase
     */
    public $purchase;
    public $user;
 
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Purchase $purchase, User $user)
    {
        $this->purchase = $purchase;
        $this->user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.receipt');
    }
}
