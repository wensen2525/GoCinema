<nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        {{-- <div class="navbar-brand" href="#"> --}}
          <img src="{{ asset('storage/poster/Go Cinema.png') }}" alt="" class="img-fluid w-25">
        {{-- </div> --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Role
              </a>
              <ul class="dropdown-menu">
                <form action="" method="post">

                </form>
                <li><a class="dropdown-item">Admin</a></li>
                <li><a class="dropdown-item">User</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>