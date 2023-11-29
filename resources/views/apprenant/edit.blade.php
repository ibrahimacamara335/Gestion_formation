<!DOCTYPE html>
<html>

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Formulaire d'ajout de formation</title>
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
    <main class="container">
        <h3 class="text-center mt-2">Formulaire d'ajout d'une formation</h3>
        {{-- <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nom" class="form-label">Nom de la region</label>
                <input type="text" class="form-control" name="nom" id="nom" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="superficie" class="form-label">Superficie de la region</label>
                <input type="text" class="form-control" name="supperfice" id="superficie" aria-describedby="emailHelp">
            </div>
            <button type="submit" class="btn btn-primary">Enregister</button>
        </form> --}}
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>