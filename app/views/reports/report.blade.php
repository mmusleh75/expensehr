@extends('layouts.main')

@section('content')

{{ HTML::script('js/checkboxsum/checkboxsum.js') }}
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
</style>
<script>
    $(".alignment .btn").click(function() {
    // whenever a button is clicked, set the hidden helper
    $("#alignment").val($(this).text());
}); 
</script>

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
                                                            <th class="text-center">Locations</th>
                                                            <td class="text-center">{{ $loc1->name }}</td>
                                                            <td class="text-center">{{ $loc2->name }}</td>
                                                            <td class="text-center">{{ $loc3->name }}</td>
                                                            <td class="text-center">{{ $loc4->name }}</td>
                                                            <td class="text-center">{{ $loc5->name }}</td>
                                                            <td class="text-center">{{ $loc6->name }}</td>
                                                            <td class="text-center">{{ $loc7->name }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Breakfast</th>
                                                            <td class="text-center">{{ $loc1->breakfast }}</td>
                                                            <td class="text-center">{{ $loc2->breakfast }}</td>
                                                            <td class="text-center">{{ $loc3->breakfast }}</td>
                                                            <td class="text-center">{{ $loc4->breakfast }}</td>
                                                            <td class="text-center">{{ $loc5->breakfast }}</td>
                                                            <td class="text-center">{{ $loc6->breakfast }}</td>
                                                            <td class="text-center">{{ $loc7->breakfast }}</td>
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Lunch</th>
                                                            <td class="text-center">{{ $loc1->lunch }}</td>
                                                            <td class="text-center">{{ $loc2->lunch }}</td>
                                                            <td class="text-center">{{ $loc3->lunch }}</td>
                                                            <td class="text-center">{{ $loc4->lunch }}</td>
                                                            <td class="text-center">{{ $loc5->lunch }}</td>
                                                            <td class="text-center">{{ $loc6->lunch }}</td>
                                                            <td class="text-center">{{ $loc7->lunch }}</td>
                                                        </tr>                                                
                                                        <tr>
                                                            <th class="text-right">Dinner</th>
                                                            <td class="text-center">{{ $loc1->dinner }}</td>
                                                            <td class="text-center">{{ $loc2->dinner }}</td>
                                                            <td class="text-center">{{ $loc3->dinner }}</td>
                                                            <td class="text-center">{{ $loc4->dinner }}</td>
                                                            <td class="text-center">{{ $loc5->dinner }}</td>
                                                            <td class="text-center">{{ $loc6->dinner }}</td>
                                                            <td class="text-center">{{ $loc7->dinner }}</td>
                                                        </tr>                                                
                                                        
                                                        <tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>

                                                        <tr>
                                                            <th class="text-right">Breakfast</th>
                                                            <td class="text-center" >
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="sun" id="sun" OnClick="updateTextArea(this);" value="{{ $loc1->breakfast }}" />
                                                            </td>
                                                          <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="mo" id="mo" OnClick="updateTextArea(this);" value="{{ $loc2->breakfast }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="tus" id="tus" OnClick="updateTextArea(this);" value="{{ $loc3->breakfast }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="we" id="we" OnClick="updateTextArea(this);" value="{{ $loc4->breakfast }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="th" id="th" OnClick="updateTextArea(this);" value="{{ $loc5->breakfast }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="fr" id="fr" OnClick="updateTextArea(this);" value="{{ $loc6->breakfast }}" />
                                                            </td>
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="st" id="st" OnClick="updateTextArea(this);" value="{{ $loc7->breakfast }}" />
                                                            </td>                                                      
                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Lunch</th>
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="sun" id="sun" OnClick="updateTextArea(this);" value="{{ $loc1->lunch }}" />
                                                            </td>
                                                          <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="mo" id="mo" OnClick="updateTextArea(this);" value="{{ $loc2->lunch }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="tus" id="tus" OnClick="updateTextArea(this);" value="{{ $loc3->lunch }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="we" id="we" OnClick="updateTextArea(this);" value="{{ $loc4->lunch }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="th" id="th" OnClick="updateTextArea(this);" value="{{ $loc5->lunch }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="fr" id="fr" OnClick="updateTextArea(this);" value="{{ $loc6->lunch }}" />
                                                            </td>
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="st" id="st" OnClick="updateTextArea(this);" value="{{ $loc7->lunch }}" />
                                                            </td> 
                                                        </tr>                                                

                                                        <tr>
                                                            <th class="text-right">Dinner</th>
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="sun" id="sun" OnClick="updateTextArea(this);" value="{{ $loc1->dinner }}" />
                                                            </td>
                                                          <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="mo" id="mo" OnClick="updateTextArea(this);" value="{{ $loc2->dinner }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="tus" id="tus" OnClick="updateTextArea(this);" value="{{ $loc3->dinner }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="we" id="we" OnClick="updateTextArea(this);" value="{{ $loc4->dinner }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="th" id="th" OnClick="updateTextArea(this);" value="{{ $loc5->dinner }}" />
                                                            </td>                                                        
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="fr" id="fr" OnClick="updateTextArea(this);" value="{{ $loc6->dinner }}" />
                                                            </td>
                                                            <td class="text-center">
                                                               <input type="checkbox" class="glyphicon glyphicon-ok" name="st" id="st" OnClick="updateTextArea(this);" value="{{ $loc7->dinner }}" />
                                                            </td>                                                     
                                                        </tr>     
                                           
                                                        <tr>
                                                            <th class="text-center">Total Per Diem</th>
                                                            <td class="text-center">
                                                                <span id="total_sun">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_mon">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_tus">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_we">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_th">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_fr">0</span>
                                                            </td>
                                                            <td class="text-center">
                                                                <span id="total_st">0</span>
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
                                                            <td id="lo">
                                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                                        <label class="btn btn-default btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable1" value="1"> &nbsp; Yes &nbsp;
                                                                        </label>
                                                                        <label class="btn btn-default active btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable1" value="0" checked=""> No
                                                                        </label>
                                                                    </div>                                                         
                                                                </td>
                                                                <td id="" ="lo">
                                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                                        <label class="btn btn-default btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable2" value="1"> &nbsp; Yes &nbsp;
                                                                        </label>
                                                                        <label class="btn btn-default active btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable2" value="0" checked=""> No
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td id="" ="lo">
                                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                                        <label class="btn btn-default btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable3" value="1"> &nbsp; Yes &nbsp;
                                                                        </label>
                                                                        <label class="btn btn-default active btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable3" value="0" checked=""> No
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                                <td id="" ="lo">
                                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                                        <label class="btn btn-default btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable4" value="1"> &nbsp; Yes &nbsp;
                                                                        </label>
                                                                        <label class="btn btn-default active btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable4" value="0" checked=""> No
                                                                        </label>
                                                                    </div>
                                                                </td>                                                            
                                                                <td id="" ="lo">
                                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                                        <label class="btn btn-default btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable5" value="1"> &nbsp; Yes &nbsp;
                                                                        </label>
                                                                        <label class="btn btn-default active btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable5" value="0" checked=""> No
                                                                        </label>
                                                                    </div>
                                                                </td>

                                                                <td id="" ="lo">
                                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                                        <label class="btn btn-default btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable6" value="1"> &nbsp; Yes &nbsp;
                                                                        </label>
                                                                        <label class="btn btn-default active btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable6" value="0" checked=""> No
                                                                        </label>
                                                                    </div>
                                                                </td>                                                            
                                                                <td id="" ="lo">
                                                                    <div id="gender" class="btn-group" data-toggle="buttons">
                                                                        <label class="btn btn-default btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable7" value="1"> &nbsp; Yes &nbsp;
                                                                        </label>
                                                                        <label class="btn btn-default active btn-xs" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                                                            <input type="radio" name="biilable7" value="0" checked=""> No
                                                                        </label>
                                                                    </div>
                                                                </td>
                                                        </tr>    

                                                        </tbody>
                                                    </table>
                                                    
                                                    <table class="table table-bordered">
                                                        <tbody>

                                                            <tr->
                                                                <th class="text-center col-md-2">Clients & Explanations</th>
                                                                <td class="">

                                                                <div class="x_content">
                                                                    <!-- start accordion -->
                                                                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">
                                                                        <div class="panel">
                                                                            <a class="panel-heading"  role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                                <h4 class="panel-title">Add Clients & Explanation for Sunday </h4>
                                                                            </a>
                                                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                                                <div class="panel-body">
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cs" name="cs" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="es" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        
                                                                        <div class="panel">
                                                                            <a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                                                <h4 class="panel-title">Add Clients & Explanationfor Monday</h4>
                                                                            </a>
                                                                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                                                <div class="panel-body">
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cm" name="cm" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="em" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                       
                                                                        <div class="panel">
                                                                            <a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseTwo">
                                                                                <h4 class="panel-title">Add Clients & Explanation for Tuesday</h4>
                                                                            </a>
                                                                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                                                <div class="panel-body">
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="ctu" name="ctu" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="etu" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                                       

                                                                         <div class="panel">
                                                                            <a class="panel-heading collapsed" role="tab" id="headingFour" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseTwo">
                                                                                <h4 class="panel-title">Add Clients & Explanation for Wednesday</h4>
                                                                            </a>
                                                                            <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                                                <div class="panel-body">
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cw" name="cw" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="ew" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>                                                                    <!-- end of accordion -->

                                                                         <div class="panel">
                                                                            <a class="panel-heading collapsed" role="tab" id="headingFive" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseTwo">
                                                                                <h4 class="panel-title">Add Clients & Explanation for Thursday</h4>
                                                                            </a>
                                                                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                                                                <div class="panel-body">
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cth" name="cth" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                     <div class="form-group">
                                                                                        <textarea name="eth" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>                                                                               
                                                                                </div>
                                                                            </div>
                                                                        </div> 

                                                                         <div class="panel">
                                                                            <a class="panel-heading collapsed" role="tab" id="headingSex" data-toggle="collapse" data-parent="#accordion" href="#collapseSex" aria-expanded="false" aria-controls="collapseTwo">
                                                                                <h4 class="panel-title">Add Clients & Explanation for Friday</h4>
                                                                            </a>
                                                                            <div id="collapseSex" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSex">
                                                                                <div class="panel-body">
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cfr" name="cfr" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                     <div class="form-group">
                                                                                        <textarea name="efr" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                     </div>                                                                                
                                                                                </div>
                                                                               
                                                                            </div>
                                                                        </div>                                                                

                                                                         <div class="panel">
                                                                            <a class="panel-heading collapsed" role="tab" id="headingSeven" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseTwo">
                                                                                <h4 class="panel-title">Add Clients & Explanation for Satarday</h4>
                                                                            </a>
                                                                            <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                                                                                <div class="panel-body">
                                                                                    <div class="form-group">
                                                                                        <input type="text" id="cst" name="cst" class="form-control" placeholder="Add Clients Here">
                                                                                    </div>
                                                                                    <div class="form-group">
                                                                                        <textarea name="est" placeholder="Add Explanation Here" class="form-control"></textarea>
                                                                                    </div>                                                                                
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                </div><!-- /x_xontent -->

                                                                </td>
                                                            </tr>   
<!--
                                                            <tr>
                                                                <th class="text-center">Brief Explanation</th>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                            </tr>                                                
                                                           
                                                            <tr>
                                                                <th class="text-center">Miles Driven</th>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                            </tr>                                                      

                                                            <tr>
                                                                <th class="text-center">Mileage Expense</th>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                                <td id="lo"></td>
                                                            </tr>  
                                                            -->
                                                        </tbody>
                                                    </table>

                                        </div><!-- /x_content -->
                                </div>


                            </div>

                        </div><!-- /end row -->
    

                        <div class="clearfix"></div>

                </div><!--/class-->



@stop