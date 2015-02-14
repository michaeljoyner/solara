<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function index()
	{
		return view('pages.homepage');
	}

	public function products()
	{
		return view('pages.products');
	}

	public function services()
	{
		return view('pages.services');
	}

	public function quote()
	{
		return view('pages.quote');
	}

	public function contact()
	{
		return view('pages.contact');
	}

}
