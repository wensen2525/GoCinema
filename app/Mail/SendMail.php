<?php

namespace App\Mail;

use App\Models\Participant;
use Illuminate\Support\Str;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Storage;
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
        $length_name = Str::length($participant->name);
        $pdf = Pdf::loadView('certificates.pdf',[
            'length_name' => $length_name,
            'participant' => $participant
        ])->setPaper('a4', 'landscape');
        $pdf->render();
        
        // $url = public_path('certificates/Logo-NEO-2022.png');
        // dd($url);

        return $this->markdown('emails.certificate_neo.mail')
                    ->subject('NEO 2022 - Participant Certificate')
                    ->attachData($pdf->output(),$participant->name . '.pdf');
    }
}
