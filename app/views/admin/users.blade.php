@extends('layouts.main')

@section('content')

    {{ HTML::style('css/datatables/tools/css/dataTables.tableTools.css') }}
    {{ HTML::style('css/icheck/flat/green.css') }}


                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>
                                    Users
                    
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
                                        <h2>Daily active users</h2>
                   
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                                            <thead>
                                                <tr class="headings">
                                                    <th>
                                                    </th>
                                                    <th>User Name </th>
                                                    <th>First Name </th>
                                                    <th>Last Name </th>
                                                    <th>E mail </th>
                                                    <th>Roles </th>

                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach($users as $user)
                                                <tr class="even pointer">
                                                    <td class="a-center ">
                                                    </td>
                                                    <td class=" ">{{ $user->username }}</td>
                                                    <td class=" ">{{ $user->profile->first_name }}</td>
                                                    <td class=" ">{{ $user->profile->last_name }}
                                                    </td>
                                                    <td class=" ">{{ $user->email }}</td>
                                                    <td class=" ">@foreach($user->roles as $role) <span class='label label-default'>{{ $role->name }}</span> @endforeach</td>
                                               
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

                            <div class="col-md-6 col-sm-6 col-xs-6 animated fadeInDown">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Assign Users Roles</h2>
                                  
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Users</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::select('user_id', $users_list, 'Select User',array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Roles</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::select('roles[]', $roles_list, '' , array('multiple','class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success pull-right">Assign Users Roles</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 col-xs-6 animated fadeInDown">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Ban Users Accounts</h2>
                                  
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left">
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Users</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::select('user_id', $users_list, 'Select User',array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                               
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success pull-right">Ban User Account</button>
                                            </div>
                                        </div>

                                    </form>
                                </div>
                   
                                </div>

                            </div>


                        </div><!-- /second row -->

                        <div class="clearfix"></div>

             
                </div><!--/class-->



        {{ HTML::script('js/datatables/js/jquery.dataTables.js') }}
        {{ HTML::script('js/datatables/tools/js/dataTables.tableTools.js') }}
        {{ HTML::script('js/table.js') }}




@stop