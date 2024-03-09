<!--<a href="{{ route('directeur.login') }}">Connexion Directeur</a>
<a href="{{ route('formateur.login') }}">Connexion Formateur</a>-->
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('style/welcome.css') }}">
</head>
<body>
    <div class="accueil-header">
        <img class="header-log img-fluid" id="logo-men" src="{{ asset('./images/header.png') }}" >
    </div>
    <div class="accueil-body">
        <div class="row">
            <div class="col-md-6">
                <div class="accueil-component materiel-color-blue" onclick="redirectToLogin()">
                    <div class="accueil-component-icon">
                        <img src="{{ asset('images/directrice.png') }}" class="img-fluid">
                    </div>
                    <div class="accueil-component-title">
                        <p >  La directrice</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="accueil-component materiel-color-green" onclick="redirectToAdminLogin()">
                    <div class="accueil-component-icon">
                        <img src="{{asset('/images/directeur.png')}}" class="img-fluid">
                    </div>
                    <div class="accueil-component-title">
                        <p >   Le formateur</p>
                    </div>
                </div>
            </div>
        </div>
        <footer>
        <div class="accueil-footer">
            <div class="row">
                <div class="col-md-6 text-md-start">
                    <b>Version 1.0</b>
                </div>
                <div class="col-md-6 text-md-end">
                    <strong>Copyright © 2024 </strong>
                </div>
            </div>
        </div><br><br>
        <div class="position-relative">
            <div class="position-absolute bottom-0 end-0"><strong style="font-size: 20px">: Produise par</strong><br>
               <pre> Zouine Mohamed <br>Boujenoui Zakaria <br> Fatimzahara Boustaoui</pre>
            </div>
            <div class="position-absolute bottom-0 start-0"><strong style="font-size: 20px;" >: Contacter nous</strong><br>
                Zouine Mohamed <a href="https://www.linkedin.com/in/mohamed-zouine-5716a2252"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                    <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                  </svg></a><br>
                    Boujenoui Zakaria <a href="https://www.linkedin.com/in/zakaria-boujenoui-a044a2279/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                      </svg></a><br>
                             Fatimzahara Boustaoui <a href="https://www.linkedin.com/in/mohamed-zouine-5716a2252"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                          <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854zm4.943 12.248V6.169H2.542v7.225zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248S2.4 3.226 2.4 3.934c0 .694.521 1.248 1.327 1.248zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016l.016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225z"/>
                        </svg></a>&nbsp;&nbsp;&nbsp;
            </div>
        </footer>
    </div>

    <script>
        function redirectToLogin() {
            window.location.href ="{{ route('directeur.login') }}";
        }

        function redirectToAdminLogin() {
            window.location.href ="{{ route('formateur.login') }}";
        }
    </script>
</body>
</html>