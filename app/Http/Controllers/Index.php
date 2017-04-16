<?php
namespace App\Http\Controllers;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 20/12/2016
 * Time: 20:24
 *
 * Class Portfolio
 * @package App\Http\Controllers
 */
class Index extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('pages/index');
	}
}