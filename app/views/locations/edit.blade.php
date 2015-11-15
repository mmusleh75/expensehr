@extends('layouts.main')

@section('content')



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
                                        <h2>Edit Location <span style="color:green"> {{ $location->name }}</span> </h2>
                   
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                            {{ Form::model($location, ['route'=> ['admin.locations.update', $location->id], 'method' => 'PUT', 'data-parsley-validate class' => 'form-horizontal']) }}
                                                {{ Form::token() }}
                                                <div class="form-group">
                                                    {{ Form::label('Location','Location *',array('class' => 'control-label col-md-2 col-sm-2 col-xs-12')) }}
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                    {{ Form::text('name',$location->name,array('data-parsley-trigger' => 'change','class' => 'text-center form-control','id' => 'first-name','required')) }}
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    {{ Form::label('Breakfast','Breakfast *',array('class' => 'control-label col-md-2 col-sm-2 col-xs-12')) }}
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            {{ Form::text('breakfast',$location->breakfast,array('required','data-parsley-trigger' => 'change' ,'data-parsley-type' => 'number','aria-label' => 'Amount (to the nearest dollar)','class' => 'text-center form-control' )) }}
                                                        </div>
                                                    </div>
                                                </div>
                                                 <div class="clearfix"></div>
                                                
                                                <div class="form-group">
                                                    {{ Form::label('Lunch','Lunch *',array('class' => 'control-label col-md-2 col-sm-2 col-xs-12')) }}
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            {{ Form::text('lunch',$location->lunch,array('required','data-parsley-trigger' => 'change' ,'data-parsley-type' => 'number','aria-label' => 'Amount (to the nearest dollar)','class' => 'text-center form-control','id' => 'first-name')) }}
                                                        </div>
                                                    </div>
                                                </div>

                                                    
                                                 <div class="clearfix"></div>

                                                <div class="form-group">
                                                    {{ Form::label('Dinner','Dinner *',array('class' => 'control-label col-md-2 col-sm-2 col-xs-12')) }}
                                                    <div class="col-md-10 col-sm-10 col-xs-12">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">$</span>
                                                            {{ Form::text('dinner',$location->dinner,array('required','data-parsley-trigger' => 'change' ,'data-parsley-type' => 'number','aria-label' => 'Amount (to the nearest dollar)','class' => 'text-center form-control','id' => 'first-name')) }}
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



        {{ HTML::script('js/datatables/js/jquery.dataTables.js') }}
        {{ HTML::script('js/datatables/tools/js/dataTables.tableTools.js') }}
        {{ HTML::script('js/parsley/parsley.min.js') }}
        {{ HTML::script('js/table.js') }}




@stop