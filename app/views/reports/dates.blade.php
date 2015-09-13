@extends('layouts.main')

@section('content')
<link href="css/weekpicker/weekpicker.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
<script src="js/jquery.weekpicker.js" ></script>

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
                                            {{ Form::open(['url' =>'reports/store', 'method' =>'post', 'class' => 'form-horizontal']) }}
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Sunday</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location1', Location::lists('name', 'id'),'',array('class' => 'form-control','id' => 'loc1')) }}
                                                        {{ Form::hidden('time1','',array('id' => 'startDate')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Monday</label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location2', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        {{ Form::hidden('time2','',array('id' => 'mon')) }}
                                                        </div>
                                                    </div>                                                    
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Tuesday </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location3', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        {{ Form::hidden('time3','',array('id' => 'tus')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Wednesday </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location4', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        {{ Form::hidden('time4','',array('id' => 'wen')) }}
                                                        </div>
                                                    </div>        
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Thursday  </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location5', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        {{ Form::hidden('time5','',array('id' => 'the')) }}
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">friday </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location6', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        {{ Form::hidden('time6','',array('id' => 'fri')) }}
                                                        </div>
                                                    </div>        
                                                    <div class="form-group">
                                                        <label class="control-label col-md-3 col-sm-3 col-xs-12">satarday </label>
                                                        <div class="col-md-9 col-sm-9 col-xs-12">
                                                        {{ Form::select('location7', Location::lists('name', 'id'),'',array('class' => 'form-control')) }}
                                                        {{ Form::hidden('time7','',array('id' => 'endDate')) }}
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

                </div><!--/class-->



@stop