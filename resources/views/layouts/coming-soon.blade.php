<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 24/02/2017
 * Time: 14:05
 */
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>@lang('coming-soon.title')</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link href="<?= secure_url("templates/coming-soon/tools/style.css") ?>" rel="stylesheet" type="text/css"
          media="screen"/>
    <script src="<?= secure_url("templates/coming-soon/tools/jquery.min.js") ?>" type="text/javascript"></script>
    <script src="<?= secure_url("templates/coming-soon/tools/jquery.backstretch.min.js") ?>"
            type="text/javascript"></script>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto+Slab:700' rel='stylesheet'
          type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
</head>
<body>
<div class="wrapper">
    @yield('content')
</div>
</body>
</html>