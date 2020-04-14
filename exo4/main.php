<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <!-- Style CSS -->
    <style>
        body {
            margin: 0;
        }

        section {
            column-width: 300px;
            column-gap: 5px;
            padding: 5px;
        }

        section img {
            width: 100%;
        }

        #carouselExampleControls {
            width: 400px;
        }
    </style>
</head>

<body>
    <!-- intégre le carousel -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <?php
            //boucle qui permet de générer les images dans le carousel
            $dirname = "img/";
            //glob va chercher toute les images en .jpg
            $images = glob($dirname . "*.jpg");
            $activeImage = " active";
            foreach ($images as $image) {
            ?>
                <div class="carousel-item<?= $activeImage ?>">
                    <img class="d-block w-100" src="<?= $image ?>" alt="<?= $image ?>">
                </div>
            <?php
                // le vide permet d'enlever la classe bootstrap "active" à la fin de la première boucle et pas les images suivantes
                $activeImage = "";
            }
            ?>

        </div>
        <!-- flèches avant arrière -->
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
© 2020 GitHub, Inc.