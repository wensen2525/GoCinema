<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Cinema;
use App\Models\Provinsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{

    public function __construct()
    {
        // $this->middleware('admin')->only('update');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsis = Provinsi::all();

        return view('home',[
            'provinsis' => $provinsis
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
     * @param  \App\Http\Requests\StoreFilmRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFilmRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function show(Film $film, $provinsii, $provinsi_id)
    {
        // dd($request);
        $cinemas = Cinema::all();

        // mengambil array cinema sesuai provinsi yang dipilih
        $cinemasPerProvinsi = Cinema::where('provinsi_id','=',$provinsi_id)->get();

        // mengambil nama provinsi
        $provinsi = Provinsi::firstWhere('id','=',$provinsi_id);

        return view('movie.show',[
            'provinsi' => $provinsi,
            'cinemas' => $cinemas,
            'cinemasPerProvinsi' => $cinemasPerProvinsi
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $film)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFilmRequest  $request
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFilmRequest $request, $film, $provinsi)
    {
        // dd($request);
        $request->validate([
            'movie_nama' => 'required|string'
        ]);

        $film->movie->update([
            'movie_nama' => $request->movie_nama
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Film  $film
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film)
    {
        $film->delete();

        return redirect()->back();
    }

    public function tampil($provinsi_nama, $provinsi_id)
    {
        // dd($provinsi_nama);
        $cinemas = Cinema::all();

        // mengambil array cinema sesuai provinsi yang dipilih
        $cinemasPerProvinsi = Cinema::where('provinsi_id','=',$provinsi_id)->get();

        // mengambil nama provinsi
        $provinsi = Provinsi::firstWhere('id','=',$provinsi_id);

        return view('movie.show',[
            'provinsi' => $provinsi,
            'cinemas' => $cinemas,
            'cinemasPerProvinsi' => $cinemasPerProvinsi
        ]);
    }

    public function tambah(){
        return view('film.index');
    }
}
