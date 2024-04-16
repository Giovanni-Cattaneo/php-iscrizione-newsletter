<?php

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

            & a {
                color: black;
                text-decoration: none;
            }
        }

        main {
            height: 750px;
            flex-direction: column;
            gap: 1rem;
        }

        .response {
            & p {
                border: 1px solid black;
                background-color: white;
            }

            .alert-danger {
                color: red;
            }

            .alert-success {
                color: green;
            }
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
        <div class="intestation">
            <h1>Welcome to Bolean News</h1>
        </div>

        <div class="search">
            <input type="text">
            <button type="button" class="btn btn-primary">Cerca</button>
        </div>

    </header>

    <main class="d-flex justify-content-center align-items-center">
        <h2>Grazie per esserti iscritto alla nostra Newsletter</h2>
        <p>Clicca <a href="http://localhost/php/php-iscrizione-newsletter/index.php">qui</a> per tornare indietro</p>
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