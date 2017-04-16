<?php
namespace App\Http\Controllers;

use \App\Library;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 21/12/2016
 * Time: 14:10
 *
 * Class Portfolio
 * @package App\Http\Controllers
 */
class Freelancer extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		$goodEarth = new Library\Portfolio();
		$goodEarth->setName("GoodEarth");
		$goodEarth->setImage("images/portfolio/goodearth-150.png");
		$goodEarth->setUrl("https://order.goodearthgroup.co.uk/");
		$goodEarth->setBackgroundColor('#ffffff');

		$fiveGuys = new Library\Portfolio();
		$fiveGuys->setName("FiveGuys");
		$fiveGuys->setImage("images/portfolio/fiveguys-150.png");
		$fiveGuys->setUrl("https://www.fiveguys.co.uk/");
		$fiveGuys->setBackgroundColor('#ffffff');

		$exovaBmtrada = new Library\Portfolio();
		$exovaBmtrada->setName("Exova BMTRADA");
		$exovaBmtrada->setImage("images/portfolio/exova-bmtrada-150.png");
		$exovaBmtrada->setUrl("https://www.exovabmtrada.com/");
		$exovaBmtrada->setBackgroundColor('#000000');

		$modpizza = new Library\Portfolio();
		$modpizza->setName("Mod Pizza");
		$modpizza->setImage("images/portfolio/modpizza-150.png");
		$modpizza->setUrl("https://order.modpizza.co.uk/");
		$modpizza->setBackgroundColor('#000000');
		
		$portfolios = [
			$goodEarth,
			$exovaBmtrada,
			$fiveGuys,
			$modpizza,
		];

		return view('pages/freelancer', [
			'portfolios' => $portfolios,
		]);
	}
}