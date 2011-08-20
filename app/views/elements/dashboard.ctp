<?php
    echo $html->link("Encuestas", "/polls/index");
    echo ' | ';
    echo "Estas logeado como " . $session->read('Auth.User.username');
    echo ' | ';
    echo $html->link("Salir de aplicación", "/users/logout");
?>

