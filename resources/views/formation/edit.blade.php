<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/form.css')}}">

</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #041F4E;">
        <div class="container-fluid">
            <a class="navbar-brand text-white" href="index.html">
                <h3>ISI FORMATION</h3>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="navbar-brand text-white mx-2" id="liste-section" aria-current="page"
                        href="{{ route ('liste-formation') }}">Gestion des formations</a>
                    <a class="navbar-brand text-white mx-2" id="liste-section" aria-current="page"
                        href="{{ route ('liste-formation') }}">Gestion des apprenants</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container mt-3">
        <div class="row">
            <div class="col-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Détail de la formation</h5>
                        <p class="card-text">CODE: <span style="font-weight: bold;">{{$foramtion->nom}}</span>
                        </p>
                        {{-- <p class="card-text">NOM: <span style="font-weight: bold;">{{$apprenant->nom}}</span></p>
                        <p class="card-text">PRENOM: {{$apprenant->prenom}}</p>
                        <p class="card-text">NIVEAU: {{$apprenant->niveau}}</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <h5>La liste des formations de l'apprenant</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>CODE</th>
                                <th>NOM DE LA FORMATION</th>
                                <th>DUREE</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($foramtion->apprenants as $apprenant)
                            <tr>
                                <td>{{$apprenant->id}}</td>
                                {{-- <td>{{$formation->code}}</td>
                                <td>{{$formation->nom}}</td>
                                <td>{{$formation->duree}} mois</td> --}}
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>