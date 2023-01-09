<?php
require('./Poo/AnnouncementFormController.php');
$announcementForm = new announcementForm($_POST);
?>

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
    <title>POO Immo - announcement</title>
</head>
<!-- FORMULAIRE D'INSCRIPTION ADMIN -->
<main>
    <header>
        <img src="img/POO Immo.png" class="img-thumbnail" alt="logo">
    </header>

    <div class="title text-center mt-5">
        <h1>Annonce</h1>
        <hr class="pill">
    </div>
    <div class="container d-flex justify-content-center align-items-center mt-5 mb-5">
        <div class="row">
            <div class="col">
                <div class="registerBackColor">
                    <form methode="POST" action="">
                        <?php
                        echo $announcementForm->lastName('lastName');
                        echo $announcementForm->typeProperty('typeProperty');
                        echo $announcementForm->surface('surface');
                        echo $announcementForm->desription('description');
                        echo $announcementForm->price('price');
                        echo $announcementForm->adress('adress');
                        echo $announcementForm->postalCode('postalCode');
                        echo $announcementForm->dateSale('dateSale');
                        echo $announcementForm->propertyEmail('propertyEmail');
                        echo $announcementForm->propertyPhone('propertyPhone');
                        echo $announcementForm->picture('picture');
                        echo $announcementForm->button('send');
                        ?>















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