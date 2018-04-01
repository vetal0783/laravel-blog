<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class HomeController extends Controller {

	public function __construct() {
		$this->middleware('auth');
	}

	public function index(Request $request) {
//		$access = $request->user()->authorizeRoles(['employee', 'manager']);
		$access = $request->user()->authorizeRoles(['employee']);

		if (!$access) {
			Session::flash('danger', 'Allowed only for Manageres');
			return redirect('/contact');
		}

		return view('home');
	}

	/*
	  public function someAdminStuff(Request $request)
	  {
	  $request->user()->authorizeRoles('manager');
	  return view('some.view');
	  }
	 */
}
