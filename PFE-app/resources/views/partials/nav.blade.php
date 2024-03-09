<nav class="navbar navbar-expand-lg bg-body-secondary bg-gradient">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="{{asset('./images/ofppt-logo.png')}}" alt="Avatar Logo" style="width:90px;hieght:70px">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#" style="font-size: 25px; font-family:Georgia, 'Times New Roman', Times, serif;margin-right:50px;margin-left:30px" >Acceuil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#"style="font-size: 25px; font-family:Georgia, 'Times New Roman', Times, serif;margin-right:50px">Dashbord</a>
          </li>
           <select name="Formateur" id="formateur" class="nav-item " style="font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;margin-right:50px">
            <optgroup>
                <option value="">Formateur</option>
                <option value="">Gahi said</option>
                <option value="">Allali mohamed</option>
                <option value="">Zaafan ahmed </option>
            </optgroup>
           </select>
           <select name="Filier" id="filier" class="nav-item" style="font-size: 20px; font-family:Georgia, 'Times New Roman', Times, serif;margin-right:50px">
            <optgroup>
                <option value="">Filier </option>
                <option value="">Gestion</option>
                <option value="">Dev</option>
                <option value="">Reseau </option>
            </optgroup>
           </select>
           <div class="container-fluid">
            <a class="navbar-brand position-absolute top-0 end-0" href="#">
              <img src="{{asset('images/directrice.png')}}" alt="Avatar Logo" style="width:60px;margin-top:10px" class="rounded-pill"> 
            </a>
          </div>
        </ul>
        
        
      </div>
    </div>
  </nav>