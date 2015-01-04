<?php

class SearchController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /search
	 *
	 * @return Response
	 */
	public function index()
	{
		 	return View::make('clients.search');
	}

	public function clientsSearch() {

		$q = Clients::find(2)->payments;
			var_dump($q);
	}

}