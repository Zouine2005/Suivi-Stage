<nav class="navbar navbar-expand-lg bg-body-secondary bg-gradient">
  <div class="container-fluid">
      <a class="navbar-brand" href="#">
          <img src="{{asset('./images/ofppt-logo.png')}}" alt="Avatar Logo" style="width:90px;hieght:70px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="{{route('directeur.home')}}"
                      style="font-size: 25px; font-family:Georgia, 'Times New Roman', Times, serif;margin-right:50px;margin-left:30px">Acceuil</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link active" href="{{route('directeur.callender')}}"
                      style="font-size: 25px; font-family:Georgia, 'Times New Roman', Times, serif;margin-right:50px">Planifier</a>
              </li>
             
          </ul>
          <div class="container-fluid">
            <a class="navbar-brand position-absolute top-0 end-0" href="{{ route('directeur.profile') }}">
                <img src="{{asset('images/directrice.png')}}" alt="Avatar Logo" style="width:60px;margin-top:10px" class="rounded-pill">
            </a>
        </div>   
        <!-- Option de logout -->
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-link text-white">Logout</button>
        </form>
      </div>
  </div>
</nav>


