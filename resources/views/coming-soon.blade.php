<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 24/02/2017
 * Time: 13:37
 */
?>
        <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    <link href="templates/coming-soon/tools/style.css" rel="stylesheet" type="text/css" media="screen"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script type="text/javascript" src="templates/coming-soon/tools/jquery.min.js"></script>
    <script type="text/javascript" src="templates/coming-soon/tools/jquery.backstretch.min.js"></script>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700|Roboto+Slab:700' rel='stylesheet'
          type='text/css'>

    <?php
    /**
     * Meta Information
     */ ?>
    <meta name="viewport" content="width=device-width, initial-scale = 1.0, user-scalable = no">
    <meta name="description" content="@lang('meta.description')">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <title>@lang('coming-soon.title')</title>
</head>
<body>
<div class="wrapper">
    <div class="left-section">
        <img src="templates/coming-soon/images/watch.png" alt=""/>
    </div>
    <div class="right-section">
        <h1 id="logo">@lang('coming-soon.logo')</h1>
        <div class="seprator"></div>
        <div class="main-content">
            <h2>@lang('coming-soon.heading')</h2>
            <p>@lang('coming-soon.content')</p>
        </div>
        <ul class="social">
            <li id="facebook"><a href="https://www.facebook.com/rossedlin" target="_blank"><i class="fa fa-facebook"></i></a></li>
            <li id="github"><a href="https://github.com/rossedlin" target="_blank"><i class="fa fa-github"></i></a></li>
            {{--<li id="linkedin"><a href="https://www.linkedin.com/in/ross-edlin-a82b3086"><i class="fa fa-linkedin"></i></a></li>--}}
        </ul>
        <ul class="info">
            {{--<li><i class="fa fa-phone-square"></i>@lang('coming-soon.phone')</li>--}}
            <li><i class="fa fa-envelope"></i><a href="mailto:@lang('coming-soon.email')">@lang('coming-soon.email')</a></li>
        </ul>

        <div class="social-links">
            <ul class="social2">
                <li id="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li id="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li id="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>


    </div>
    <div class="watch-section">
        <img src="templates/coming-soon/images/watch.png" alt=""/>
    </div>
</div>
</body>
</html>