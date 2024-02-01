<?php

    session_start();
    session_unset();

    session_destroy();

    setcookie('Email', '', time() - 3600, '/');
    setcookie('Password', '', time() - 3600, '/');
    setcookie('Remember', '', time() - 3600, '/');

    header('location: login.php');
?>