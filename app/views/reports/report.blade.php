@extends('layouts.main')

@section('content')

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
                                                    <span class="step_no">4</span>
                                                    <span class="step_descr">
                                            Step 4<br />
                                            <small>Step 5 description</small>
                                        </span>
                                                </a>
                                            </li>
                                        </ul>
                                {{ Form::open(array('url' => 'aj','method' => 'POST','id' => 'task')) }}

                                        <div id="step-1">
                               

                                        </div>

                                        <div id="step-2">

                                            <table class="table table-striped table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-2">#</th>
                                                        @foreach($times as $time)
                                                            <th class="text-center">{{ $time->days }}</th>
                                                        @endforeach
                                                    
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th ><br></th>
                                                        @foreach($times as $time)
                                                            <td class="text-center">{{ $time->dates }}</td>
                                                        @endforeach
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Breakfast</th>
                                                            <td class="text-center" >
                                                                <input type="hidden" name="sun1" id="sun1" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="sun1"  OnClick="updateTextArea(this,1);" 
                                                                    value="{{ $loc1->breakfast }}">{{ $loc1->breakfast }}
                                                                </span> 
                                                  
                                                            </td>
                                                         

                                                            <td class="text-center" >
                                                                <input type="hidden" name="mon1" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="mon1"  OnClick="updateTextArea(this,1);" 
                                                                    value="{{ $loc2->breakfast }}">{{ $loc2->breakfast }}
                                                                </span> 
                                                  
                                                            </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="tus1" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="tus1"  OnClick="updateTextArea(this,1);" 
                                                                    value="{{ $loc3->breakfast }}">{{ $loc3->breakfast }}
                                                                </span> 
                                                  
                                                            </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="wen1" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="wen1"  OnClick="updateTextArea(this,1);" 
                                                                    value="{{ $loc4->breakfast }}">{{ $loc4->breakfast }}
                                                                </span> 
                                                  
                                                            </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="the1" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="the1"  OnClick="updateTextArea(this,1);" 
                                                                    value="{{ $loc5->breakfast }}">{{ $loc5->breakfast }}
                                                                </span> 
                                                  
                                                            </td>


                                                            <td class="text-center" >
                                                                <input type="hidden" name="fri1" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="fri1"  OnClick="updateTextArea(this,1);" 
                                                                    value="{{ $loc6->breakfast }}">{{ $loc6->breakfast }}
                                                                </span> 
                                                  
                                                            </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="sat1" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="sat1"  OnClick="updateTextArea(this,1);" 
                                                                    value="{{ $loc7->breakfast }}">{{ $loc7->breakfast }}
                                                                </span> 
                                                  
                                                            </td>
                                                                                                                   
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Lunch</th>
                                                               <td class="text-center" >
                                                                <input type="hidden" name="sun2" id="bs" value="0">
                                                                        <span class=" btn btn-warning size" flip="0" 
                                                                        name="sun2"  OnClick="updateTextArea(this,2);" 
                                                                        value="{{ $loc1->lunch }}">{{ $loc1->lunch }}
                                                                        </span> 
                                                          
                                                                    </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="mon2" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="mon2"  OnClick="updateTextArea(this,2);" 
                                                                    value="{{ $loc2->lunch }}">{{ $loc2->lunch }}
                                                                </span> 
                                                  
                                                            </td>
                                                            
                                                            <td class="text-center" >
                                                                <input type="hidden" name="tus2" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="tus2"  OnClick="updateTextArea(this,2);" 
                                                                    value="{{ $loc3->lunch }}">{{ $loc3->lunch }}
                                                                </span> 
                                                  
                                                            </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="wen2" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="wen2"  OnClick="updateTextArea(this,2);" 
                                                                    value="{{ $loc4->lunch }}">{{ $loc4->lunch }}
                                                                </span> 
                                                  
                                                            </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="the2" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="the2"  OnClick="updateTextArea(this,2);" 
                                                                    value="{{ $loc5->lunch }}">{{ $loc5->lunch }}
                                                                </span> 
                                                  
                                                            </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="fri2" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="fri2"  OnClick="updateTextArea(this,2);" 
                                                                    value="{{ $loc6->lunch }}">{{ $loc6->lunch }}
                                                                </span> 
                                                  
                                                            </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="sat2" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="sat2"  OnClick="updateTextArea(this,2);" 
                                                                    value="{{ $loc7->lunch }}">{{ $loc7->lunch }}
                                                                </span> 
                                                  
                                                            </td>


                                                            </tr>                                                

                                                        <tr>
                                                            <th class="text-right">Dinner</th>
                                                               <td class="text-center" >
                                                                <input type="hidden" name="sun3" id="bs" value="0">
                                                                    <span class=" btn btn-warning size" flip="0" 
                                                                    name="sun3"  OnClick="updateTextArea(this,3);" 
                                                                    value="{{ $loc1->dinner }}">{{ $loc1->dinner }}
                                                                    </span> 
                                                      
                                                                </td>

                                                            <td class="text-center" >
                                                                <input type="hidden" name="mon3" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="mon3"  OnClick="updateTextArea(this,3);" 
                                                                    value="{{ $loc2->dinner }}">{{ $loc2->dinner }}
                                                                </span> 
                                                  
                                                            </td>


                                                            <td class="text-center" >
                                                                <input type="hidden" name="tus3" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="tus3"  OnClick="updateTextArea(this,3);" 
                                                                    value="{{ $loc3->dinner }}">{{ $loc3->dinner }}
                                                                </span> 
                                                  
                                                            </td>


                                                            <td class="text-center" >
                                                                <input type="hidden" name="wen3" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="wen3"  OnClick="updateTextArea(this,3);" 
                                                                    value="{{ $loc4->dinner }}">{{ $loc4->dinner }}
                                                                </span> 
                                                  
                                                            </td>


                                                            <td class="text-center" >
                                                                <input type="hidden" name="the3" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="the3"  OnClick="updateTextArea(this,3);" 
                                                                    value="{{ $loc5->dinner }}">{{ $loc5->dinner }}
                                                                </span> 
                                                  
                                                            </td>


                                                            <td class="text-center" >
                                                                <input type="hidden" name="fri3" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="fri3"  OnClick="updateTextArea(this,3);" 
                                                                    value="{{ $loc6->dinner }}">{{ $loc6->dinner }}
                                                                </span> 
                                                  
                                                            </td>


                                                            <td class="text-center" >
                                                                <input type="hidden" name="sat3" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="sat3"  OnClick="updateTextArea(this,3);" 
                                                                    value="{{ $loc7->dinner }}">{{ $loc7->dinner }}
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
                                        </div>
                                       

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
                                                            Sunday
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
                                                            Monday
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
                                                            Tusday
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
                                                            Wednesday
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
                                                            Thursday
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
                                                            Friday
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
                                                            Satarday
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
                                        </div>


                                        <div id="step-4">
                                            <table id="activity_table" class="table table-striped table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-2 text-center">Days</th>
                                                        @foreach($times as $time)
                                                            <th class="text-center">{{ $time->days }}</th>
                                                        @endforeach
                                                        <td class="text-center"></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">Dates</th>
                                                        @foreach($times as $time)
                                                            <td class="text-center">{{ $time->dates }}</td>
                                                        @endforeach
                                                            <td class="text-center"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">Locations</th>
                                                            <td class="text-center">{{ $loc1->name }}</td>
                                                            <td class="text-center">{{ $loc2->name }}</td>
                                                            <td class="text-center">{{ $loc3->name }}</td>
                                                            <td class="text-center">{{ $loc4->name }}</td>
                                                            <td class="text-center">{{ $loc5->name }}</td>
                                                            <td class="text-center">{{ $loc6->name }}</td>
                                                            <td class="text-center">{{ $loc7->name }}</td>
                                                            <td class="text-center col-md-1">Total</td>
                                                        </tr>     

                                                        <tr>
                                                            <th class="text-center">Cabs / Local Transportation</th>
                                                            <td class="text-center" >

                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun row1">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon row1">
                                                                </div>                                                           
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus row1">
                                                                </div>                                                            
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen  row1">
                                                                </div>                                                            
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the row1">
                                                                </div>                                                            
                                                           </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri row1">
                                                                </div>                                                            
                                                           </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text"placeholder="0" class="form-control text-center sat row1">
                                                                </div>                                                            
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row1">0</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">Gas / Tolls / Parking</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun row2">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon row2">
                                                                </div>
                                                            </td>
                                                            
                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus row2">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen row2">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the row2">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri row2">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat row2">
                                                                </div>
                                                            </td>

                                                            <td class="text-center">
                                                                <span id="total_row2">0</span>
                                                            </td>
                                                        </tr>                                                

                                                        <tr>
                                                            <th class="text-center">Logging: Room Charges</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sun row3">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center mon row3">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus row3">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen row3">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the row3">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri row3">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat row3">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row3">0</span>
                                                            </td>
                                                        </tr>     


                                                        <tr>
                                                            <th class="text-center">Meals</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun row4">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon row4">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus row4">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen row4">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the row4">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri row4">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat row4">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row4">0</span>
                                                            </td>                                                        
                                                        </tr>     


                                                        <tr>
                                                            <th class="text-center">Telephone /Fax Charges</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun row5">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon row5">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus row5">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center wen row5">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center the row5">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center fri row5">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sat row5">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row5">0</span>
                                                            </td>                                                        </tr>     


                                                        <tr>
                                                            <th class="text-right">Other</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sun row6">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center mon row6">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center tus row6">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center wen row6">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center the row6">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center fri row6">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sat row6">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row6">0</span>
                                                            </td>                                                        
                                                        </tr>     


                                                        <tr>
                                                            <th class="text-center">Siminars:Meeting Room Expense</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun row7">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon row7">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus row7">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen row7">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center the row7">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri row7">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat row7">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row7">0</span>
                                                            </td>                                                        
                                                        </tr>     


                                                        <tr>
                                                            <th class="text-center">Catering</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun row8">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon row8">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus row8">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen row8">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the row8">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri row8">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sat row8">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row8">0</span>
                                                            </td>

                                                        </tr>     


                                                        <tr>
                                                            <th class="text-center">Audio / Visual</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun row9">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon row9">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus row9">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen row9">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the row9">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri row9">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sat row9">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row9">0</span>
                                                            </td>

                                                        </tr>     


                                                        <tr>
                                                            <th class="text-center">Other Siminars Expense</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sun row10">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center mon row10">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center tus row10">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center wen row10">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center the row10">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center fri row10">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sat row10">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row10">0</span>
                                                            </td>

                                                        </tr>     


                                                        <tr>
                                                            <th class="text-center">Client Entertainment Expense</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sun row11">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center mon row11">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center tus row11">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center wen row11">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center the row11">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center fri row11">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" id="" value="" placeholder="0" class="form-control text-center sat row11">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row11">0</span>
                                                            </td>
                                                        </tr>          
    
                                                       <tr>
                                                            <th class="text-center">Total Travel</th>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_sun" value="0">
                                                                <span id="sun_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_mon" value="0">
                                                                <span id="mon_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_tus" value="0">
                                                                <span id="tus_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_wen" value="0">
                                                                <span id="wen_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_the" value="0">
                                                                <span id="the_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_fri" value="0">
                                                                <span id="fri_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_sat" value="0">
                                                                <span id="sat_sum">0</span>
                                                            </td>
                                                        </tr> 
                                                        <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                                                            <td class="text-center">Total</td>
                                                            <td class="text-center">
                                                                <input type="text" id="total_per" value="0" style="width:80px;text-align:center" disabled="disabled">
                                                            </td>
                                                        </tr>                                             

                                                    </tbody>
                                            </table>
                                        </div>
                                       

                                        <div id="step-5">
                                            <table class="table table-striped table-hover table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th class="col-md-2 text-center">Days</th>
                                                        @foreach($times as $time)
                                                            <th class="text-center">{{ $time->days }}</th>
                                                        @endforeach
                                                        <td class="text-center"></td>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th class="text-center">Dates</th>
                                                        @foreach($times as $time)
                                                            <td class="text-center">{{ $time->dates }}</td>
                                                        @endforeach
                                                            <td class="text-center"></td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">Locations</th>
                                                            <td class="text-center">{{ $loc1->name }}</td>
                                                            <td class="text-center">{{ $loc2->name }}</td>
                                                            <td class="text-center">{{ $loc3->name }}</td>
                                                            <td class="text-center">{{ $loc4->name }}</td>
                                                            <td class="text-center">{{ $loc5->name }}</td>
                                                            <td class="text-center">{{ $loc6->name }}</td>
                                                            <td class="text-center">{{ $loc7->name }}</td>
                                                            <td class="text-center col-md-1">Total</td>
                                                        </tr>     

                                                        <tr>
                                                            <th class="text-center">Office Supplies</th>
                                                            <td class="text-center" >

                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun1 row12">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon1 row12">
                                                                </div>                                                           
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus1 row12">
                                                                </div>                                                            
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen1  row12">
                                                                </div>                                                            
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the1 row12">
                                                                </div>                                                            
                                                           </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri1 row12">
                                                                </div>                                                            
                                                           </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text"placeholder="0" class="form-control text-center sat1 row12">
                                                                </div>                                                            
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row12">0</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-center">Communications</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun1 row13">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon1 row13">
                                                                </div>
                                                            </td>
                                                            
                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus1 row13">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen1 row13">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the1 row13">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri1 row13">
                                                                </div>
                                                            </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat1 row13">
                                                                </div>
                                                            </td>

                                                            <td class="text-center">
                                                                <span id="total_row13">0</span>
                                                            </td>
                                                        </tr>                                                

                                                        <tr>
                                                            <th class="text-center">Equipment</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun1 row14">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon1 row14">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus1 row14">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen1 row14">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the1 row14">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri1 row14">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat1 row14">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row14">0</span>
                                                            </td>
                                                        </tr>     


                                                        <tr>
                                                            <th class="text-center">Installation Supplies</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun1 row15">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon1 row15">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus1 row15">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen1 row15">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the1 row15">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri1 row415">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat1 row15">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row15">0</span>
                                                            </td>                                                        
                                                        </tr>     

                                                        <tr>
                                                            <th class="text-center">Cellular Telephone Charges</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun1 row16">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon1 row16">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus1 row16">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen1 row16">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the1 row16">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri1 row16">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat1 row16">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row16">0</span>
                                                            </td>                                                        
                                                        </tr>     

                                                        <tr>
                                                            <th class="text-center">Other(explain)</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun1 row17">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon1 row17">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus1 row17">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen1 row17">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the1 row17">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri1 row17">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat1 row17">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row17">0</span>
                                                            </td>                                                        
                                                        </tr> 
                                                        <tr>
                                                            <th class="text-center">Other(explain)</th>
                                                               <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sun1 row18">
                                                                </div>
                                                                </td>

                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center mon1 row18">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center tus1 row18">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center wen1 row18">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center the1 row18">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center fri1 row18">
                                                                </div>
                                                            </td>


                                                            <td class="text-center" >
                                                                <div class="input-group">
                                                                     <span class="input-group-addon">$</span>
                                                                     <input type="text" placeholder="0" class="form-control text-center sat1 row18">
                                                                </div>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_row18">0</span>
                                                            </td>                                                        
                                                        </tr> 

                                                       <tr>
                                                            <th class="text-center">Total Travel</th>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_sun" value="0">
                                                                <span id="sun1_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_mon" value="0">
                                                                <span id="mon1_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_tus" value="0">
                                                                <span id="tus1_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_wen" value="0">
                                                                <span id="wen1_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_the" value="0">
                                                                <span id="the1_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_fri" value="0">
                                                                <span id="fri1_sum">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <input type="hidden" name="total_sat" value="0">
                                                                <span id="sat1_sum">0</span>
                                                            </td>
                                                        </tr> 
                                                        <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                                                            <td class="text-center">Total</td>
                                                            <td class="text-center">
                                                                <input type="text" id="total_per" value="0" style="width:80px;text-align:center" disabled="disabled">
                                                            </td>
                                                        </tr>                                             

                                                    </tbody>
                                            </table>
                                        </div>
                                    {{ Form::close() }}                                         

                                    </div>
                                    <!-- End SmartWizard Content -->


                                        </div><!-- /x_content -->
                                </div>


                            </div>

                        </div><!-- /end row -->
    

                        <div class="clearfix"></div>

                </div><!--/class-->



@stop