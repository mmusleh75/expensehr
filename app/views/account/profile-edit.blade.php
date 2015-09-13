@extends('layouts.main')

@section('content')

                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>
                                    Edit Profile
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

                            <div class="col-md-6 col-sm-6 col-xs-6 animated fadeInDown ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Personal Information</h2>
                                  
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="x_content">
                                    <br />
                                    {{ Form::open(array('url' => 'profile/personal-info','class' => 'form-horizontal form-label-left' )) }}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">First Name</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::text('first_name', $user->profile->first_name,array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Last Name</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::text('last_name', $user->profile->last_name,array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Location</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::text('location', $user->profile->location,array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                           {{ Form::submit('Save Personal Info',array('class' => 'btn btn-success pull-right')) }}
                                            </div>
                                        </div>
                                    {{ Form::close() }}
                                </div>

                                </div>
                            </div>


                            <div class="col-md-6 col-sm-6 col-xs-6 animated fadeInDown ">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Account Information</h2>
                                  
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="x_content">
                                    <br />
                                    {{ Form::open(array('url' => 'profile/account-info','class' => 'form-horizontal form-label-left' )) }}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">User Name</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::text('username', $user->username,array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">E-mail</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::text('email', $user->email,array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                        
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                           {{ Form::submit('Save Account Info',array('class' => 'btn btn-success pull-right')) }}
                                            </div>
                                        </div>
                                    {{ Form::close() }}
                                </div>

                                </div>
                            </div>

                        </div><!-- /second row -->

                        <div class="clearfix"></div>

             
                </div><!--/class-->


@stop