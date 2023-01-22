<x-app title="GoCinema">
      <div class="container-fluid p-0">
            
            <section id="awal">

                  <div class="container">
                        {{-- pilih cinema --}}
                        <h3 class="text-center">{{ ucfirst($provinsi) }}</h3>

                        <a href="{{ route('film.index') }}" class="btn btn-primary d-block">Pilih Provinsi</a>
                        
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
                                                      @foreach($cinema->films as $film)
                                                            <div class="col-3">
                                                                  <img src="{{ asset('storage/movie/'. $film->movie->picture) }}" class="img-fluid rounded-3 rounded" alt="">
                                                                  <p class="text-center my-2 fs-4 fw-semibold text-break">{{ $film->movie->movie_nama }}</p>
                                                                  <a href="" class="btn btn-primary d-block mb-5">Pesan</a>
                                                            </div>
                                                      @endforeach
                                                </div>

                                                <h4 class="text-center mb-3 p-0">UPCOMMING</h4>
                                                <div class="col-12 row mb-3 d-flex justify-content-center">
                                                      <div class="col-3">
                                                            <img src="{{asset('storage/movie/antman-3.jpg')}}" class="img-fluid rounded-3 rounded" alt="">
                                                            <p class="text-center my-2 fs-4 fw-semibold text-break">Ant-Man and the Wasp: Quantumania</p>
                                                      </div>
                                                </div>
                                          </div>

                                          {{-- modal --}}
                                          <div class="modal fade" id="pesan" tabindex="-1" aria-labelledby="pesanLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                      <div class="modal-content">
                                                            <div class="modal-header">
                                                                  <h1 class="modal-title fs-5" id="pesanLabel">Pesan</h1>
                                                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                                  <form>
                                                                  <div class="mb-3">
                                                                  <label for="recipient-name" class="col-form-label">Recipient:</label>
                                                                  <input type="text" class="form-control" id="recipient-name">
                                                                  </div>
                                                                  <div class="mb-3">
                                                                  <label for="message-text" class="col-form-label">Message:</label>
                                                                  <textarea class="form-control" id="message-text"></textarea>
                                                                  </div>
                                                                  </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                  <button type="button" class="btn btn-primary">Send message</button>
                                                            </div>
                                                      </div>
                                                </div>
                                          </div>
                                    @endforeach
                              </div>
                        </div>

                  </div>

            </section>

      </div>
</x-app>