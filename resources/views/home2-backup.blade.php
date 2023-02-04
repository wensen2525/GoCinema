<x-app title="GoCinema">
      <div class="container-fluid p-0">
            
            <section id="awal">

                  <div class="container">
                        {{-- pilih provinsi --}}
                        <h3 class="text-center">Pilih Provinsi Kamu</h3>

                        <div class="d-flex flex-wrap justify-content-center align-items-center rounded-1 m-auto p-3 border border-1 border-dark my-2">
                              <ul class="nav nav-pills" role="tablist" id="pills-tab">
                                    @foreach ($provinsis as $provinsi)
                                          <li class="nav-item" role="presentation">
                                                
                                                <form action="{{ route('film.tampil', [$provinsi->provinsi_nama ,$provinsi->id]) }}" method="post">
                                                      @csrf
                                                      <input type="hidden" value="" name="data" id="data">
                                                      <button class="nav-link" type="submit">
                                                            {{ ucfirst($provinsi->provinsi_nama) }}
                                                      </button>
                                                </form>
                                                
                                          </li>
                                    @endforeach
                              </ul>
                        </div>

                  </div>
                  <div class="container">
                        <div class="row mx-auto border border-1 border-dark rounded-2">
                              <img src="{{ asset('storage/poster/relasi.jpg') }}" alt="" class="img-fluid">
                        </div>
                  </div>

            </section>
            
      </div>
</x-app>