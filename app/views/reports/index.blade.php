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
                        <a href="{{ URL::to('create/report') }}" class="btn btn-success">Create New Report</a>
                                        <div class="x_content">

                                            <table class="table table-striped table-hover table-bordered">
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
                                                    <tr>
                                                        <th >Locations</th>
                                                        <td id="lo"></td>
                                                        <td id="loc2"></td>
                                                        <td id="loc3"></td>
                                                        <td id="loc4"></td>
                                                        <td id="loc5"></td>
                                                        <td id="loc6"></td>
                                                        <td id="loc7"></td>
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