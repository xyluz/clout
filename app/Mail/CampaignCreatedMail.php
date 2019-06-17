<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Models\User;
use App\Models\Campaign;

class CampaignCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public $campaign;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $campaign, User $user)
    {
        $this->user = $user;
        $this->campaign = $campaign;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.create-campaign');
    }
}
