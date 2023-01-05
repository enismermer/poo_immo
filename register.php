<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="css/form.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>POO Immo - register</title>
</head>
<!-- FORMULAIRE D'INSCRIPTION ADMIN -->
<main>
    <header>
        <img src="img/POO Immo.png" class="img-thumbnail" alt="logo">
        <!-------------- navigation ---------------->
        <nav class="navbar navbar-expand-sm bg-light justify-content-center">
            <div class="container-fluid">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Localisation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Type de bien</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Surface min</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Budget</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="text" placeholder="Rechercher" aria-label="Search">
                        <button class="btn btn-primary" type="submit">Rechercher</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <div class="title text-center mt-5">
        <h1>Inscription</h1>
        <hr class="pill">
    </div>
    <div class="container d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="registerBackColor">
                    <form methode="POST" action="">
                        <div class="row g-3 align-items-center mt-2">
                            <div class="col-auto">
                                <label for="lastName" class="col-form-label">Nom : </label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="lastName" class="form-control" name="lastName">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="firstName" class="col-form-label">Prénom : </label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="firstName" class="form-control" name="firstName">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="email" class="col-form-label">Email : </label>
                            </div>
                            <div class="col-auto">
                                <input type="email" id="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="password" class="col-form-label">Mot de passe : </label>
                            </div>
                            <div class="col-auto">
                                <input type="password" id="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="phone" class="col-form-label">Téléphone : </label>
                            </div>
                            <div class="col-auto">
                                <input type="tel" id="phone" class="form-control" name="phone">
                            </div>
                        </div>
                        <div class="row g-3 align-items-center mt-1">
                            <div class="col-auto">
                                <label for="age" class="col-form-label">Age : </label>
                            </div>
                            <div class="col-auto">
                                <input type="number" id="age" class="form-control" name="age">
                            </div>
                        </div>
                        <select name="sexe" class="form-select selectRegister mt-4" id="floatingSelect"
                            aria-label="Floating label select example">
                            <option selected>Sexe</option>
                            <option value="1">Homme</option>
                            <option value="2">Femme</option>
                            <option value="3">Non binaire</option>
                        </select>
                        <button type="button" class="btn btn-primary mt-5">S'inscrire</button>


                    </form>
                </div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="footer">
        <p>© Copyright 2022 - POO Immo</p>
    </div>
</footer>