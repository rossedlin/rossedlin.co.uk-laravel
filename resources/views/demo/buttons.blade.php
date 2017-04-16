<?php
/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 04/01/2017
 * Time: 15:20
 */
?>
@extends('layouts.agency')
@section('content')
    <div id="loading" class="container text-center ">
        <div class="content">

            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="content-heading">Button Demonstration</h2>
                    <h3 class="content-subheading text-muted">
                        Here are some simple animated buttons you can use on your site
                    </h3>
                </div>
            </div>

            <div id="loading">
                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-default btn-lg"><i
                                    class="fa fa-circle-o-notch fa-spin"></i> @lang('demo.loading')</button>
                        <button class="btn btn-default btn-lg"><i
                                    class="fa fa-refresh fa-spin"></i> @lang('demo.loading')
                        </button>
                        <button class="btn btn-default btn-lg"><i
                                    class="fa fa-spinner fa-spin"></i> @lang('demo.loading')
                        </button>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-primary btn-lg"><i
                                    class="fa fa-circle-o-notch fa-spin"></i> @lang('demo.loading')</button>
                        <button class="btn btn-primary btn-lg"><i
                                    class="fa fa-refresh fa-spin"></i> @lang('demo.loading')
                        </button>
                        <button class="btn btn-primary btn-lg"><i
                                    class="fa fa-spinner fa-spin"></i> @lang('demo.loading')
                        </button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-danger btn-lg"><i
                                    class="fa fa-circle-o-notch fa-spin"></i> @lang('demo.loading')</button>
                        <button class="btn btn-danger btn-lg"><i
                                    class="fa fa-refresh fa-spin"></i> @lang('demo.loading')
                        </button>
                        <button class="btn btn-danger btn-lg"><i
                                    class="fa fa-spinner fa-spin"></i> @lang('demo.loading')
                        </button>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-info btn-md"><i
                                    class="fa fa-circle-o-notch fa-spin"></i> @lang('demo.loading')</button>
                        <button class="btn btn-info btn-md"><i class="fa fa-refresh fa-spin"></i> @lang('demo.loading')
                        </button>
                        <button class="btn btn-info btn-md"><i class="fa fa-spinner fa-spin"></i> @lang('demo.loading')
                        </button>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">
                        <button class="btn btn-warning btn-sm"><i
                                    class="fa fa-circle-o-notch fa-spin"></i> @lang('demo.loading')</button>
                        <button class="btn btn-warning btn-sm"><i
                                    class="fa fa-refresh fa-spin"></i> @lang('demo.loading')
                        </button>
                        <button class="btn btn-warning btn-sm"><i
                                    class="fa fa-spinner fa-spin"></i> @lang('demo.loading')
                        </button>
                    </div>

                    <div class="col-md-12">
                        <button class="btn btn-success btn-xs"><i
                                    class="fa fa-circle-o-notch fa-spin"></i> @lang('demo.loading')</button>
                        <button class="btn btn-success btn-xs"><i
                                    class="fa fa-refresh fa-spin"></i> @lang('demo.loading')
                        </button>
                        <button class="btn btn-success btn-xs"><i
                                    class="fa fa-spinner fa-spin"></i> @lang('demo.loading')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop