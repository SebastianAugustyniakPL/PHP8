<?php

if ($_POST) {
    if ("" == trim($_POST['email']) || "" == trim($_POST['password'])) {
        echo 'Nie wypełniłeś hasła oraz maila';
        return 0;
    }

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (strlen($password) < 8) {
        echo 'Hasło musi zawierać przynajmniej 8 znaków';
        return 0;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo 'Podany adres e-mail jest niepoprawny! <br>';
        return 0;
    }

    $remember = isset($_POST['remember']) ? 'Zaznaczono pole zapamiętaj mnie' : 'Nie zaznaczono pola zapamiętaj mnie';

    echo 'Formularz przesłany:' . '<br>';
    echo 'Email: ' . $email . '<br>';
    echo 'Hasło: ' . $password . '<br>';
    echo $remember;
}