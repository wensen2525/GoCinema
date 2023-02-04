<?php

namespace App\Http\Controllers;

use App\Models\Participant;
use Illuminate\Http\Request;
use App\Exports\ParticipantExport;
use App\Imports\ParticipantImport;
use Maatwebsite\Excel\Facades\Excel;

class ParticipantController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('admin');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('participants.index',[
            'participants' => Participant::all()
        ]);
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
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function show(Participant $participant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function edit(Participant $participant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Participant $participant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Participant  $participant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participant $participant)
    {
        //
    }

    public function import(Request $request)
	{   
        // dd($request);
        $this->validate($request, [
			'excel' => 'required|mimes:csv,xls,xlsx'
		]);

        Excel::import(new ParticipantImport, $request->file('excel'));

        if ($request->hasFile('excel')) {
            $proofNameToStore = $request->file('excel')->getClientOriginalName();
            $request->file('excel')->storeAs('public/submissions', $proofNameToStore);
        }

        return redirect()->back();
	}

    public function export() 
    {
        return Excel::download(new ParticipantExport, 'datas.xlsx');
    }

    public function deleteAll()
    {

        $participants = Participant::all();

        foreach ($participants as $participant) {
            $participant->delete();
        }

        return redirect()->back();
    }

    public function updateAll($value)
    {
        dd($value);
        
        $participants = Participant::all();

        if($value === 'All'){
            foreach ($participants as $participant) {

                $participant->update([
                    'role' => 'All',
                ]);

            }
        }else if( $value === 'User'){
            foreach ($participants as $participant) {

                $participant->update([
                    'role' => 'User',
                ]);

            }
        }else if( $value === 'Guest'){
            foreach ($participants as $participant) {

                $participant->update([
                    'role' => 'Guest',
                ]);

            }
        }

        return redirect()->back();
    }
}
