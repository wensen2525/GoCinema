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
use Illuminate\Support\Facades\Storage;

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

        $pdf = Pdf::loadView('certificates.pdf',[
            'participant' => $participant
        ])->setPaper('a4', 'landscape');
        $pdf->render();


        return $this->markdown('emails.certificate_neo.mail')
                    ->subject('NEO 2022 - Participant Certificate')
                    ->attachData($pdf->output(),$participant->name . '.pdf');
                    // ->attachData($file . $participant->name . '.pdf', $participant->name . '.pdf',[
                    //     'mime' => 'application/pdf'
                    // ]);
                    // ->attach($file['filepath'],[
                    //     'as' => $file['file_name'],
                    //     'mime' => 'application/pdf'
                    // ]);
    }
}
