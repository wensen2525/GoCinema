<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Cinema;
use App\Models\Provinsi;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $provinsis = Provinsi::all();
        // dd($provinsis);
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
    public function show(Film $film, $provinsi)
    {

        $cinemas = Cinema::all();
        // dd($cinemas);
        return view('movie.index',[
            'provinsi' => $provinsi,
            'cinemas' => $cinemas
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
    public function update(UpdateFilmRequest $request, Film $film)
    {
        $request->validate([
            'movie_nama' => 'required|string'
        ]);

        $film->movie->update([
            'movie_name' => $request->movie_name,
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
        // dd($film);
        // $deleted = DB::table('films')->where('votes', '>', 100)->delete();
        $film->delete();

        return redirect()->back();
    }

    public function pesan()
    {

    }

    public function tampil($cinema)
    {
        dd($cinema);
        return view('transactions.index');
    }
}
