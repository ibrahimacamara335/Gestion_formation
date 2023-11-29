@include("layouts.menu.header")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('assets/css/form.css')}}">
</head>
<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-body">Détail de l'apprenant</h5>
                        <p class="card-text">MATRICULE: <span
                                style="font-weight: bold;">{{$apprenant->matricule}}</span>
                        </p>
                        <p class="card-text">NOM: <span style="font-weight: bold;">{{$apprenant->nom}}</span></p>
                        <p class="card-text">PRENOM: {{$apprenant->prenom}}</p>
                        <p class="card-text">NIVEAU: {{$apprenant->niveau}}</p>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <h4 class="liste-apprenant">La liste des formations de l'apprenant</h4>
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
                            @foreach($apprenant->formations as $formation)
                            <tr>
                                <td>{{$formation->id}}</td>
                                <td>{{$formation->code}}</td>
                                <td>{{$formation->nom}}</td>
                                <td>{{$formation->duree}} mois</td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

@include("layouts.menu.footer")