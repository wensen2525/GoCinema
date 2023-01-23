<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\Movie;
use App\Models\Cinema;
use App\Models\Provinsi;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreFilmRequest;
use App\Http\Requests\UpdateFilmRequest;

class FilmController extends Controller
{

    public $role = 'admin';
    
    public function gantiRole($role)
    {
        // dd($role);
        $this->role = $role;

        return redirect()->back();
    }

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
        $movies = Movie::all();
        $cinemas = Cinema::all();
        // dd($cinemas);
        if($this->role === 'admin')
        {
            $role = 'admin';
        }
        elseif ($this->role === 'user') 
        {
            $role = 'user';
        }
        $provins = Provinsi::all()->where('provinsi_nama',$provinsi);
        // dd($provin);
        foreach($provins as $provin){
            $prov = $provin->id;
        }
        // $prov = $provin->id;
        $cinemasPerProvinsi = Cinema::all()->where('provinsi_id', $prov);

        return view('movie.index',[
            'provinsi' => $provinsi,
            'cinemas' => $cinemas,
            'role' => $this->role,
            'movies' => $movies,
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
    public function update(UpdateFilmRequest $request, Film $film)
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

    public function tampil($cinema)
    {
        dd($cinema);
        return view('transactions.index');
    }

    public function tambah(){
        return view('film.index');
    }
}
