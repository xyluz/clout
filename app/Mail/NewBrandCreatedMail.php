<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\Account;
use App\Models\User;

class NewBrandCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $account;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Account $account, User $user)
    {
        $this->user = $user;
        $this->account = $account;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.create-brand');
    }
}
