<?php

namespace App\Http\Controllers;
use App\Mail\VotingEmail;
use App\Mail\ParticipantEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class MailController extends Controller
{
    public function sendVotingEmail()
    {
        // Destinatario del correo
        $to_email = "43093049@roquegonzalez.org";

        Mail::to($to_email)->send(new VotingEmail());
        return "El correo ha sido enviado con éxito.";
    }

    public function sendParticipantEmail(Request $request)
    {
        // Destinatario del correo
        $to_email = "43093049@roquegonzalez.org";

        Mail::to($to_email)->send(new ParticipantEmail());
        return "El correo de participación ha sido enviado con éxito.";
    }
}
