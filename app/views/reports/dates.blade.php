@extends('layouts.main')

@section('content')
<link href="css/weekpicker/weekpicker.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="js/jquery.weekpicker.js" ></script>

<style>
.glyphicon:before {
     visibility: visible;

}
.glyphicon-ok:checked:before {
     color:#25ba9a;  
}
input[type=checkbox].glyphicon{
     visibility: hidden;  
     font-size:15px;   
    color:#f77872;  
 
}

.size{
    width:65px;
}
.input-group-addon {
    border-right: 0px;
    background-color: #FFFFFF;
}
</style>
   

                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>
                                    Reports
                    
                                </h3>
                            </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <br><br>
                            </div>
                        </div>

                        </div>
                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12 animated fadeInDown">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Reports</h2>
                   
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="row">

                                            <div class="col-md-12 col-sm-12 col-xs-12">
                                                <div class="x_panel">
                                                  
                                                    <div class="x_content">

                                                        <!-- Smart Wizard -->
                                                        <div id="wizard" class="form_wizard wizard_horizontal">
                                                            <ul class="wizard_steps">
                                                                <li>
                                                                    <a href="#step-1">
                                                                        <span class="step_no">1</span>
                                                                        <span class="step_descr">
                                                                Step 1<br />
                                                                <small>Step 1 description</small>
                                                            </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#step-2">
                                                                        <span class="step_no">2</span>
                                                                        <span class="step_descr">
                                                                Step 2<br />
                                                                <small>Step 2 description</small>
                                                            </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#step-3">
                                                                        <span class="step_no">3</span>
                                                                        <span class="step_descr">
                                                                Step 3<br />
                                                                <small>Step 3 description</small>
                                                            </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#step-4">
                                                                        <span class="step_no">4</span>
                                                                        <span class="step_descr">
                                                                                Step 4<br />
                                                                            <small>Step 4 description</small>
                                                                        </span>
                                                                    </a>
                                                                </li>

                                                                <li>
                                                                    <a href="#step-5">
                                                                        <span class="step_no">5</span>
                                                                        <span class="step_descr">
                                                                                Step 5<br />
                                                                            <small>Step 5 description</small>
                                                                        </span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="#step-6">
                                                                        <span class="step_no">6</span>
                                                                        <span class="step_descr">
                                                                                Step 6<br />
                                                                            <small>Step 6 description</small>
                                                                        </span>
                                                                    </a>
                                                                </li>


                                                            </ul>
                                                            

                                                            {{ Form::open(['route' =>'reports.store', 'method' =>'POST', 'class' => 'form-horizontal']) }}
                                                                {{ Form::token() }}
                                                                <input type="hidden" name="report_id" value="{{ $report_id }}">
                                                                <div id="step-1">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-3 col-xs-6">

                                                                             <div class="week-picker" ></div>
                                                                             <input type="hidden" name="date0" id="sun">
                                                                             <input type="hidden" name="date1" id="mon">
                                                                             <input type="hidden" name="date2" id="tus">
                                                                             <input type="hidden" name="date3" id="the">
                                                                             <input type="hidden" name="date4" id="wen">
                                                                             <input type="hidden" name="date5" id="fri">
                                                                             <input type="hidden" name="date6" id="sat">
                                                                        </div>

                                                                         <div class="col-md-8 col-sm-8 col-xs-12">
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Sunday</label>
                                                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                                                    <select name="location0" id="mySelect1" onchange="myFunction(id,'sun')" class="form-control">
                                                                                        @foreach($locations as $location)
                                                                                            <option value="{{ $location->id }}">{{  $location->name }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Monday</label>
                                                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                                                    <select name="location1" id="mySelect2" onchange="myFunction(id,'mon')" class="form-control">
                                                                                        @foreach($locations as $location)
                                                                                            <option value="{{ $location->id }}">{{  $location->name }}</option>
                                                                                        @endforeach
                                                                                    </select>
                                                                                    </div>
                                                                                </div>                                                    
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Tuesday </label>
                                                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                                                    <select name="location2" id="mySelect3" onchange="myFunction(id,'tus')" class="form-control">
                                                                                        @foreach($locations as $location)
                                                                                            <option value="{{ $location->id }}">{{  $location->name }}</option>
                                                                                        @endforeach
                                                                                    </select>                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Wednesday </label>
                                                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                                                    <select name="location3" id="mySelect4" onchange="myFunction(id,'wen')" class="form-control">
                                                                                        @foreach($locations as $location)
                                                                                            <option value="{{ $location->id }}">{{  $location->name }}</option>
                                                                                        @endforeach
                                                                                    </select>                                                        
                                                                                    </div>
                                                                                </div>        
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Thursday  </label>
                                                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                                                    <select name="location4" id="mySelect5" onchange="myFunction(id,'the')"  class="form-control">
                                                                                        @foreach($locations as $location)
                                                                                            <option value="{{ $location->id }}">{{  $location->name }}</option>
                                                                                        @endforeach
                                                                                    </select>                                                        
                                                                                    </div>
                                                                                </div>
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Friday </label>
                                                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                                                    <select name="location5" id="mySelect6" onchange="myFunction(id,'fri')" class="form-control">
                                                                                        @foreach($locations as $location)
                                                                                            <option value="{{ $location->id }}">{{  $location->name }}</option>
                                                                                        @endforeach
                                                                                    </select>                                                        
                                                                                    </div>
                                                                                </div>        
                                                                                <div class="form-group">
                                                                                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Satarday </label>
                                                                                    <div class="col-md-9 col-sm-9 col-xs-12">
                                                                                    <select name="location6" id="mySelect7" onchange="myFunction(id,'sat')" class="form-control">
                                                                                        @foreach($locations as $location)
                                                                                            <option value="{{ $location->id }}">{{  $location->name }}</option>
                                                                                        @endforeach
                                                                                    </select>                                                        
                                                                                    </div>
                                                                                </div>        
                                                                                <div class="ln_solid"></div>
                                                                                <div class="form-group">
                                                                                  
                                                                                </div>
                                                                            </div>
                                                                    </div><!-- /row -->
                                                                </div><!-- /step1 -->

                                                                <div id="step-2">
                                                                    <table class="table table-striped table-hover table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th class="col-md-2">Days</th>
                                                                                    <th class="text-center">Sunday</th>
                                                                                    <th class="text-center">Monday</th>
                                                                                    <th class="text-center">Tusday</th>
                                                                                    <th class="text-center">Wednesday</th>
                                                                                    <th class="text-center">Thursday</th>
                                                                                    <th class="text-center">Friday</th>
                                                                                    <th class="text-center">Satarday</th>
                                                                            
                                                                                </tr>

                                                                                <tr>
                                                                                    <th >Dates</th>
                                                                                    <th class="text-center" id="sunday1"></th>
                                                                                    <th class="text-center" id="monday1"></th>
                                                                                    <th class="text-center" id="tusday1"></th>
                                                                                    <th class="text-center" id="wendnesday1"></th>
                                                                                    <th class="text-center" id="thursday1"></th>
                                                                                    <th class="text-center" id="friday1"></th>
                                                                                    <th class="text-center" id="satarday1"></th>
                                                                                </tr>

                                                                                <tr>
                                                                                    <th >Locations</th>
                                                                                    <th class="text-center" id="loc1">-</th>
                                                                                    <th class="text-center" id="loc2">-</th>
                                                                                    <th class="text-center" id="loc3">-</th>
                                                                                    <th class="text-center" id="loc4">-</th>
                                                                                    <th class="text-center" id="loc5">-</th>
                                                                                    <th class="text-center" id="loc6">-</th>
                                                                                    <th class="text-center" id="loc7">-</th>
                                                                                </tr>

                                                                            </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th class="text-right">Breakfast</th>
                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="breakfast0" id="sun1" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="sun1" OnClick="updateTextArea(this,1);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>
                                                                                 

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="breakfast1" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="mon1"  OnClick="updateTextArea(this,1);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="breakfast2" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="tus1"  OnClick="updateTextArea(this,1);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="breakfast3" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="wen1"  OnClick="updateTextArea(this,1);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="breakfast4" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="the1"  OnClick="updateTextArea(this,1);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>


                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="breakfast5" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="fri1"  OnClick="updateTextArea(this,1);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="breakfast6" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="sat1"  OnClick="updateTextArea(this,1);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>
                                                                                                                                           
                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="text-right">Lunch</th>
                                                                                       <td class="text-center" >
                                                                                        <input type="hidden" name="1unch0" id="sun2" value="0">
                                                                                                <span class=" btn btn-warning size disabled" id="s2" flip="0" 
                                                                                                name="sun2"  OnClick="updateTextArea(this,2);" 
                                                                                                value="0">0
                                                                                                </span> 
                                                                                  
                                                                                            </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="1unch1" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" id="m2" flip="0" 
                                                                                            name="mon2"  OnClick="updateTextArea(this,2);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>
                                                                                    
                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="1unch2" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="tus2"  OnClick="updateTextArea(this,2);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="1unch3" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="wen2"  OnClick="updateTextArea(this,2);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="1unch4" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="the2"  OnClick="updateTextArea(this,2);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="1unch5" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="fri2"  OnClick="updateTextArea(this,2);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="1unch6" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="sat2"  OnClick="updateTextArea(this,2);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>


                                                                                    </tr>                                                

                                                                                <tr>
                                                                                    <th class="text-right">Dinner</th>
                                                                                       <td class="text-center" >
                                                                                        <input type="hidden" name="dinner0" id="sun3" value="0">
                                                                                            <span class=" btn btn-warning size disabled" id="s3" flip="0" 
                                                                                            name="sun3"  OnClick="updateTextArea(this,3);" 
                                                                                            value="0">0
                                                                                            </span> 
                                                                              
                                                                                        </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="dinner1" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" id="m3" flip="0" 
                                                                                            name="mon3"  OnClick="updateTextArea(this,3);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>


                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="dinner2" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="tus3"  OnClick="updateTextArea(this,3);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>


                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="dinner3" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="wen3"  OnClick="updateTextArea(this,3);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>


                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="dinner4" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="the3"  OnClick="updateTextArea(this,3);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>


                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="dinner5" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="fri3"  OnClick="updateTextArea(this,3);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                                    <td class="text-center" >
                                                                                        <input type="hidden" name="dinner6" id="bs" value="0">
                                                                                        <span class="btn btn-warning size disabled" flip="0" 
                                                                                            name="sat3"  OnClick="updateTextArea(this,3);" 
                                                                                            value="0">0
                                                                                        </span> 
                                                                          
                                                                                    </td>

                                                                         
                                                                                </tr>     
                                                                   
                                                                                <tr>
                                                                                    <th class="text-center">Total Per Diem</th>
                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="total_sun" value="0">
                                                                                        <span id="total_sun">0</span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="total_mon" value="0">
                                                                                        <span id="total_mon">0</span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="total_tus" value="0">
                                                                                        <span id="total_tus">0</span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="total_wen" value="0">
                                                                                        <span id="total_wen">0</span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="total_the" value="0">
                                                                                        <span id="total_the">0</span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="total_fri" value="0">
                                                                                        <span id="total_fri">0</span>
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="total_sat" value="0">
                                                                                        <span id="total_sat">0</span>
                                                                                    </td>
                                                                                </tr> 
                                                                                <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                                                                                    <td class="text-center">Total</td>
                                                                                    <td class="text-center">
                                                                                        <input type="text" id="total_per" value="0" style="width:80px;text-align:center" disabled="disabled">
                                                                                    </td>
                                                                                </tr>                                             

                                                                                <tr>
                                                                                    <th class="text-center">Billable (Y/N)</th>
                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="b1" id="bs" value="0">
                                                                                        <span class="btn btn-danger size" style="border-radius:20px" flip="0" 
                                                                                            name="b1"  OnClick="billable(this,1);" 
                                                                                            value="0">NO
                                                                                        </span> 
                                                                                    </td>


                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="b2" id="bs" value="0">
                                                                                        <span class="btn btn-danger size" style="border-radius:20px" flip="0" 
                                                                                            name="b2"  OnClick="billable(this,2);" 
                                                                                            value="0">NO
                                                                                        </span> 
                                                                                    </td>

                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="b3" id="bs" value="0">
                                                                                        <span class="btn btn-danger size" style="border-radius:20px" flip="0" 
                                                                                            name="b3"  OnClick="billable(this,3);" 
                                                                                            value="0">NO
                                                                                        </span> 
                                                                                    </td>

                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="b4" id="bs" value="0">
                                                                                        <span class="btn btn-danger size" style="border-radius:20px" flip="0" 
                                                                                            name="b4"  OnClick="billable(this,4);" 
                                                                                            value="0">NO
                                                                                        </span> 
                                                                                    </td>
                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="b5" id="bs" value="0">
                                                                                        <span class="btn btn-danger size" style="border-radius:20px" flip="0" 
                                                                                            name="b5"  OnClick="billable(this,5);" 
                                                                                            value="0">NO
                                                                                        </span> 
                                                                                    </td>

                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="b6" id="bs" value="0">
                                                                                        <span class="btn btn-danger size" style="border-radius:20px" flip="0" 
                                                                                            name="b6"  OnClick="billable(this,6);" 
                                                                                            value="0">NO
                                                                                        </span> 
                                                                                    </td>

                                                                                    <td class="text-center">
                                                                                        <input type="hidden" name="b7" id="bs" value="0">
                                                                                        <span class="btn btn-danger size" style="border-radius:20px" flip="0" 
                                                                                            name="b7"  OnClick="billable(this,7);" 
                                                                                            value="0">NO
                                                                                        </span> 
                                                                                    </td>                                                        
                                                                                </tr>

                                                                            </tbody>
                                                                    </table>                                        
                                                                </div><!-- /step2 -->

                                                                <div id="step-3">
                                                                    <table class="table table-striped table-hover table-bordered">
                                                                        </tbody>
                                                                            <tr>
                                                                                <td class="text-center col-md-2">
                                                                                    Client & Exlanation
                                                                                </td>
                                                                                <td>
                                                                              
                                                                                </td>
                                                                            </tr>

                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    Sunday <br><span id="sunday2"></span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cs" name="cs" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="es" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>    

                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    Monday <br><span id="monday2"></span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cs" name="cm" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="em" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>  
                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    Tusday <br><span id="tusday2"></span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="ct" name="ct" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="et" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>  

                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    Wednesday <br><span id="wednesday2"></span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cw" name="cw" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="ew" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>  

                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    Thursday <br><span id="thursday2"></span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="ctu" name="ctu" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="etu" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>  

                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    Friday <br><span id="friday2"></span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cf" name="cf" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="ef" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>  

                                                                            <tr>
                                                                                <td class="text-center">
                                                                                    Satarday <br><span id="satarday2"></span>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cst" name="cst" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="est" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>
                                                                                </td>
                                                                            </tr> 
                                                                               

                                                                            </tbody>
                                                                        </table>
                                                                </div><!-- /step3 -->

                                                                <div id="step-4">
                                                                    <table class="table table-striped table-hover table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="col-md-2">Days</th>
                                                                                <th class="text-center">Sunday</th>
                                                                                <th class="text-center">Monday</th>
                                                                                <th class="text-center">Tusday</th>
                                                                                <th class="text-center">Wednesday</th>
                                                                                <th class="text-center">Thursday</th>
                                                                                <th class="text-center">Friday</th>
                                                                                <th class="text-center">Satarday</th>
                                                                        
                                                                            </tr>

                                                                            <tr>
                                                                                <th >Dates</th>
                                                                                <th class="text-center" id="sunday3"></th>
                                                                                <th class="text-center" id="monday3"></th>
                                                                                <th class="text-center" id="tusday3"></th>
                                                                                <th class="text-center" id="wendnesday3"></th>
                                                                                <th class="text-center" id="thursday3"></th>
                                                                                <th class="text-center" id="friday3"></th>
                                                                                <th class="text-center" id="satarday3"></th>
                                                                            </tr>

                                                                            <tr>
                                                                                <th >Locations</th>
                                                                                <th class="text-center" id="loc1">-</th>
                                                                                <th class="text-center" id="loc2">-</th>
                                                                                <th class="text-center" id="loc3">-</th>
                                                                                <th class="text-center" id="loc4">-</th>
                                                                                <th class="text-center" id="loc5">-</th>
                                                                                <th class="text-center" id="loc6">-</th>
                                                                                <th class="text-center" id="loc7">-</th>
                                                                            </tr>

                                                                        </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td>Beg</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr">
                                                                                        </div>
                                                                                    </td>   


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr1">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr2">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr3">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr4">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr5">
                                                                                        </div> 
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr6">
                                                                                        </div>
                                                                                    </td> 
                                                                                 

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>End</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr1">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr2">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr3">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr4">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr5">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center rr6">
                                                                                        </div>
                                                                                    </td> 
                                                                              
                                                                                </tr>

                                                                                <tr>
                                                                                    <td>Work Order #</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Company or Personal Car? (C/P)</td>
                                                                                   
                                                                                    <td class="text-center" >
                                                                                        <div class="btn-group btn-toggle" id="coll1"> 
                                                                                            
                                                                                            <input type="hidden" name="sun1" class="coll1" value="1">                                
                                                                                            <a class="btn btn-success active" value="1">C</a>
                                                                                            <a class="btn btn-default" value="2">P</a>
                                                                                        </div>
                                                                                    </td>    

                                                                                   
                                                                                    <td class="text-center" >
                                                                                        <div class="btn-group btn-toggle" id="coll2"> 
                                                                                            
                                                                                            <input type="hidden" name="sun1" class="coll2" value="1">                                
                                                                                            <a class="btn btn-success active" value="1">C</a>
                                                                                            <a class="btn btn-default" value="2">P</a>
                                                                                        </div>
                                                                                    </td>    
                                                                                   
                                                                                    <td class="text-center" >
                                                                                        <div class="btn-group btn-toggle" id="coll3"> 
                                                                                            
                                                                                            <input type="hidden" name="sun1" class="coll3" value="1">                                
                                                                                            <a class="btn btn-success active" value="1">C</a>
                                                                                            <a class="btn btn-default" value="2">P</a>
                                                                                        </div>
                                                                                    </td>    
                                                                                   
                                                                                    <td class="text-center" >
                                                                                        <div class="btn-group btn-toggle" id="coll4"> 
                                                                                            
                                                                                            <input type="hidden" name="sun1" class="coll4" value="1">                                
                                                                                            <a class="btn btn-success active" value="1">C</a>
                                                                                            <a class="btn btn-default" value="2">P</a>
                                                                                        </div>
                                                                                    </td>    
                                                                                   
                                                                                    <td class="text-center" >
                                                                                        <div class="btn-group btn-toggle" id="coll5"> 
                                                                                            
                                                                                            <input type="hidden" name="sun1" class="coll5" value="1">                                
                                                                                            <a class="btn btn-success active" value="1">C</a>
                                                                                            <a class="btn btn-default" value="2">P</a>
                                                                                        </div>
                                                                                    </td>    
                                                                                   
                                                                                    <td class="text-center" >
                                                                                        <div class="btn-group btn-toggle" id="coll6"> 
                                                                                            
                                                                                            <input type="hidden" name="sun1" class="coll6" value="1">                                
                                                                                            <a class="btn btn-success active" value="1">C</a>
                                                                                            <a class="btn btn-default" value="2">P</a>
                                                                                        </div>
                                                                                    </td>    
                                                                                   
                                                                                    <td class="text-center" >
                                                                                        <div class="btn-group btn-toggle" id="coll7"> 
                                                                                            
                                                                                            <input type="hidden" name="sun1" class="coll7" value="1">                                
                                                                                            <a class="btn btn-success active" value="1">C</a>
                                                                                            <a class="btn btn-default" value="2">P</a>
                                                                                        </div>
                                                                                    </td>    
                                                                                
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Billable to Client</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 
                                                                                 

                                                                                </tr>

                                                                                <tr>
                                                                                    <td>Per.car</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                        </div>
                                                                                    </td> 
                                                                                    

                                                                                </tr>

                                                                                <tr>
                                                                                    <td>Miles Driven</td>
                                                                                    <td class="text-center" >

                                                                                        <div id="rr">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div id="rr1">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div id="rr2">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div id="rr3">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div id="rr4">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div id="rr5">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div id="rr6">
                                                                                        </div>
                                                                                    </td> 
                                                                                    

                                                                                </tr>
 
                                                                                <tr>
                                                                                    <td>Miles Expense</td>
                                                                                    <td class="text-center" >

                                                                                        <div id="rr0">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div id="rr10">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div id="rr20">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div id="rr30">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div id="rr40">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div id="rr50">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div id="rr60">
                                                                                        </div>
                                                                                    </td> 
                                                                                    
                                                                                </tr>
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td class="text-center" >

                                                                                        <div id="">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div id="">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div id="">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div id="">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div id="">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div id="">
                                                                                            Total
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div id="totalMileag">
                                                                                        </div>
                                                                                    </td> 
                                                                                    
                                                                                </tr>

                                                                            </tbody>
                                                                    </table>
                                                                </div><!-- /step4 -->

                                                                <div id="step-5">
                                                                    <table id="activity_table" class="table table-striped table-hover table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="col-md-2">Days</th>
                                                                                <th class="text-center">Sunday</th>
                                                                                <th class="text-center">Monday</th>
                                                                                <th class="text-center">Tusday</th>
                                                                                <th class="text-center">Wednesday</th>
                                                                                <th class="text-center">Thursday</th>
                                                                                <th class="text-center">Friday</th>
                                                                                <th class="text-center">Satarday</th>
                                                                                <th class="text-center"></th>
                                                                            </tr>

                                                                            <tr>
                                                                                <th >Dates</th>
                                                                                <th class="text-center" id="sunday4"></th>
                                                                                <th class="text-center" id="monday4"></th>
                                                                                <th class="text-center" id="tusday4"></th>
                                                                                <th class="text-center" id="wendnesday4"></th>
                                                                                <th class="text-center" id="thursday4"></th>
                                                                                <th class="text-center" id="friday4"></th>
                                                                                <th class="text-center" id="satarday4"></th>
                                                                                <th class="text-center"></th>
                                                                            </tr>

                                                                            <tr>
                                                                                <th >Locations</th>
                                                                                <th class="text-center" id="loc1">-</th>
                                                                                <th class="text-center" id="loc2">-</th>
                                                                                <th class="text-center" id="loc3">-</th>
                                                                                <th class="text-center" id="loc4">-</th>
                                                                                <th class="text-center" id="loc5">-</th>
                                                                                <th class="text-center" id="loc6">-</th>
                                                                                <th class="text-center" id="loc7">-</th>
                                                                                <th class="text-center"></th>
                                                                            </tr>

                                                                        </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <th class="text-center">Cabs / Local Transportation</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="text-center">Gas / Tolls / Parking</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>

                                                                                <tr>
                                                                                    <th class="text-center">Logging: Room Charges</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="text-center">Meals</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0"  disabled="disabled"class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="text-center">Telephone /Fax Charges</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                <tr>
                                                                                    <th class="text-right">Other</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled"  class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>

                                                                                <tr>
                                                                                    <th class="text-center">Siminars:Meeting Room Expense</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>

                                                                                <tr>
                                                                                    <th class="text-center">Catering</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>

                                                                                <tr>
                                                                                    <th class="text-center">Audio / Visual</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>


                                                                                <tr>
                                                                                    <th class="text-center">Other Siminars Expense</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>

                                                                                <tr>
                                                                                    <th class="text-center">Client Entertainment Expense</th>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>


                                                                                 <tr class="totalRow">
                                                                                        <td>Total</td>
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                        
                                                                                         <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td> 
                                                                                 </tr>
                                                                            </tbody>
                                                                    </table>
                                                                </div><!-- /step5 -->

                                                                <div id="step-6">
                                                                    <table id="activity_table1" class="table table-striped table-hover table-bordered">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="col-md-2">Days</th>
                                                                                <th class="text-center">Sunday</th>
                                                                                <th class="text-center">Monday</th>
                                                                                <th class="text-center">Tusday</th>
                                                                                <th class="text-center">Wednesday</th>
                                                                                <th class="text-center">Thursday</th>
                                                                                <th class="text-center">Friday</th>
                                                                                <th class="text-center">Satarday</th>
                                                                                <th class="text-center"></th>
                                                                            </tr>

                                                                            <tr>
                                                                                <th >Dates</th>
                                                                                <th class="text-center" id="sunday5"></th>
                                                                                <th class="text-center" id="monday5"></th>
                                                                                <th class="text-center" id="tusday5"></th>
                                                                                <th class="text-center" id="wendnesday5"></th>
                                                                                <th class="text-center" id="thursday5"></th>
                                                                                <th class="text-center" id="friday5"></th>
                                                                                <th class="text-center" id="satarday5"></th>
                                                                                <th class="text-center"></th>
                                                                            </tr>

                                                                            <tr>
                                                                                <th >Locations</th>
                                                                                <th class="text-center" id="loc1">-</th>
                                                                                <th class="text-center" id="loc2">-</th>
                                                                                <th class="text-center" id="loc3">-</th>
                                                                                <th class="text-center" id="loc4">-</th>
                                                                                <th class="text-center" id="loc5">-</th>
                                                                                <th class="text-center" id="loc6">-</th>
                                                                                <th class="text-center" id="loc7">-</th>
                                                                                <th class="text-center"></th>
                                                                            </tr>

                                                                        </thead>
                                                                            <tbody>
                                                                                <tr>
                                                                                    <td class="text-center">Office Supplies</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-center">Communications</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>

                                                                                <tr>
                                                                                    <td class="text-center">Equipment</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-center">Installation Supplies</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0"  disabled="disabled"class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                <tr>
                                                                                    <td  class="text-center">Celluler Telephone Charges</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                <tr>
                                                                                    <td class="text-center">Other (Explain)</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled"  class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>

                                                                                <tr>
                                                                                    <td  class="text-center">Other (Explain)</td>
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td>    


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 


                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 
                                                                                    <td class="text-center" >

                                                                                        <div class="input-group">
                                                                                             <span class="input-group-addon">$</span>
                                                                                             <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                        </div>
                                                                                    </td> 

                                                                                </tr>
                                                                                 <tr class="totalRow">
                                                                                        <td class="text-center">Total</td>
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                        
                                                                                         <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td>                         
                                                                                        <td class="text-center" >

                                                                                            <div class="input-group">
                                                                                                 <span class="input-group-addon">$</span>
                                                                                                 <input type="text" placeholder="0" disabled="disabled" class="form-control text-center">
                                                                                            </div>
                                                                                        </td> 
                                                                                 </tr>
                                                                            </tbody>
                                                                    </table>
                                                                </div><!-- /step6 -->

                                                            {{ Form::close() }}
                                                        </div>
                                                        <!-- End SmartWizard Content -->
                                                    </div>
                                                </div>
                                            </div>

                                        </div>                                   
                                    </div><!-- /x_content -->
                                </div>
                            </div>

                        </div><!-- /end row -->



                        <div class="clearfix"></div>

                </div><!--/class-->

<script>
$('.btn-toggle').click(function() {
     
     $(this).find('.btn').toggleClass('active');  
     
     var name = $(this).attr('id');
     var value = $(this).find('.active').attr('value');  
   
     $(this).find('.'+name).attr('value',value);
     if(name == 'coll1' && value == 2){
        mileage("rr");


     } else if(name == 'coll1' && value == 1) {
        mileageEmp("rr");

    }

     if(name == 'coll2' && value == 2){
        mileage("rr1");


     } else if(name == 'coll2' && value == 1) {
        mileageEmp("rr1");

    }

     if(name == 'coll3' && value == 2){
        mileage("rr2");


     } else if(name == 'coll3' && value == 1) {
        mileageEmp("rr2");

    }

     if(name == 'coll4' && value == 2){
        mileage("rr3");


     } else if(name == 'coll4' && value == 1) {
        mileageEmp("rr3");

    }

     if(name == 'coll5' && value == 2){
        mileage("rr4");


     } else if(name == 'coll5' && value == 1) {
        mileageEmp("rr4");

    }


     if(name == 'coll6' && value == 2){
        mileage("rr5");


     } else if(name == 'coll6' && value == 1) {
        mileageEmp("rr5");

    }

     if(name == 'coll7' && value == 2){
        mileage("rr6");


     } else if(name == 'coll7' && value == 1) {
        mileageEmp("rr6");

    }

    if ($(this).find('.btn-success').size()>0) {
        $(this).find('.btn').toggleClass('btn-success');
    }

if($('#rr0').text() == '###'){
    var x = 0;
} else {
    var x = parseFloat($('#rr0').text());
}

if($('#rr10').text() == '###'){
    var x1 = 0;
} else {
    var x1 = parseFloat($('#rr10').text());
}

if($('#rr20').text() == '###'){
    var x2 = 0;
} else {
    var x2 = parseFloat($('#rr20').text());
}

if($('#rr30').text() == '###'){
    var x3 = 0;
} else {
    var x3 = parseFloat($('#rr30').text());
}

if($('#rr40').text() == '###'){
    var x4 = 0;
} else {
    var x4 = parseFloat($('#rr40').text());
}

if($('#rr50').text() == '###'){
    var x5 = 0;
} else {
    var x5 = parseFloat($('#rr50').text());
}

if($('#rr60').text() == '###'){
    var x6 = 0;
} else {
    var x6 = parseFloat($('#rr60').text());
}
    var totalMileage = $('#totalMileag');

totalMileage.text(x+x1+x2+x3+x4+x5+x6);

    
    $(this).find('.btn').toggleClass('btn-default');
       
});

function calcSubMTotal(p) {
    var minus = 0;
    var isFirst=true;
    var minus_total = $('#' + p + '');
    var mile = $('#' + p + '0');
    var totalMileage = $('#totalMileag');

    $('.' + p + '').each(function (i) {
        if (!isNaN(this.value) && this.value.length !== 0) {
            if(!isFirst)
            minus += parseFloat(this.value); 
            else
            {
                minus=parseFloat(this.value)*(-1);
                isFirst=false;
            }
        }
    });

    minus_total.text(minus);
    var c = $('.coll1').val();
    var c1 = $('.coll2').val();
    var c2 = $('.coll3').val();
    var c3 = $('.coll4').val();
    var c4 = $('.coll5').val();
    var c5 = $('.coll6').val();
    var c6 = $('.coll7').val();


    if(c == 1 && p == 'rr'){
        mile.text('###');
    } else if(c == 2 && p == 'rr'){
        mile.text(parseFloat(minus*(0.575)).toFixed(2));
    }

    if(c1 == 1 && p == 'rr1'){
        mile.text('###');
    } else if(c1 == 2 && p == 'rr1'){
        mile.text(parseFloat(minus*(0.575)).toFixed(2));
    }

    if(c2 == 1 && p == 'rr2'){
        mile.text('###');
    } else if(c2 == 2 && p == 'rr2'){
        mile.text(parseFloat(minus*(0.575)).toFixed(2));
    }

    if(c3 == 1 && p == 'rr3'){
        mile.text('###');
    } else if(c3 == 2 && p == 'rr3'){
        mile.text(parseFloat(minus*(0.575)).toFixed(2));
    }

    if(c4 == 1 && p == 'rr4'){
        mile.text('###');
    } else if(c4 == 2 && p == 'rr4'){
        mile.text(parseFloat(minus*(0.575)).toFixed(2));
    }

    if(c5 == 1 && p == 'rr5'){
        mile.text('###');
    } else if(c5 == 2 && p == 'rr5'){
        mile.text(parseFloat(minus*(0.575)).toFixed(2));
    }

    if(c6 == 1 && p == 'rr6'){
        mile.text('###');
    } else if(c6 == 2 && p == 'rr6'){
        mile.text(parseFloat(minus*(0.575)).toFixed(2));
    }

if($('#rr0').text() == '###'){
    var x = 0;
} else {
    var x = parseFloat($('#rr0').text());
}

if($('#rr10').text() == '###'){
    var x1 = 0;
} else {
    var x1 = parseFloat($('#rr10').text());
}

if($('#rr20').text() == '###'){
    var x2 = 0;
} else {
    var x2 = parseFloat($('#rr20').text());
}

if($('#rr30').text() == '###'){
    var x3 = 0;
} else {
    var x3 = parseFloat($('#rr30').text());
}

if($('#rr40').text() == '###'){
    var x4 = 0;
} else {
    var x4 = parseFloat($('#rr40').text());
}

if($('#rr50').text() == '###'){
    var x5 = 0;
} else {
    var x5 = parseFloat($('#rr50').text());
}

if($('#rr60').text() == '###'){
    var x6 = 0;
} else {
    var x6 = parseFloat($('#rr60').text());
}

totalMileage.text(x+x1+x2+x3+x4+x5+x6);

}

$('input[type=text]').on('keyup', function () {
    calcSubMTotal("rr");
    calcSubMTotal("rr1");
    calcSubMTotal("rr2");
    calcSubMTotal("rr3");
    calcSubMTotal("rr4");
    calcSubMTotal("rr5");
    calcSubMTotal("rr6");
});

$(document).ready(function(){
    function sec(){
            var carType = $('.coll1').val();
                if(carType==1){
                    calcSubMTotal("rr");
                    calcSubMTotal("rr1");
                    calcSubMTotal("rr2");
                    calcSubMTotal("rr3");
                    calcSubMTotal("rr4");
                    calcSubMTotal("rr5");
                    calcSubMTotal("rr6");
                }
    }
 
sec();
});

function mileage(p){
    var minus_total = $('#' + p + '').text();
    var total = parseFloat(minus_total);
    var mile = $('#' + p + '0');
    mile.text(parseFloat(total*(0.575)).toFixed(2));
}

function mileageEmp(p){
    var mile = $('#' + p + '0');
    mile.text("###");

}

    </script>  

@stop