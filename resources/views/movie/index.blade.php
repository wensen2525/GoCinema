<x-app title="GoCinema">
      <div class="container-fluid p-0">
            
            <section id="awal">

                  <div class="container">
                        {{-- pilih cinema --}}
                        {{-- @dd($cinemasPerProvinsi); --}}
                        <h3 class="text-center">{{ ucfirst($provinsi) }}</h3>

                        <a href="{{ route('film.index') }}" class="btn btn-success d-block mb-2">Pilih Provinsi</a>
                        <a class="btn btn-primary d-block" data-bs-toggle="modal" data-bs-target="#tambah">Tambah Film</a>
                        <div class="tab-content">
                              @if($provinsi === 'jakarta')
                                    <div class="tab-pane fade show active" id="jakarta" role="tabpanel">
                                          <div class="d-flex justify-content-center align-items-center rounded-1 m-auto p-3 border border-1 border-dark my-2">
                                                <ul class="nav nav-pills" role="tablist" id="pills-tab">
                                                      <li class="nav-item" role="presentation">
                                                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#c_cipinang" type="button" role="tab" style="font-size: 14px;font-weight:600;" value="c_cipinang">
                                                                  Cinema Cipinang
                                                            </button>
                                                      </li>
                                                      <li class="nav-item">
                                                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#c_halim" type="button" role="tab" style="font-size: 14px;font-weight:600;" value="c_halim">
                                                                  Cinema Halim
                                                            </button>
                                                      </li>
                                                      <li class="nav-item">
                                                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#c_bella" type="button" role="tab" style="font-size: 14px;font-weight:600;" value="c_bella">
                                                                  Cinema Bella
                                                            </button>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                              
                              @elseif ($provinsi === 'surabaya')
                                    <div class="tab-pane fade show active" id="surabaya" role="tabpanel">
                                          <div class="d-flex justify-content-center align-items-center rounded-1 m-auto p-3 border border-1 border-dark my-2">
                                                <ul class="nav nav-pills" role="tablist" id="pills-tab">
                                                      <li class="nav-item" role="presentation">
                                                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#c_marina" type="button" role="tab" style="font-size: 14px;font-weight:600;" value="c_marina">
                                                                  Cinema Marina
                                                            </button>
                                                      </li>
                                                      <li class="nav-item">
                                                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#c_plaza" type="button" role="tab" style="font-size: 14px;font-weight:600;" value="c_plaza">
                                                                  Cinema Plaza
                                                            </button>
                                                      </li>
                                                      <li class="nav-item">
                                                            <button class="nav-link" data-bs-toggle="pill" data-bs-target="#c_ciputra" type="button" role="tab" style="font-size: 14px;font-weight:600;" value="c_ciputra">
                                                                  Cinema Ciputra
                                                            </button>
                                                      </li>
                                                </ul>
                                          </div>
                                    </div>
                              
                              @elseif ($provinsi === 'bali')
                                    <div class="tab-pane fade show active" id="bali" role="tabpanel">
                                          <div class="d-flex justify-content-center align-items-center rounded-1 m-auto p-3 border border-1 border-dark my-2">
                                                <ul class="nav nav-pills" role="tablist" id="pills-tab">
                                                      <li class="nav-item" role="presentation">
                                                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#c_beji" type="button" role="tab" style="font-size: 14px;font-weight:600;" value="c_beji">
                                                                  Cinema Beji
                                                            </a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#c_kawi" type="button" role="tab" style="font-size: 14px;font-weight:600;" value="c_kawi">
                                                                  Cinema Kawi
                                                            </a>
                                                      </li>
                                                      <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="pill" data-bs-target="#c_pura" type="button" role="tab" style="font-size: 14px;font-weight:600;" value="c_pura">
                                                                  Cinema Pura
                                                            </a>
                                                      </li>
                                                </ul>
                                          </div>

                                    </div>
                              
                              @endif
                        </div>

                        {{-- pilih film --}}
                        <div class="row">
                              <div class="tab-content">
                                    @foreach ($cinemas as $cinema)
                                          
                                          <div class="tab-pane fade" id="{{ $cinema->cinema_alias }}" role="tabpanel">
                                                <h4 class="text-center mb-3 mt-4">SHOWING NOW</h4>
                                                <div class="col-12 row mb-3 d-flex justify-content-center">
                                                      @if ($cinema->films->isEmpty())
                                                            <div class="col-3 text-center">
                                                                  <p>TIDAK ADA FILM UNTUK HARI INI</p>
                                                            </div> 
                                                      @else
                                                            @foreach($cinema->films as $film)
                                                                  <div class="col-3">
                                                                        <a href="">
                                                                              <img src="{{ asset('storage/movie/'. $film->movie->picture) }}" class="img-fluid rounded-3 rounded" alt="">
                                                                        </a>
                                                                        <p class="text-center my-2 fs-4 fw-semibold text-break">{{ $film->movie->movie_nama }}</p>
                                                                        <a class="btn btn-primary d-block mb-3" href="">Pesan</a>

                                                                        @if($role === 'admin')
                                                                              <form method="POST" action="{{ route('film.destroy',$film->id) }}">
                                                                                    @method('DELETE')
                                                                                    @csrf
                                                                                    <button type="submit" class="btn btn-danger d-block mb-3 col-12" title='Delete'>Delete</button>
                                                                              </form>
                                                                              <form method="POST" action="{{ route('film.update',$film) }}">
                                                                                    @method('PUT')
                                                                                    @csrf
                                                                                    
                                                                                    <input type="text" placeholder="nama_baru" id="movie_nama" name="movie_nama" class="col-12 mb-1 rounded-1 border-1 border-dark">
                                                                                    <button type="submit" class="btn btn-success d-block col-12" title='Update'>Update</button>
                                                                              </form>
                                                                        @endif
                                                                        
                                                                  </div>
                                                                  
                                                            @endforeach
                                                      @endif
                                                </div>

                                                <h4 class="text-center mb-3 p-0">UPCOMMING</h4>
                                                <div class="col-12 row mb-3 d-flex justify-content-center">
                                                      <div class="col-3">
                                                            <img src="{{asset('storage/movie/antman-3.jpg')}}" class="img-fluid rounded-3 rounded" alt="">
                                                            <p class="text-center my-2 fs-4 fw-semibold text-break">Ant-Man and the Wasp: Quantumania</p>
                                                      </div>
                                                </div>
                                          </div>

                                          
                                    @endforeach
                              </div>
                        </div>
                        {{-- modal --}}
                        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                    <form method="POST" action="{{ route('film.tambah') }}" enctype="multipart/form-data">
                                          @csrf
                                          <div class="mb-3">
                                                <label for="movie_nama" class="form-label">Movie Name</label>
                                                <input type="email" name="movie_nama" class="form-control" id="movie_nama" aria-describedby="emailHelp">                                          </div>
                                          <div class="mb-3">
                                                <label for="picture" class="form-label">Gambar</label>
                                                <input class="form-control" name="picture" type="file" id="picture">
                                          </div>
                                          <div class="input-group mb-3">
                                                <button class="btn btn-outline-secondary" type="button">Cinema</button>
                                                <select class="form-select" id="inputGroupSelect03" aria-label="Example select with button addon">
                                                      <option selected>Choose...</option>
                                                      @foreach($cinemasPerProvinsi as $cinemaPerProvinsi)
                                                            <option value="{{ $cinemaPerProvinsi->cinema_nama }}">{{ $cinemaPerProvinsi->cinema_nama }}</option>
                                                      @endforeach
                                                      
                                                </select>
                                          </div>
                                          <button type="submit" class="btn btn-primary">Save changes</button>
                                    </form>
                                  </div>
                                </div>
                              </div>
                        </div>
                  </div>

            </section>

      </div>
</x-app>