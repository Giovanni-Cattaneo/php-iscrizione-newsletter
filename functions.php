<?php
$mail = $_POST['mail'];

//var_dump($mail);

// if (str_contains($mail, '@') && str_contains($mail, '.')) {
//     echo ($success);
// } else {
//     echo ($error);
// }

function mailVerify($mail)
{
    $error = "<p style='color: red;' class='p-2 lead'>Iscrizione non riuscita inserisci una mail Valida</p>";

    $success = "<p style='color: green;' class=' p-2 lead'>Congratulazioni sei iscritto alla newsletter</p>";

    if (str_contains($mail, '@') && str_contains($mail, '.')) {
        echo ($success);
    } else {
        echo ($error);
    }
}
