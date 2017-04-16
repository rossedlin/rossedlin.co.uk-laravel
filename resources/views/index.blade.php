<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 24/02/2017
 * Time: 12:40
 *
 * @var array $fonts
 */
?>
@extends('layouts.agency')
@section('content')
    <section id="portfolio" class="bg-light-gray">
        @include('sections.agency.portfolio')
    </section>

    <section id="experience">
        @include('sections/agency/experience')
    </section>

    <section id="contact">
        @include('sections/agency/contact')
    </section>
@stop