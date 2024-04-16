<?php

$mail = $_GET['mail'];

//var_dump($mail);
$error = 'Iscrizione non riuscita inserisci una mail Valida';

$success = 'Congratulazioni sei iscritto alla newsletter';

if (str_contains($mail, '@') && str_contains($mail, '.')) {
    echo ($success);
} else {
    echo ($error);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
            background-color: antiquewhite;
        }

        header {
            background-color: turquoise;
        }

        footer {
            background-color: black;

            & ul {
                list-style: none;

                & a {
                    color: white;
                    text-decoration: none;
                }
            }
        }
    </style>

</head>

<body>
    <header class="d-flex align-items-center justify-content-between p-3">
        <h1>Welcome to Bolean News</h1>
        <div class="search">
            <input type="text">
            <button type="button" class="btn btn-primary">Cerca</button>
        </div>

    </header>

    <main>
        <div class="container pt-4 w-100">
            <div class="row d-flex gap-3 justify-content-center">
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="submit d-flex align-items-center mt-5 p-5 gap-3 flex-column">
            <h3>Iscriviti alla newsletter</h3>
            <p>rimani aggiornato su tutte le novità di Boolean</p>
            <form action="" method="get" class="d-flex align-items-center gap-2">
                <input type="text" name="mail" id="" placeholder="Inserisci la tua e-mail">
                <button type="button" class="btn btn-primary">Iscriviti</button>
            </form>

        </div>
    </main>

    <footer>
        <div class="container d-flex justify-content-evenly p-3">
            <ul style="list-style: none;">
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
            </ul>
            <ul style="list-style: none;">
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
            </ul>
            <ul>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
                <li><a href="">Ciao</a></li>
            </ul>
        </div>
    </footer>

</body>

</html>