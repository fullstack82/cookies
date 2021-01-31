<?php

// Borrar cookies y ponerles caducidad.
if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie', '', time() -100 );
}
