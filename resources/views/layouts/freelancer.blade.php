<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 21/12/2016
 * Time: 10:34
 */
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.freelancer.head')
</head>

<body>

<nav>
    @include('includes.freelancer.nav')
</nav>

<main>
    @yield('content')
</main>

<footer>
    @include('includes.freelancer.footer')
</footer>

</body>
</html>