@extends('layouts.main')

@section('content')
<link href="css/weekpicker/weekpicker.css" rel="stylesheet" type="text/css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="js/jquery.weekpicker.js" ></script>


<script type="text/javascript">
    $(document).ready(function(){

    $('#add_task').on('submit',function(event){
        that = $(this),
        data = [];

        that.find('[name]').each(function(index,value){
            that = $(this),
            name = that.attr('name'),
            value = that.val();

            data[name] = value;

    
        });

        $.ajax({
            type:'post',
            url:'tasks',
            data:data,
            dataType:'json',

        }).done(function(data) { 
                //alert(data[0].id + " " +data[0].title+"" + data[0].status);
                var row = '<td>locations</td>';
                var row1 = '<td>breakfast</td>';
                var row2 = '<td>lunch</td>';
                var row3 = '<td>dinner</td>';

              for(var i = 0; i < data.length; i++) {
                row += '<td>'+data[i].name+'</td>';

            }
              for(var i = 0; i < data.length; i++) {
                row1 += '<td>'+data[i].breakfast+'</td>';
                
            }              

            for(var i = 0; i < data.length; i++) {
                row2 += '<td>'+data[i].lunch+'</td>';
                
            }
              for(var i = 0; i < data.length; i++) {
                row3 += '<td>'+data[i].dinner+'</td>';
                
            }

            r = '<tr>' + row + '</tr>';
            r1 = '<tr>' + row1 + '</tr>';
            r2 = '<tr>' + row2 + '</tr>';
            r3 = '<tr>' + row3 + '</tr>';
            $('#tab_content').append(r+r1+r2+r3);
    
        
        

        });
         return false;

});
     

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
                                        <div class="row">
                                            <div class="col-md-3 col-sm-3 col-xs-6">

                                            <div class="week-picker" ></div>
                          
                                             </div>

                                             <div class="col-md-8 col-sm-8 col-xs-12">
                                            {{ Form::open(array('id' => 'add_task','class' => 'form-horizontal')) }}
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sunday</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location1', Location::lists('name', 'id'),'',array('class' => 'form-control','id' => 'loc1')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Monday</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location2', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        </div>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tuesday </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location3', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Wednesday </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location4', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        </div>
                                                    </div>        
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thursday  </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location5', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">friday </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location6', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        </div>
                                                    </div>        
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">satarday </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location7', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        </div>
                                                    </div>        
                                                    <div class="ln_solid"></div>
                                                    <div class="form-group">
                                                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                            {{ Form::submit('Create New Report',array('class' => 'btn btn-success pull-right')) }}
                                                        </div>
                                                    </div>
 

                                                {{ Form::close() }}


                                        </div><!-- /row -->
                                   </div><!-- /x_content -->
                                </div>
                            </div>

                        </div><!-- /end row -->

                        <div class="clearfix"></div>

                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12 animated fadeInDown">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Reports</h2>
                   
                                        <div class="clearfix"></div>
                                    </div>
                                        <div class="x_content">

                                            <table class="table table-striped table-hover table-bordered" id="tab_content">
                                                <thead>
                                                    <tr>
                                                        <th class="col-md-3">#</th>
                                                        <th>Sunday</th>
                                                        <th>Monday</th>
                                                        <th>Tuesday</th>
                                                        <th>Wednesday</th>
                                                        <th>Thursday</th>
                                                        <th>Friday</th>
                                                        <th>Satarday</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th ><br></th>
                                                        <td id="start"></td>
                                                        <td id="mo"></td>
                                                        <td id="tu"></td>
                                                        <td id="we"></td>
                                                        <td id="th"></td>
                                                        <td id="fr"></td>
                                                        <td id="end"></td>
                                                    </tr>


                                                </tbody>
                                            </table>

                                        </div><!-- /x_content -->
                                </div>
                            </div>

                        </div><!-- /end row -->
    

                        <div class="clearfix"></div>

                </div><!--/class-->



@stop