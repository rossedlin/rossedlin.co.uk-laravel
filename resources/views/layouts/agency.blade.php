<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 07/01/2017
 * Time: 16:24
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.agency.head')
    @include('includes.analytics')
</head>

<body>

<nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top">
    @include('includes.agency.nav')
</nav>

<main style="margin-top: 60px;">
    @yield('content')
</main>

<footer>
    @include('includes.agency.footer')
</footer>

</body>
</html>