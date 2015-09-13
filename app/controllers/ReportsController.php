<?php


class ReportsController extends BaseController {


	public function index()
	{
		return View::make('reports.index');
	}

	public function add() {
		
		if(Request::ajax()){
		   $locations = DB::table('locations')->get();
		   return Response::json($locations);

		}
	}

	public function dates() {
		return View::make('reports/dates');

	}

	public function create(){
	$date = date('D - M - Y');
	$name = 'Expense Report - ('.$date .')';
		
		$report = new Report;
		$report->user_id = Auth::user()->id;
		$report->name = $name;
		$report->save();
		return Redirect::to('dates');
	}


	public function store()
	{

$id = Report::select('id')
                ->where('user_id',Auth::user()->id)->orderBy('id','desc')
                ->first();

        $time = array();
        $locations = array();
        $day = array('Su','Mo','Tu','We','Th','Fr','St');

		$time1 = Input::get('time1');
		$time2 = Input::get('time2');
		$time3 = Input::get('time3');
		$time4 = Input::get('time4');
		$time5 = Input::get('time5');
		$time6 = Input::get('time6');
		$time7 = Input::get('time7');
       
        $time[0] = $time1;
        $time[1] = $time2;
        $time[2] = $time3;
        $time[3] = $time4;
        $time[4] = $time5;
        $time[5] = $time6;
        $time[6] = $time7;

		$loc1 = Input::get('location1');
		$loc2 = Input::get('location2');
		$loc3 = Input::get('location3');
		$loc4 = Input::get('location4');
		$loc5 = Input::get('location5');
		$loc6 = Input::get('location6');
		$loc7 = Input::get('location7');
        
        $locations[0] = $loc1;
        $locations[1] = $loc2;
        $locations[2] = $loc3;
        $locations[3] = $loc4;
        $locations[4] = $loc5;
        $locations[5] = $loc6;
        $locations[6] = $loc7;


		$times = new Time;
		
		for($i=0;$i<7;$i++){
		$times = new Time;
			$times->report_id = $id->id;
			$times->days = $day[$i];
			$times->dates = $time[$i];
			$times->location_id = $locations[$i];
			$times->save();
		}

return Redirect::to('reports/form/');
	}

	public function report(){
	$loc = array();
	$i=0;
$id = Report::select('id')
                ->where('user_id',Auth::user()->id)->orderBy('id','desc')
                ->first();
        $report = Report::where('id', $id->id)->firstOrFail();
        $times = $report->times;
        	
foreach($times as $time){
	      $loc[$i] =$time->location_id;
	      $i++;
}

                                              
$loc1 = Location::find($loc[0]);
$loc2 = Location::find($loc[1]);
$loc3 = Location::find($loc[2]);
$loc4 = Location::find($loc[3]);
$loc5 = Location::find($loc[4]);
$loc6 = Location::find($loc[5]);
$loc7 = Location::find($loc[6]);

		return View::make('reports/report')
		->with('times',$times)
		->with('loc1',$loc1)
		->with('loc2',$loc2)
		->with('loc3',$loc3)
		->with('loc4',$loc4)
		->with('loc5',$loc5)
		->with('loc6',$loc6)
		->with('loc7',$loc7);
	}



}



