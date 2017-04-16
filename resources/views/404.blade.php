<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 24/02/2017
 * Time: 13:28
 *
 * @var array $fonts
 */
?>
@extends('layouts.coming-soon')
@section('content')
    <div style="text-align: center;">
        <img src="<?= secure_url("images/404.png") ?>" width="400"/>
        <div class="title">Oh dear, not quite what you wanted...</div>
        <div class="title"><a href="<?= secure_url('/') ?>">Click here to go back</a></div>
    </div>
@stop