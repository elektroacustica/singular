<?php 

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Singular\Repositories\HomeRepo;

class HomeController extends Controller{

	protected $homeRepo;

	public function __construct(HomeRepo $homeRepo)
	{
		$this->homeRepo = $homeRepo;
	}

	public function index ()
	{
		$user = $this->homeRepo->take(6);
		return view('welcome', compact('user'));
	}

	public function compras()
	{
		return view('user.compras');
	}
	
}