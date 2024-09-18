<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ParticipantEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {

    }

    public function build()
    {
        $name = "Lucas";
        $participationLink = "";
        $deadline = "25/09/2024 12:00";
        $adminName = "Lautaro";
        $institutionName = "Instituto Superior Roque Gonzalez";
        $contactInfo = "3765 105007";
        return $this->view('mails.participantemail',['name'=>$name, 
                                                'participationLink'=>$participationLink, 
                                                'deadline'=>$deadline,
                                                'adminName'=>$adminName,
                                                'institutionName'=>$institutionName,
                                                'contactInfo'=>$contactInfo]);
    }

    // Plugin Laravel  goto view para hacer ctrl+click en los links.
}
