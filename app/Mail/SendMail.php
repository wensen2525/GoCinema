<?php

namespace App\Mail;

use App\Models\Participant;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    public Participant $participant;
   
    public function __construct(Participant $participant)
    {   
        $this->participant = $participant;
    }

    public function build()
    {   
        $participant = $this->participant;

        $certificate = Pdf::loadView('certificates.pdf',[
            'participant' => $participant->name
        ])->setPaper('a4', 'landscape');

        return $this->markdown('emails.certificate_neo.mail')
                    ->subject('NEO 2022 - Participant Certificate')
                    ->attachData($certificate->output(),$participant->name.'.pdf');
    }
}
