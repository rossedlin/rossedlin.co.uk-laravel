<?php
namespace App\Http\Controllers\Demo;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Library\Payment;

/**
 * Created by PhpStorm.
 * User: Ross Edlin
 * Date: 11/01/2017
 * Time: 14:54
 *
 * Class Fonts
 * @package App\Http\Controllers
 */
class Fonts extends Controller
{
	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function __invoke()
	{
		return view('demo/fonts', [
			'fonts' => $this->_getFonts(),
		]);
	}

	private function _getFonts()
	{
		return [
			'Times New Roman' => 'Times New Roman',
			'Calibri'         => 'Calibri',
		];
	}
}