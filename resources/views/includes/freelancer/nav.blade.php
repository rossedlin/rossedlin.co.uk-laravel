<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 21/12/2016
 * Time: 11:09
 */
?>
<style>
    .logo
    {
        padding: 8px;
    }

    .navbar-custom
    {
        padding: 0 !important;
        margin: 0 !important;
    }

    @media (min-width: 576px)
    {
        .navbar-header
        {
            height: 80px !important;
        }
    }

    .navbar-header
    {
        height: 64px !important;
    }
</style>

<div class="navbar navbar-default navbar-fixed-top navbar-custom">
    <div class="container">
        <div class="navbar-header page-scroll">
            <button type="button"
                    class="navbar-toggle"
                    style="margin: 15px 10px;"
                    data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a href="<?= secure_url('/') ?>">
                <img class="logo visible-xs" src="<?= secure_url('images/logo/logo-white-120.png') ?>" height="60">
                <img class="logo hidden-xs" src="<?= secure_url('images/logo/logo-white-200.png') ?>" height="80">
            </a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right" style="margin: 15px 0;">
                <li class="page-scroll">
                    <a href="<?= secure_url('/') ?>">Portfolio</a>
                </li>
                <li class="page-scroll">
                    <a href="<?= secure_url('/demo/payment/stripe') ?>">Stripe</a>
                </li>
                <li class="page-scroll">
                    <a href="<?= secure_url('/contact') ?>">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</div>