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

.size{
    width:65px;
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
                                        {{ Form::open(array('url' => 'update/','method' => 'put')) }}

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
                                                        @foreach($times as $time)
                                                            <td class="text-center">
                                                        @if(!$time->breakfast == 0)
                                                                <input type="hidden" name="sun1" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="sun1"  OnClick="updateTextArea(this,1);" 
                                                                    value="{{ $time->breakfast }}">{{ $time->breakfast }}
                                                                </span>  
                                                        @else 
                                                                <input type="hidden" name="sun1" id="bs" value="0">
                                                                <span class="btn btn-warning size" flip="0" 
                                                                    name="sun1"  OnClick="updateTextArea(this,1);" 
                                                                    value="{{ $loc1->breakfast }}">{{ $loc1->breakfast }}
                                                                </span> 
                                                        @endif

                                                                </td>
                                                        @endforeach

                                                        </tr>
                                                        <tr>
                                                            <th class="text-right">Lunch</th>
                                                       @foreach($times as $time)
                                                            <td class="text-center">{{ $time->lunch }}</td>
                                                        @endforeach
                                                         


                                                            </tr>                                                

                                                        <tr>
                                                            <th class="text-right">Dinner</th>
                                                         @foreach($times as $time)
                                                            <td class="text-center">{{ $time->dinner }}</td>
                                                        @endforeach
                                                         
                                                        </tr>     
                                           
                                                        <tr>
                                                            <th class="text-center">Total Per Diem</th>
                                                        @foreach($times as $time)
                                                            <td class="text-center">{{ $time->day_total }}</td>
                                                        @endforeach
                                                         
                   
                                                        </tr> 
                                                        <tr><td></td><td></td><td></td><td></td><td></td><td></td>
                                                            <td class="text-center">Total</td>
                                                            <td class="text-center">
                                                                <input type="text" id="total_per" value="0" style="width:80px;text-align:center" disabled="disabled">
                                                            </td>
                                                        </tr>                                             

                                                        <tr>
                                                            <th class="text-center">Billable (Y/N)</th>
                                                         @foreach($times as $time)
                                                            <td class="text-center">@if($time->billable == 0)
                                                            NO
                                                            @else YES 
                                                            @endif

                                                            </td>
                                                        @endforeach
                                                                                 
                                                        </tr>
                                                        @foreach($times as $time)

                                                        <tr>
                                                            <td>
                                                                Client & Exlanation for {{ $time->days }}
                                                            </td>
                                                            <td colspan="7">

                                                                <div class="form-group">
                                                                {{ $time->clients }}
                                                                </div>
                                                                <div class="form-group">
                                                                {{ $time->explanation }}
                                                                </div>
                                                            </td>
                                                        </tr>    
                                                        @endforeach

                                                        </tbody>
                                                    </table>
                                            {{ Form::close() }}

                                        </div><!-- /x_content -->
                                </div>


                            </div>

                        </div><!-- /end row -->
    

                        <div class="clearfix"></div>

                </div><!--/class-->



@stop