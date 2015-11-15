<?php


class ReportsController extends BaseController {


	public function index()
	{
		$reports = Report::all();
		return View::make('reports.index', compact('reports'));
	}


	public function  fr(){
		return 'goo';
	}

	public function aj(){
		$data = Input::all();
		return $data['es'].$data['sun1'];
	}

	public function add(){
		
		$date = date('D - M - Y');
		$name = 'Expense Report - ('.$date .')';
		
		$report = new Report;

		$report->user_id = Auth::user()->id;
		$report->name = $name;

		if($report->save()){
		    $report_id = $report->id;		
			$locations = Location::all();
			return View::make('reports.dates')->with('locations',$locations)->with('report_id',$report_id);
		}
	}

	public function store()
	{



		$data = Input::all();
        


        $date = array();
        $locations = array();
        $day = array('Suday','Monday','Tusday','Wednesday','Thursday','Frriday','Satarday');
        $data = Input::all();
		
		$times = new Time;
		
		for($i=0;$i<7;$i++){
		$times = new Time;
			$times->report_id = $data['report_id'];
			$times->days = $day[$i];
		    $times->dates = $data['date'.$i];
		    $times->location_id = $data['location'.$i];
		    $times->breakfast = $data['breakfast'.$i];
		    $times->lunch = $data['1unch'.$i];
		    $times->dinner = $data['dinner'.$i];
			$times->save();
		}


		/*
		$time[0] = Input::get('time1');
		$time[1] = Input::get('time2');
		$time[2] = Input::get('time3');
		$time[3] = Input::get('time4');
		$time[4] = Input::get('time5');
		$time[5] = Input::get('time6');
		$time[6] = Input::get('time7');
       
		$locations[0] = Input::get('location1');
		$locations[1] = Input::get('location2');
		$locations[2] = Input::get('location3');
		$locations[3] = Input::get('location4');
		$locations[4] = Input::get('location5');
		$locations[5] = Input::get('location6');
		$locations[6] = Input::get('location7');
        
		$date = date('D - M - Y');
		$name = 'Expense Report - ('.$date .')';
		
		$report = new Report;
		$report->user_id = Auth::user()->id;
		$report->name = $name;
		if($report->save()){
		$id = $report->id;
		$times = new Time;
		
		for($i=0;$i<7;$i++){
		$times = new Time;
			$times->report_id = $id;
			$times->days = $day[$i];
			$times->dates = $time[$i];
			$times->breakfast = 0;
			$times->lunch = 0;
			$times->dinner = 0;
			$times->day_total = 0;
			$times->location_id = $locations[$i];
			$times->save();
		}
}*/
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
		->with('report_id',$id->id)
		->with('times',$times)
		->with('loc1',$loc1)
		->with('loc2',$loc2)
		->with('loc3',$loc3)
		->with('loc4',$loc4)
		->with('loc5',$loc5)
		->with('loc6',$loc6)
		->with('loc7',$loc7);
	}



	public function update($id)
	{
		$data = Input::all();
		$array = array();
		$i = 0;
	
		$times = Time::where('report_id','=', $id)->get();
	
		foreach($times as $time){
			$array[$i] = $time->id;

			$i++;

		}

		$sun = Time::find($array[0]);
		$mon = Time::find($array[1]);
		$tus = Time::find($array[2]);
		$wen = Time::find($array[3]);
		$the = Time::find($array[4]);
		$fri = Time::find($array[5]);
		$sat = Time::find($array[6]);


		// sun ros
		$sun->breakfast = $data['sun1'];
		$sun->lunch = $data['sun2'];
		$sun->dinner = $data['sun3'];
		$sun->day_total = $data['total_sun'];
		$sun->billable = $data['b1'];
		$sun->clients = $data['cs'];
		$sun->explanation = $data['es'];
		$sun->save();

		//mon row
		$mon->breakfast = $data['mon1'];
		$mon->lunch = $data['mon2'];
		$mon->dinner = $data['mon3'];
		$mon->day_total = $data['total_mon'];
		$mon->billable = $data['b2'];
		$mon->clients = $data['cm'];
		$mon->explanation = $data['em'];
		$mon->save();

		//mon tus
		$tus->breakfast = $data['tus1'];
		$tus->lunch = $data['tus2'];
		$tus->dinner = $data['tus3'];
		$tus->day_total = $data['total_tus'];
		$tus->billable = $data['b3'];
		$tus->clients = $data['ct'];
		$tus->explanation = $data['et'];
		$tus->save();

		//wen row
		$wen->breakfast = $data['wen1'];
		$wen->lunch = $data['wen2'];
		$wen->dinner = $data['wen3'];
		$wen->day_total = $data['total_wen'];
		$wen->billable = $data['b4'];
		$wen->clients = $data['cw'];
		$wen->explanation = $data['ew'];
		$wen->save();
	
		//the row
		$the->breakfast = $data['the1'];
		$the->lunch = $data['the2'];
		$the->dinner = $data['the3'];
		$the->day_total = $data['total_the'];
		$the->billable = $data['b5'];
		$the->clients = $data['ctu'];
		$the->explanation = $data['etu'];
		$the->save();

		//fri row
		$fri->breakfast = $data['fri1'];
		$fri->lunch = $data['fri2'];
		$fri->dinner = $data['fri3'];
		$fri->day_total = $data['total_fri'];
		$fri->billable = $data['b6'];
		$fri->clients = $data['cf'];
		$fri->explanation = $data['ef'];
		$fri->save();

		//sat row
		$sat->breakfast = $data['sat1'];
		$sat->lunch = $data['sat2'];
		$sat->dinner = $data['sat3'];
		$sat->day_total = $data['total_sat'];
		$sat->billable = $data['b7'];
		$sat->clients = $data['cst'];
		$sat->explanation = $data['est'];
		$sat->save();
		return Redirect::route('reports.index');


	}

public function show($id){
$i=0;
	$times = Time::where('report_id','=',$id)->get();
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

		return View::make('reports.show')
		->with('times',$times)
		->with('loc1',$loc1)
		->with('loc2',$loc2)
		->with('loc3',$loc3)
		->with('loc4',$loc4)
		->with('loc5',$loc5)
		->with('loc6',$loc6)
		->with('loc7',$loc7);
	}

public function edit($id){
$i=0;
	$times = Time::where('report_id','=',$id)->get();
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

		return View::make('reports.edit')
		->with('times',$times)
		->with('loc1',$loc1)
		->with('loc2',$loc2)
		->with('loc3',$loc3)
		->with('loc4',$loc4)
		->with('loc5',$loc5)
		->with('loc6',$loc6)
		->with('loc7',$loc7);
	}


	public function destroy($id)
	{
		\Report::destroy($id);
		return \Redirect::route('reports.index');
	}

}