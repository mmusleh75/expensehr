@extends('layouts.main')

@section('content')

    {{ HTML::style('css/datatables/tools/css/dataTables.tableTools.css') }}
    {{ HTML::style('css/icheck/flat/green.css') }}


                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>
                                    Locations
                    
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
                                        <h2>Locations</h2>
                   
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                                            <thead>
                                                <tr class="headings">
                                                    <th>
                                                    </th>
                                                    <th>Locations Name </th>
                                                    <th>Breakfast </th>
                                                    <th>Lunch </th>
                                                    <th>Dinner </th>
                                                    <th class="col-md-3">Actions </th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($locations as $location)
                                                <tr class="even pointer">
                                                    <td class="a-center ">
                                                    </td>
                                                    <td class=" ">{{ $location->name }}</td>
                                                    <td class=" ">{{ $location->breakfast }}</td>
                                                    <td class=" ">{{ $location->lunch }}
                                                    </td>
                                                    <td class=" ">{{ $location->dinner }}</td>
                                                    <td class="col-md-3">
                                                        <button class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</button>
                                                    </td>
                                               
                                                </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                </div>
                            </div>

                            <br />
                            <br />
                            <br />

                        </div>
      
                        <div class="clearfix"></div>


                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12 animated fadeInDown">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Add New Locations</h2>
                   
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        {{ Form::open(['route' => 'admin.locations.store', 'method' =>'post', 'class' => 'form-horizontal']) }}
                                                <div class="form-group">
                                                    {{ Form::label('Location','Location *',array('class' => 'control-label col-md-2 col-sm-2 col-xs-12')) }}
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                    {{ Form::text('name','',array('data-parsley-trigger' => 'change','class' => 'text-center form-control','id' => 'first-name','required')) }}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('Breakfast','Breakfast *',array('class' => 'control-label col-md-2 col-sm-2 col-xs-12')) }}
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            {{ Form::text('breakfast','',array('required','data-parsley-trigger' => 'change' ,'data-parsley-type' => 'number','aria-label' => 'Amount (to the nearest dollar)','class' => 'text-center form-control' )) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="clearfix"></div>
                                                
                                                <div class="form-group">
                                                    {{ Form::label('Lunch','Lunch *',array('class' => 'control-label col-md-2 col-sm-2 col-xs-12')) }}
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            {{ Form::text('lunch','',array('required','data-parsley-trigger' => 'change' ,'data-parsley-type' => 'number','aria-label' => 'Amount (to the nearest dollar)','class' => 'text-center form-control','id' => 'first-name')) }}
                                                        </div>
                                                    </div>
                                                </div>

                                                    
                                                 <div class="clearfix"></div>

                                                <div class="form-group">
                                                    {{ Form::label('Dinner','Dinner *',array('class' => 'control-label col-md-2 col-sm-2 col-xs-12')) }}
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            {{ Form::text('dinner','',array('required','data-parsley-trigger' => 'change' ,'data-parsley-type' => 'number','aria-label' => 'Amount (to the nearest dollar)','class' => 'text-center form-control','id' => 'first-name')) }}
                                                        </div>
                                                    </div>
                                                </div>

                                                 <div class="clearfix"></div>
                                                 <div class="ln_solid"></div>

                                             {{ Form::submit('Add New Location',array('class' => 'btn btn-success pull-right')) }}
                                         {{ Form::close() }}
                                    </div><!-- /x_content -->
                                </div><!-- /x_panel -->
                            </div><!-- /col -->
                        </div><!-- /end row -->

                            <br />
                            <br />
                            <br />


                </div><!--/class-->

        <script type="text/javascript" src="js/parsley/parsley.min.js"></script>


        {{ HTML::script('js/datatables/js/jquery.dataTables.js') }}
        {{ HTML::script('js/datatables/tools/js/dataTables.tableTools.js') }}
        {{ HTML::script('js/parsley/parsley.min.js') }}
        {{ HTML::script('js/table.js') }}




@stop