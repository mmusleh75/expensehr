@extends('layouts.main')

@section('content')
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Permissions</h3>
                        </div>


                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <br><br>
                            </div>
                        </div>
                    </div><!-- /page-title -->

                    <div class="clearfix"></div>


                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12 animated fadeInDown">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Add New Permission</h2>
                                  
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="x_content">
                                    <br />
                                            {{ Form::model($permission, ['route'=> ['admin.permissions.update', $permission->id], 'method' => 'PUT', 'data-parsley-validate class' => 'form-horizontal']) }}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Permission Name</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::text('name', $permission->name,array('data-parsley-trigger' => 'change','required','class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Permission description</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::text('description', $permission->description,array('data-parsley-trigger' => 'change','required','class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                {{ Form::submit('Save New Permission',array('class' => 'btn btn-success pull-right')) }}
                                            </div>
                                        </div>

                                    {{ Form::close() }}
                                </div>

                                </div>
                            </div>

                        </div><!-- /second row -->
                </div><!--/class-->

@stop