<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/01/2017
 * Time: 15:33
 */
?>
<div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
            <li class="hidden">
                <a href="#page-top"></a>
            </li>
            <li>
                <a class="page-scroll" href="#services">Services</a>
            </li>
            <li>
                <a class="page-scroll" href="#portfolio">Portfolio</a>
            </li>
            <li>
                <a class="page-scroll" href="#about">About</a>
            </li>
            <li>
                <a class="page-scroll" href="#team">Team</a>
            </li>
            <li>
                <a class="page-scroll" href="#contact">Contact</a>
            </li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
<!-- /.container-fluid -->

<?php return; ?>

<div id="nav" class="" style="background-color: #222">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="logo navbar-brand page-scroll" href="<?= secure_url("/#page-top") ?>">Ross Edlin</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li class="hidden">
                    <a href="<?= secure_url("/#page-top") ?>"></a>
                </li>
                {{--<li>--}}
                {{--<a class="page-scroll" href="#services">Services</a>--}}
                {{--</li>--}}
                <li>
                    <a class="page-scroll" href="<?= secure_url("/#portfolio") ?>">Portfolio</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?= secure_url("/#experience") ?>">Experience</a>
                </li>
                <li>
                    <a class="page-scroll" href="<?= secure_url("/demo") ?>">Demo</a>
                    <ul>
                        <li>
                            <a class="page-scroll" href="<?= secure_url("/demo/buttons") ?>">Buttons</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?= secure_url("/demo/fonts") ?>">Fonts</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="page-scroll" href="<?= secure_url("/templates") ?>">Templates</a>
                    <ul>
                        <li>
                            <a class="page-scroll" href="<?= secure_url("/templates/agency") ?>"
                               target="_blank">Agency</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="<?= secure_url("/templates/clean-blog") ?>"
                               target="_blank">Clean Blog</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="page-scroll" href="<?= secure_url("/#contact") ?>">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</div>