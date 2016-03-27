<?php

class NurseController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /nurse
	 *
	 * @return Response
	 */
	public function visitSummary()
	{
		return View::make('visitSummary')->with('title', 'visit summary');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /nurse/create
	 *
	 * @return Response
	 */
	public function visitSummaryEntry()
	{
		return 'abc';		





	}

}