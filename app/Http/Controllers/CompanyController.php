<?php namespace App\Http\Controllers;

use App\Company;
use Request;

class CompanyController extends Controller {


	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
	  	$aCompanies = Company::all();
		return view('company/list')->with('aCompanies', $aCompanies);
	}

  	public function add()
	{
	  return view('company/add');
	}

  	public function view($id) {
	  $oCompany = Company::findOrFail($id);
	  return view('company/view')->with('oCompany', $oCompany);
	}

  	public function store()
	{
		$aInput = Request::all();
	  	Company::create($aInput);
	  	return redirect('company');
	}

}
