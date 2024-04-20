@include('partials.header')
<style>
    body {
    background: rgb(60, 147, 210)
}

.form-control:focus {
    box-shadow: none;
    border-color: #BA68C8
}

.profile-button {
    background: rgb(102, 67, 231);
    box-shadow: none;
    border: none
}

.profile-button:hover {
    background: #682773
}

.profile-button:focus {
    background: #682773;
    box-shadow: none
}

.profile-button:active {
    background: #682773;
    box-shadow: none
}

.back:hover {
    color: #682773;
    cursor: pointer
}

.labels {
    font-size: 11px
}

.add-experience:hover {
    background: #BA68C8;
    color: #fff;
    cursor: pointer;
    border: solid 1px #BA68C8
}
#valid{
  font-size:12px;
  color:#daa;
  height:15px
}
#strong{
  height:20px;
  font-size:12px;
  color:#daa;
  text-transform:capitalize;
  background:rgba(205,205,205,0.1);
  border-radius:5px;
  overflow:hidden
}

#strong span{  
  display:block;
  box-shadow:0 0 0 #fff inset;
  height:100%;
  transition:all 0.8s
}
#strong .weak{
   box-shadow:5em 0 0 #daa inset;
}
#strong .medium{
   color:#da6;
   box-shadow:10em 0 0 #da6 inset
}
#strong .strong{
   color:#595;
   box-shadow:50em 0 0 #ada inset
}
</style>
<body  oncontextmenu="return false;">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                @foreach ($directeurs as $directeur)
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="{{asset('images/directrice.png')}}"><span class="font-weight-bold"><h2>{{$directeur->nom}} {{$directeur->prenom}}</h2></span><span class="text-black-50"></span></div>
                @endforeach
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    @foreach ($directeurs as $directeur)
    <form action="{{ route('update-profile', $directeur->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="directeur_id" value="{{ $directeur->id }}">
        <div class="row mt-2">
            <div class="col-md-6">
                <label class="labels"><h6>Nom</h6></label>
                <input type="text" class="form-control" name="nom" value="{{ $directeur->nom }}" placeholder="Nom">
            </div>
            <div class="col-md-6">
                <label class="labels"><h6>Prénom</h6></label>
                <input type="text" class="form-control" name="prenom" value="{{ $directeur->prenom }}" placeholder="Prénom">
            </div>
            <div class="col-md-6">
                <label class="labels"><h6>Email</h6></label>
                <input type="email" class="form-control" name="email" value="{{ $directeur->email }}" placeholder="Email">
            </div>
        </div>
        <div class="mt-5 text-center">
            <button class="btn btn-primary profile-button" type="submit">Enregistrer</button>
        </div> <br><br>
        @if (session('ruessite'))
                    
        <div class="alert alert-success">
                {{ session('ruessite') }}
        </div>
        
@endif
    </form>
@endforeach

                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><a href="{{route('directeur.home')}}"><span class="border px-3 p-1 add-experience btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Retour</span></a></div><br>

                    <form action="{{ route('directeur.update-password') }}" method="POST">
                        @csrf
                        @method('PUT')
                    
                        <div class="col-md-12">
                            <input type="hidden" name="directeur_id" value="{{ $directeur->id }}">
                            <label class="labels"><h6>Ancien mot de passe</h6></label>
                            <input type="password" class="form-control" name="old_password" placeholder="*********">
                            @error('old_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="col-md-12">
                            <label class="labels"><h6>Nouveau mot de passe</h6></label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="new_password" id="new_password" placeholder="**********">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="toggle_new_password"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                  </svg></button>
                            </div>
                        </div>  <br>
                        <div class="progress">
                            <div id="password_strength" class="progress-bar" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <div id="valid" class="text-danger"></div>
                            @error('new_password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="col-md-12">
                            <label class="labels"><h6>Confirmez le nouveau mot de passe</h6></label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="new_password_confirmation" id="new_password_confirmation" placeholder="**********">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="toggle_new_password_confirmation"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                  </svg></button>
                            </div>
                        </div>
                            @error('new_password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <br>
                        <div class="d-flex justify-content-between align-items-center experience">
                            <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i>&nbsp;Changer le mot de passe</button>
                        </div><br> <br>
                    
                        @if (session('error'))
                            <div class="alert alert-danger mt-3" role="alert">
                                {{ session('error') }}
                            </div>
                        @endif
                 @if (session('success'))
                    
                            <div class="alert alert-success">
                                    {{ session('success') }}
                            </div>
                            
                @endif
                                    
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <script>
        //Afficher et cacher le password
    function togglePasswordVisibility(inputId, toggleButtonId) {
        var passwordInput = document.getElementById(inputId);
        var toggleButton = document.getElementById(toggleButtonId);
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            toggleButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-slash-fill" viewBox="0 0 16 16">
                                     <path d="m10.79 12.912-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7 7 0 0 0 2.79-.588M5.21 3.088A7 7 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474z"/>
                                      <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829zm4.95.708-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829zm3.171 6-12-12 .708-.708 12 12z"/>
                                    </svg>`;
        } else {
            passwordInput.type = "password";
            toggleButton.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7"/>
                                  </svg>`;
        }
    }

    document.getElementById("toggle_new_password").addEventListener("click", function() {
        togglePasswordVisibility("new_password", "toggle_new_password");
    });

    document.getElementById("toggle_new_password_confirmation").addEventListener("click", function() {
        togglePasswordVisibility("new_password_confirmation", "toggle_new_password_confirmation");
    });

    //tester le passowrd
    function updatePasswordStrength(password, progressBarId) {
        var strength = 0;

        // Check password length
        if (password.length >= 8) {
            strength += 30;
        }

        // Check for uppercase letters
        if (password.match(/[A-Z]/)) {
            strength += 20;
        }

        // Check for lowercase letters
        if (password.match(/[a-z]/)) {
            strength += 20;
        }

        // Check for numbers
        if (password.match(/[0-9]/)) {
            strength += 20;
        }

        // Check for special characters
        if (password.match(/[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]/)) {
            strength += 10;
        }

        var progressBar = document.getElementById(progressBarId);

        // Change color based on strength
        if (strength < 50) {
            progressBar.style.backgroundColor = 'red';
        } else if (strength >= 50 && strength < 90) {
            progressBar.style.backgroundColor = 'orange';
        } else {
            progressBar.style.backgroundColor = 'green';
        }

        progressBar.style.width = strength + '%';
        progressBar.setAttribute('aria-valuenow', strength);
    }

    document.getElementById("new_password").addEventListener("keyup", function() {
        updatePasswordStrength(this.value, "password_strength");
    });

    document.getElementById("new_password_confirmation").addEventListener("keyup", function() {
        updatePasswordStrength(this.value, "password_strength_confirmation");
    });
    </script>
    


</body>