<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 20/12/2016
 * Time: 19:21
 */
?>
        <!doctype html>
<html>
<head>
    @include('includes.default.head')

    <style>

        header
        {
            margin-top: 20px;
        }

        #main
        {
            margin: 20px 0;
        }

        footer
        {
            margin-top: 20px;
        }
    </style>

    @yield('head.post')
</head>
<body>
<div class="container">
    <header>
        @include('includes.default.header')
    </header>

    <div id="main">
        @yield('content')
    </div>


    <footer>
        @include('includes.default.footer')
        @yield('footer.post')
    </footer>
</div>
</body>
</html>
