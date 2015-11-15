<?php


class LocationsController extends \BaseController {


 	public function get() 
 	{
        if(Request::ajax())
        {
            if(Input::has('id'))
            {
            	$id = Input::get('id');

            	$location = Location::find($id);

            	$loc = array();
            	$loc[0] = $location->id;
            	$loc[1] = $location->breakfast;
            	$loc[2] = $location->lunch;
            	$loc[3] = $location->dinner;
            	$loc[4] = $location->name;
                return Response::json($loc);
            }

        }   
	}

}