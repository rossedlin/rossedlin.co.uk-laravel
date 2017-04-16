<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 21/12/2016
 * Time: 11:11
 *
 * @var \App\Library\Portfolio[] $portfolios
 */
?>
<style>
    .portfolio-item
    {
        height: 200px;

        padding: 0;

        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    .portfolio-image-container
    {
        margin: 0 auto;
        display: inline-block;
    }
</style>
<div class="row">
    <div class="col-lg-12 text-center">
        <h2>Portfolio</h2>
        <hr class="star-primary">
    </div>
</div>
<div class="row text-center">
    <?php foreach ($portfolios as $key => $portfolio)
    { ?>
    <div class="col-xs-12 col-sm-4">
        <div class="portfolio-item">
            <div class="portfolio-image-container" style="background-color: <?= $portfolio->getBackgroundColor() ?>;">
                <img src="<?= $portfolio->getImage() ?>" class="img-responsive" alt="<?= $portfolio->getAlt() ?>">
            </div>
        </div>
    </div>
    <?php } ?>

    {{--<div class="col-sm-4 portfolio-item">--}}
    {{--<a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">--}}
    {{--<div class="caption">--}}
    {{--<div class="caption-content">--}}
    {{--<i class="fa fa-search-plus fa-3x"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<img src="templates/freelancer/img/portfolio/cabin.png" class="img-responsive" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4 portfolio-item">--}}
    {{--<a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">--}}
    {{--<div class="caption">--}}
    {{--<div class="caption-content">--}}
    {{--<i class="fa fa-search-plus fa-3x"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<img src="templates/freelancer/img/portfolio/cake.png" class="img-responsive" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4 portfolio-item">--}}
    {{--<a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">--}}
    {{--<div class="caption">--}}
    {{--<div class="caption-content">--}}
    {{--<i class="fa fa-search-plus fa-3x"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<img src="templates/freelancer/img/portfolio/circus.png" class="img-responsive" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4 portfolio-item">--}}
    {{--<a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">--}}
    {{--<div class="caption">--}}
    {{--<div class="caption-content">--}}
    {{--<i class="fa fa-search-plus fa-3x"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<img src="templates/freelancer/img/portfolio/game.png" class="img-responsive" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4 portfolio-item">--}}
    {{--<a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">--}}
    {{--<div class="caption">--}}
    {{--<div class="caption-content">--}}
    {{--<i class="fa fa-search-plus fa-3x"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<img src="templates/freelancer/img/portfolio/safe.png" class="img-responsive" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="col-sm-4 portfolio-item">--}}
    {{--<a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">--}}
    {{--<div class="caption">--}}
    {{--<div class="caption-content">--}}
    {{--<i class="fa fa-search-plus fa-3x"></i>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<img src="templates/freelancer/img/portfolio/submarine.png" class="img-responsive" alt="">--}}
    {{--</a>--}}
    {{--</div>--}}
</div>