<?php
/**
 * This file is where you may define all of the routes that are handled
 * by your application. Just tell Laravel the URIs it should respond
 * to using a Closure or controller method. Build something great!
 */

/**
 * Main Route
 */
Route::get('/', function ()
{
	return view('coming-soon');
});

if (App::environment() == 'local')
{
	/**
	 * Blog
	 */
	Route::get('/blog', function ()
	{
		return view('pages/blog');
	});

	/**
	 * Contact
	 */
	Route::get('/contact', function ()
	{
		return view('pages/contact');
	});

	/**
	 * Demo
	 */
	Route::get('/demo', function ()
	{
		return view('demo');
	});

	Route::group(['prefix' => 'demo'], function ()
	{
		/**
		 * Fonts
		 */
		Route::get('/fonts', 'Demo\Fonts');

		/**
		 * Buttons
		 */
		Route::get('/buttons', function ()
		{
			return view('demo/buttons');
		});

		/**
		 * Stripe
		 */
		Route::get('/stripe', 'Demo\Stripe');
//		Route::post('/stripe/ajax_authorise', 'Demo\Stripe@AjaxAuthorise');
	});

	/**
	 * Portfolio
	 */
	Route::group(['prefix' => 'portfolio'], function ()
	{
		Route::get('/noqu', function ()
		{
			return view('portfolio/noqu');
		});
	});

	/**
	 * Templates
	 */
	Route::group(['prefix' => 'templates'], function ()
	{
		/**
		 * Agency
		 */
		Route::get('/agency', function ()
		{
			return view('templates/agency');
		});

		/**
		 * Clean Blog
		 */
		Route::get('/clean-blog', function ()
		{
			return view('templates/clean-blog');
		});

	});
}