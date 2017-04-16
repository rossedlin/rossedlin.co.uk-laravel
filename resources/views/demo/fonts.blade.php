<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 11/01/2017
 * Time: 14:11
 *
 * @var array $fonts
 */
?>
@extends('layouts.agency')
@section('content')
    <div id="loading" class="container text-center">
        <div class="content">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="content-heading">Font Demonstration</h2>
                    <h3 class="content-subheading text-muted">
                        Here are some sample fonts we use on our products
                    </h3>
                </div>
            </div>

            <div class="row" style="padding-top: 20px;">
                <div class="col-md-12">
                    <?php foreach ($fonts as $font => $name)
                    { ?>
                    <div>
                        <h4><?= $name ?></h4>
                        <p style="font-size: 22px; font-family: '<?= $font ?>', 'Times New Roman'">Sample text to show you what this font looks like.</p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
@stop