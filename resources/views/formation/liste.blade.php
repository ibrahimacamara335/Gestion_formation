@include("layouts.menu.header")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div class="container container-div">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Gestion des Formations</h2>
                    </div>
                    @if (session('status'))
                    <div class="alert alert-success alert-div">
                        {{session('status')}}
                    </div>
                    @endif
                    <div class="card-body">
                        <a href="{{route('add-formation')}}" class="btn btn-primary">
                            Ajouter une Formation
                        </a>
                        <br />
                        <br />
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>NOM</th>
                                    <th>CODE</th>
                                    <th>DUREE</th>
                                    <th class="text-center">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($formations as $formation)
                                <tr>
                                    <td>{{$formation->id}}</td>
                                    <td>{{$formation->nom}}</td>
                                    <td>{{$formation->code}}</td>
                                    <td>{{$formation->duree}}</td>
                                    <td class="text-center">
                                        <a href="{{route('detail-formation',$formation->id)}}"
                                            class="btn btn-info">Détail</a>
                                        {{-- <a href="" class="btn btn-danger">Supprimer</a> --}}
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
</body>

</html>

@include("layouts.menu.footer")