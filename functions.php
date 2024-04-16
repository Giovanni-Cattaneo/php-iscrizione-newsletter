<?php
$mail = $_GET['mail'];

//var_dump($mail);

// if (str_contains($mail, '@') && str_contains($mail, '.')) {
//     echo ($success);
// } else {
//     echo ($error);
// }

function mailVerify($mail)
{
    $error = "<p class='alert-danger p-2 lead'>Iscrizione non riuscita inserisci una mail Valida</p>";

    $success = "<p class='alert-success p-2 lead'>Congratulazioni sei iscritto alla newsletter</p>";

    if (str_contains($mail, '@') && str_contains($mail, '.')) {
        //echo str_replace('class="p-2 lead', 'class="alert-success p-2 lead', $success);
        echo $success;
    } else {
        //echo str_replace('class="p-2 lead', 'class="alert-danger p-2 lead', $error);
        echo $error; // l'idea della generazione automatica delle classi non ha funziuonato con il replace
    }
}
