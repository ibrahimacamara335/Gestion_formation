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
    <div class="container container-div">
        <div class="row">
            <div class="col-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        <h2 class="text-center">Ajouter un Apprenant</h2>
                    </div>
                    <div class="contact-form">
                        <form action="{{route('enregistrer-apprenant')}}" method="POST">
                            @csrf
                                <label for="matricule" class="form-label">Matricule</label>
                                <input type="text" class="form-control" id="matricule" name="matricule"
                                    placeholder="Entrer votre matricule">

                                <label for="nom" class="form-label">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom"
                                    placeholder="Entrer votre nom">

                                <label for="prenom" class="form-label">Prenom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom"
                                    placeholder="Entrer votre prenom">

                                <label for="niveau" class="form-label">Niveau</label>
                                <select class="form-select" name="niveau">
                                    <option value="niveau" selected class="form-group">Sélectionner le niveau</option>
                                    <option value="Débutant">Débutant</option>
                                    <option value="Avancer">Avancé</option>
                                    <option class="form-group"></option>
                                </select>
                            
                                <label for="formation">Formation</label>
                                <select class="form-select" name="formations_id[]" multiple="">
                                    <option selected class="form-group">électionner les formations</option>
                                    @foreach ($formations as $formation)
                                    <option class="form-group" value="{{$formation->id}}">{{$formation->nom}}</option>
                                    @endforeach
                                </select>
                            
                                <button type="submit">Enregistrer</button>
                                <button class="retour"><a href="{{route('liste-apprenant')}}"
                                        class="btn-retour">Retour</a></button>
                           
                        </form>

                    </div>
                </div>

            </div>

        </div>

    </div>
</body>

</html>

@include("layouts.menu.footer")