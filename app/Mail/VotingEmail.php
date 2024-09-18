<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class VotingEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct()
    {

    }

    public function build()
    {
        $nombre = "Lautaro";
        $nombreInstitucion = "Instituto Superior Roque Gonzalez";
        $votingLink = "";
        $startDate = "18/09/2024 11:41";
        $endDate = "25/09/2024 12:00";
        return $this->view('mails.votingemail',['nombre'=>$nombre, 
                                                'nombreInstitucion'=>$nombreInstitucion, 
                                                'votingLink'=>$votingLink,
                                                'startDate'=>$startDate,
                                                'endDate'=>$endDate]);
    }

    // Plugin Laravel  goto view para hacer ctrl+click en los links.
}
