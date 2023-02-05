<x-app title="PARTICIPANT">
      <div class="container-fluid p-0">
            
            <section id="awal">
                  <div class="container">
                        <div class="row">
                              @if(session()->has('success'))
                                    <div class="alert alert-success">
                                          {{ session()->get('success') }}
                                    </div>
                              @endif
                              <a href="" target=""><i class="bi bi-arrow-left btn btn-primary px-2 py-1 text-light position-absolute start-0" style="font-size:13px;"></i></a>
                              <div class="border border-1 border-dark rounded-3 p-0">
                                    <div class="border-dark row col-12 m-auto">
                                          <div class="col-12 col-lg-6 border-bottom-lg border-dark d-flex justify-content-center p-3">
                                                <p class="fs-4 m-0"><strong>E-CERTIFICATE</strong></p>
                                          </div>
                                          <div class="d-flex col-12 col-lg-6 justify-content-center p-3">
                                                <form action="{{route('participants.import')}}" method="post" enctype="multipart/form-data">
                                                      @csrf
                                                      <div class="d-flex gap-3">
                                                            <input type="file" name="excel" id="excel" class="form-control">
                                                            <button type="submit" class="btn btn-primary px-3 py-1" value="Import">Update</button>
                                                      </div>
                                                </form>
                                          </div>  
                                    </div>
                                    <div class="border-bottom border-top border-dark d-flex justify-content-center p-3">
                                          <form action="" method="get">
                                                <div class="d-flex gap-5 align-items-center">
                                                      <div class="" style="opacity: 0.5">
                                                            <th scope="col"><strong>Created at:</strong> 2023-11-02 11:22:22 AM</th>
                                                      </div>

                                                      <a class="btn btn-danger px-3 py-1" href="{{ route('participants.delete-all') }}">Delete</a>
                                                      <a class="btn btn-primary px-3 py-1" href="{{ route('participants.update-all',['value' => 'All']) }}">All</a>
                                                      <a class="btn btn-primary px-3 py-1" href="{{ route('participants.update-all',['value' => 'User']) }}">User</a>
                                                      <a class="btn btn-primary px-3 py-1" href="{{ route('participants.update-all',['value' => 'Guest']) }}">Guest</a>
                                                      {{-- <a class="btn btn-primary px-3 py-1" href="{{ route('participants.update',$participants) }}">User</a>
                                                      <a class="btn btn-primary px-3 py-1" href="{{ route('participants.update',$participants) }}">Guest</a> --}}
                                                      <div class="" style="opacity: 0.5">
                                                            <th scope="col"><strong>Updated at:</strong> 2023-11-02 11:22:22 AM</th>
                                                      </div>
                                                </div>
                                          </form>
                                    </div>
                                    <div class="border-bottom border-dark d-flex justify-content-center p-3 gap-3">
                                          <p class="fs-5 m-0">DATA - 1</p>
                                          <a href="{{route('participants.export')}}" target="_blank"><i class="bi bi-download btn btn-primary px-2 py-1 text-light" style="font-size:13px;"></i></a>
                                          <a href="{{route('ceritificates.viewpdf')}}" target="_blank"><i class="bi bi-eye btn btn-primary px-2 py-1 text-light" style="font-size:13px;"></i></a>
                                    </div>
                                    <div class="p-3">
                                          <div class="table-responsive" style="max-height: 50vh">
                                                <table class="table" style="font-size:13px;">
                                                      <thead>
                                                            <tr class="sticky-top top-0 bg-light">
                                                                  <th scope="col">No</th>
                                                                  <th scope="col">Nama</th>
                                                                  <th scope="col">Email</th>
                                                                  <th scope="col">Download / View</th>
                                                                  <th scope="col">Sent</th>
                                                            </tr>
                                                      </thead>
                                                      <tbody class="table-group-divider">
                                                            @foreach ($participants as $index => $participant)
                                                                <tr class="align-middle">
                                                                        <td scope="row">{{$index + 1}}</td>
                                                                        <td scope="row">
                                                                              {{$participant->name}}
                                                                        </td>
                                                                        <td>{{$participant->email}}</td>
                                                                        <td>
                                                                              <a href="{{ route('ceritificates.download', $participant->name) }}" target="_blank"><i class="bi bi-download btn btn-primary px-2 py-1 text-light" style="font-size:13px;"></i></a>
                                                                              <a href="{{ route('ceritificates.view') }}" target="_blank"><i class="bi bi-eye btn btn-primary px-2 py-1 text-light" style="font-size:13px;"></i></a>
                                                                        </td>
                                                                        <td>
                                                                             <a href="{{ route('ceritificates.send', $participant) }}"><i class="bi bi-send btn btn-danger px-2 py-1 text-light" style="font-size:13px;"></i></a>
                                                                        </td>
                                                                  </tr>
                                                            @endforeach
                                                      </tbody>
                                                </table>  
                                          </div>
                                          
                                    </div>
                              </div>
                        </div>
                  </div>
            </section>
            
      </div>
      
</x-app>