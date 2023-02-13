<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Certificate;
use App\Models\Participant;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Foreach_;

class CeritificateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function show(Certificate $certificate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function edit(Certificate $certificate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Certificate $certificate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Certificate  $certificate
     * @return \Illuminate\Http\Response
     */
    public function destroy(Certificate $certificate)
    {
        //
    }

    public function download(Participant $participant){
        $length_name = Str::length($participant->name);
        // dd($length_name);
        $pdf = Pdf::loadView('certificates.pdf',[
            'participant' => $participant,
            'length_name' => $length_name
        ])->setPaper('a4', 'landscape');
        return $pdf->download($participant->name.'.pdf');

    }

    public function downloadAllCertificates($scale){
        if($scale === '1 - 50'){
            $participants = Participant::all()->take(50);
        }   
        elseif($scale === '51 - 100'){
            $participants = Participant::all()->skip(50)->take(50);
        }
            

        foreach($participants as $participant) {
            $length_name = Str::length($participant->name);
            $pdf = Pdf::loadView('certificates.pdf',[
                'participant' => $participant,
                'length_name' => $length_name
            ])->setPaper('a4', 'landscape');

            $content = $pdf->download();

            Storage::put('public/certi/'.$participant->name.'.pdf',$content);
        }
        return redirect()->back();
    }

    public function save(Participant $participant){
        $length_name = Str::length($participant->name);
        // dd($length_name);
        $pdf = Pdf::loadView('certificates.pdf',[
            'participant' => $participant,
            'length_name' => $length_name
        ])->setPaper('a4', 'landscape');

        $content = $pdf->download();

        Storage::put('public/certi/'.$participant->name.'.pdf',$content);
        return redirect()->back();
    }
    // 
    public function send(Participant $participant){
        
        Mail::to($participant->email)->send(new SendMail($participant));

        return redirect()->route('participants.index')->with('success', 'Certificate sent successfully.');
    }
    public function viewpdf(){
        return view('certificates.pdf-view');
    }

    public function sendAllCertificates($scale){
        if($scale === '1 - 2'){
            $participants = Participant::all()->take(2);
        }   

        foreach($participants as $participant) {
            Mail::to($participant->email)->send(new SendMail($participant));
        }
        return redirect()->route('participants.index')->with('success', 'Certificate sent successfully.');
    }
}
