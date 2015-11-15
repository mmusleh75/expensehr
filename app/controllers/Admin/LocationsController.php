<?php

namespace Admin;

class LocationsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /permissions
	 *
	 * @return Response
	 */
	public function index()
	{
		$locations = \Location::all();
		return \View::make('locations.index', compact('locations'));
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /permissions
	 *
	 * @return Response
	 */
	public function store()
	{
		\Location::create(\Input::all());
		return \Redirect::route('admin.locations.index');
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /permissions/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$location = \Location::find($id);
		return \View::make('locations.edit', compact('location'));
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /permissions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$location = \Location::findOrFail($id);
		$location->update($data = \Input::all());
		return \Redirect::route('admin.locations.index');
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /permissions/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */

	public function destroy($id)
	{
		\Location::destroy($id);
		return \Redirect::route('admin.locations.index');
	}

}