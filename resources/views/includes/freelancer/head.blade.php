<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 21/12/2016
 * Time: 11:04
 */
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>Ross Edlin</title>

<!-- Bootstrap Core CSS -->
<link href="<?= secure_url('vendor/bootstrap/3.3.7/css/bootstrap.min.css') ?>" rel="stylesheet">

<!-- Theme CSS -->
<link href="<?= secure_url('templates/freelancer/css/freelancer.min.css') ?>" rel="stylesheet">

<!-- Custom Fonts -->
<link href="<?= secure_url('templates/freelancer/vendor/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet"
      type="text/css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<!--<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>-->
<!--<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>-->
<!--[endif]-->

<!-- jQuery -->
<script src="<?= secure_url('templates/freelancer/vendor/jquery/jquery.min.js') ?>"></script>
<script src="<?= secure_url('vendor/jquery/easing/1.3/jquery.easing.min.js') ?>"></script>
<script src="<?= secure_url('vendor/jquery/validate/1.15.0/jquery.validate.min.js') ?>"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?= secure_url('templates/freelancer/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>

<!-- Contact Form JavaScript -->
<script src="<?= secure_url('templates/freelancer/js/jqBootstrapValidation.js') ?>"></script>
<script src="<?= secure_url('templates/freelancer/js/contact_me.js') ?>"></script>

<!-- Theme JavaScript -->
<script src="<?= secure_url('templates/freelancer/js/freelancer.min.js') ?>"></script>

<style>
    html, body
    {
        background-color: #fff;
        color: #636b6f;
        font-family: 'Raleway', sans-serif;
        font-weight: 100;

        height: 100%;
        margin: 0;
    }

    main
    {
        margin-top: 64px;
    }

    /* Small Devices, Tablets */
    @media only screen and (min-width: 768px)
    {
        main
        {
            margin-top: 80px;
        }
    }

    footer
    {
        /*background-color: #0d5014;*/
    }

    @font-face
    {
        font-family: "Scriptina";
        src: url("fonts/Scriptina.ttf")
    }
</style>