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
                        <h5 class="card-body">Détail de la formation</h5>
                        <p class="card-text">CODE: <span style="font-weight: bold;">{{$foramtion->code}}</span>
                        </p>
                        <p class="card-text">NOM: <span style="font-weight: bold;">{{$foramtion->nom}}</span></p>
                        <p class="card-text">DUREE: {{$foramtion->duree}}</p>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="card">
                    <h4 class="liste-formation">La liste des apprenants</h4>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>MATRICULE</th>
                                <th>NOM</th>
                                <th>PRENOM</th>
                                <th>NIVEAU</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($foramtion->apprenants as $apprenant)
                            <tr>
                                <td>{{$apprenant->id}}</td>
                                <td>{{$apprenant->matricule}}</td>
                                <td>{{$apprenant->nom}}</td>
                                <td>{{$apprenant->prenom}}</td>
                                <td>{{$apprenant->niveau}}</td>
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