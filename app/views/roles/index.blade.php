@extends('layouts.main')

@section('content')
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>Roles</h3>
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
                                    <h2>Roles</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table class="table table-bordered table-hover  table-striped">
                                        <thead>
                                            <tr>
                                                <th class="col-md-2">Name</th>
                                                <th>Permissions</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                @forelse($roles as $role)
                                            <tr>
                                                <td>{{ $role->name }}</td>
                            <td>
                           @forelse($role->permissions as $permission)
                                <span class="label label-default">{{ $permission->name }}</span>

                            @empty
                            <p class="text-muted">Role has no associated Permissions</p></td>
                            @endforelse
                                                <td class="col-md-2">
                                                    <button class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit</button>
                                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Delete</button>
                                                </td>
                                            </tr>
                @empty
                    <p class="text-muted">Get started by creating a new Role</p>
                        @endforelse

                                        </tbody>
                                    </table>

                                </div>
                            </div><!-- /x_panel -->
                        </div><!-- /col -->
                    </div><!-- /row -->


                        <div class="row">

                            <div class="col-md-12 col-sm-12 col-xs-12 animated fadeInDown">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Add New Role</h2>
                                  
                                        <div class="clearfix"></div>
                                    </div>
                                    
                                    <div class="x_content">
                                    <br />
                                    {{ Form::open(['route' => 'admin.roles.store', 'method' =>'post', 'class' => 'form-horizontal']) }}
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Roles</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::text('name', '',array('class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Permissions</label>
                                            <div class="col-md-9 col-sm-9 col-xs-12">
                                            {{ Form::select('permissions[]', Permission::lists('name', 'id'), ['2'], array('multiple','class' => 'form-control')) }}
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-success pull-right">Assign Users Roles</button>
                                            </div>
                                        </div>

                                    {{ Form::close() }}
                                </div>

                                </div>
                            </div>

                        </div><!-- /second row -->
                </div><!--/class-->

@stop