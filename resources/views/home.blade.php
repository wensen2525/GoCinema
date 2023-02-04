<x-app title="E-CERTIFICATE">
      <div class="container-fluid p-0">
            
            <section id="awal">
                  @if (session('fail'))
                        {!! session('fail') !!}
                  @endif
                  <div class="container">
                        <div class="row">
                              <div class="border border-1 border-dark rounded-3 p-0" sty>
                                    <div class="border-bottom border-dark d-flex justify-content-center p-3">
                                          <p class="fs-4 m-0"><strong>E-CERTIFICATE</strong></p>
                                    </div>
                                    <div class="border-bottom border-dark d-flex justify-content-center p-3">
                                          
                                          {{-- notifikasi form validasi --}}
                                          {{-- @if ($errors->has('file'))
                                          <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('file') }}</strong>
                                          </span>
                                          @endif
                              
                                          {{-- notifikasi sukses
                                          @if ($sukses = Session::get('sukses'))
                                          <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button> 
                                                <strong>{{ $sukses }}</strong>
                                          </div>
                                          @endif --}}
                                          <form action="" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="d-flex gap-3">
                                                      <input type="file" name="excel" id="excel" class="form-control">
                                                      <button type="submit" class="btn btn-primary px-3 py-1">Submit</button>
                                                </div>
                                          </form>
                                    </div>
                                    <div class="border-bottom border-dark d-flex justify-content-center p-3">
                                          <p class="fs-5 m-0">SUBMITTED DATA</p>
                                    </div>
                                    <div class="p-3">
                                          <table class="table" style="font-size:13px;">
                                                <thead>
                                                      <tr>
                                                            <th scope="col">No</th>
                                                            <th scope="col">File</th>
                                                            <th scope="col">Created at</th>
                                                            <th scope="col">Updated at</th>
                                                            <th scope="col" class="text-center">*</th>
                                                      </tr>
                                                </thead>
                                                <tbody class="table-group-divider">
                                                      <tr class="align-middle">
                                                            <td scope="row">1</td>
                                                            <td class="d-flex gap-2">
                                                                  <a href="{{ route('participants.index') }}" class="" target=""><i class="bi bi-eye btn btn-success px-2 py-1 text-light" style="font-size:13px;"></i></a>
                                                                  <a href="" target="_blank"><i class="bi bi-download btn btn-primary px-2 py-1 text-light" style="font-size:13px;"></i></a>
                                                            </td>
                                                            <td>2023-11-02 11:22:22 AM</td>
                                                            <td>2023-11-02 11:22:22 AM</td>
                                                            <td class="dropend text-center">
                                                                  <i class="bi bi-three-dots-vertical dropdown-toogle" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                                  <ul class="dropdown-menu p-0" style="font-size:13px;min-width:10vw">
                                                                        <li><a class="dropdown-item border-bottom" href="#">Update</a></li>
                                                                        <li><a class="dropdown-item border-bottom" href="#">Delete</a></li>
                                                                        <li><a class="dropdown-item" href="#">History</a></li>
                                                                  </ul>
                                                            </td>
                                                      </tr>
                                                      <tr class="align-middle">
                                                            <td scope="row">2</td>
                                                            <td class="d-flex gap-2">
                                                                  <a href="" target="_blank"><i class="bi bi-eye btn btn-success px-2 py-1 text-light" style="font-size:13px;"></i></a>
                                                                  <a href="" target="_blank"><i class="bi bi-download btn btn-primary px-2 py-1 text-light" style="font-size:13px;"></i></a>
                                                            </td>
                                                            <td>2023-11-02 11:22:22 AM</td>
                                                            <td>2023-11-02 11:22:22 AM</td>
                                                            <td class="dropend text-center">
                                                                  <i class="bi bi-three-dots-vertical dropdown-toogle" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                                                  <ul class="dropdown-menu p-0" style="font-size:13px;min-width:10vw">
                                                                        <li><a class="dropdown-item border-bottom" href="#">Update</a></li>
                                                                        <li><a class="dropdown-item border-bottom" href="#">Delete</a></li>
                                                                        <li><a class="dropdown-item" href="#">History</a></li>
                                                                  </ul>
                                                            </td>
                                                      </tr>
                                                </tbody>
                                          </table>
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
            
      </div>
      
</x-app>