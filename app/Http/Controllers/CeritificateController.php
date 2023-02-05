<?php

namespace App\Http\Controllers;

use App\Mail\SendMail;
use App\Models\Certificate;
use App\Models\Participant;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

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

    public function download($participant){

        $pdf = Pdf::loadView('certificates.pdf',[
            'participant' => $participant
        ])->setPaper('a4', 'landscape');
        return $pdf->download('result.pdf');

        // return view('certificates.pdf',[
        //     'participant' => $participant
        // ]);
    }
    public function view(){

    }
    // 
    public function send(Participant $participant){
        Mail::to($participant->email)->send(new SendMail($participant));

        return redirect()->route('participants.index')->with('success', 'Invoice sent successfully.');
    }
    public function viewpdf(){
        return view('certificates.pdf-view');
    }
}
