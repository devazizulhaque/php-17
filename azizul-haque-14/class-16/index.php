<?php
    require_once './vendor/autoload.php';

    use app\classes\HelloWorld;
    $helloWorld = new HelloWorld();
    $helloWorld->getMessage();
?>

