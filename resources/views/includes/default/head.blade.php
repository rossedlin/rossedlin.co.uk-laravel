<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 20/12/2016
 * Time: 19:19
 */
?>

<meta charset="utf-8">
<meta name="author" content="Ross Edlin">

<title>Ross Edlin</title>

<!-- jQuery 3.1.1 -->
<script src="<?= secure_url("vendor/jquery/3.1.1/jquery-3.1.1.min.js") ?>"></script>

<!-- Bootstrap 3.3.7 -->
<link rel="stylesheet" href="<?= secure_url("vendor/bootstrap/3.3.7/bootstrap.min.css") ?>">
<script src="<?= secure_url("vendor/bootstrap/3.3.7/bootstrap.min.js") ?>"></script>

<!-- Font Awesome 4.7.0 -->
<link rel="stylesheet" href="<?= secure_url("vendor/font-awesome/4.7.0/css/font-awesome.min.css") ?>">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

<style>
    html, body
    {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;
        height: 100vh;
        margin: 0;
    }

    @font-face
    {
        font-family: "Scriptina";
        src: url("<?= secure_url("fonts/scriptina.ttf") ?>")
    }

    .title
    {
        font-family: 'Scriptina', sans-serif;

        font-size: 84px;
        margin-bottom: 20px;
    }

    .content
    {
        text-align: center;
    }

    a
    {
        color: #337ab7;
        text-decoration: none;
    }

    a:hover
    {
        color: #337ab7;
        text-decoration: none;
    }

    .links > a
    {
        color: #636b6f;
        padding: 0 25px;
        font-size: 12px;
        font-weight: 600;
        letter-spacing: .1rem;
        text-decoration: none;
        text-transform: uppercase;
    }
</style>
