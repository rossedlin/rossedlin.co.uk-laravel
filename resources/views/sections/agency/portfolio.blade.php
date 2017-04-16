<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 06/01/2017
 * Time: 15:14
 */
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading">Portfolio</h2>
            <h3 class="section-subheading text-muted">
                This is just some of the projects I got to work on<br />
                I'm a backend developer so most of my work was functionality based
            </h3>
        </div>
    </div>
    <div class="row">

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="<?= secure_url('/portfolio/noqu#fiveguys') ?>" class="portfolio-link">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="images/portfolio/fiveguys-289.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
                <h4><a href="https://fiveguys.co.uk/" target="_blank">FiveGuys</a></h4>
                <p class="text-muted">
                    Powered by NOQU
                </p>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="<?= secure_url('/portfolio/noqu') ?>" class="portfolio-link">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="images/portfolio/lineten-noqu-289.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
                <h4>NOQU</h4>
                <p class="text-muted">Online Ordering Platform</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="<?= secure_url('/portfolio/noqu#goodearth') ?>" class="portfolio-link">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="images/portfolio/goodearth-289.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
                <h4><a href="https://order.goodearthgroup.co.uk/" target="_blank">The GoodEarth</a></h4>
                <p class="text-muted">Powered by NOQU</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="<?= secure_url('/portfolio/bmtrada') ?>" class="portfolio-link">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="images/portfolio/bmtrada-289.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
                <h4><a href="https://www.exovabmtrada.com/" target="_blank">BM TRADA</a></h4>
                <p class="text-muted">Website Development</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="<?= secure_url('/portfolio/noqu#modpizza') ?>" class="portfolio-link">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="images/portfolio/modpizza-289.jpg" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
                <h4><a href="https://order.modpizza.co.uk/" target="_blank">Mod Pizza</a></h4>
                <p class="text-muted">Powered by NOQU</p>
            </div>
        </div>

        <div class="col-md-4 col-sm-6 portfolio-item">
            <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                        <i class="fa fa-plus fa-3x"></i>
                    </div>
                </div>
                <img src="templates/agency/img/portfolio/dreams.png" class="img-responsive" alt="">
            </a>
            <div class="portfolio-caption">
                <h4>Dreams</h4>
                <p class="text-muted">Website Design</p>
            </div>
        </div>
    </div>
</div>