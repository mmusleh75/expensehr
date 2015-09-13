@extends('layouts.main')

@section('content')
                <div class="">

                    <div class="page-title">
                        <div class="title_left">
                            <h3>My Profile</h3>
                        </div>

                        <div class="title_right">
                            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                <br><br>
                            </div>
                        </div>
                    </div><!-- /page-title -->

                    <div class="clearfix"></div>

                    <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Profile</h2>

                                    <div class="clearfix"></div>
                                </div><!-- /x_title -->
                                
                                <div class="x_content">
                                  <div class="row">

                                        <div class="col-md-3 col-sm-3 col-xs-10 animated fadeInDown ">
                                            <div class="well profile_view">
                                                <div class="col-sm-12">                                                 
                                                    <div class="right  col-xs-12 text-center ">
                                                        {{ HTML::image( $user->profile->avatar,'',array('class' => 'profiles')) }}
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 bottom text-center">
                                                    
                                                    <div class="col-xs-12 col-sm-12 emphasis">


                                                        <!-- Button trigger modal -->
                                                        <button type="button" class="btn btn-success btn-xs" data-toggle="modal" data-target="#myModal">
                                                          Edit
                                                        </button>


                                                        <button type="button" class="btn btn-danger btn-xs"> <i class="fa fa-user">
                                                        </i> Delete </button>

                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--end col-->
  
                                   <!-- Modal -->
                                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                          
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                <h4 class="modal-title" id="myModalLabel">Edit Your Image</h4>
                                              </div>

                                              <div class="modal-body">
                                                
                                                <div class="img-upload">
                                                    <div class="img-preview">
                                                    {{ HTML::image( $user->profile->avatar) }}
                                                    </div>
                                                    <div class="upload-msg"></div>
                                                </div>

                                              </div>
                                              <div class="modal-footer">
                                                {{ Form::open(array('url' =>'edit/avatar','files' => 'true','method' => 'POST', 'class' => 'frmUpload')) }}
                                                    <div class="fileUpload btn btn-primary">
                                                        {{  Form::label('Choose Your Image') }}
                                                        {{  Form::hidden('id', $user->id) }}
                                                        {{  Form::file('userImage',array('id' => 'userImage','class' => 'upload')) }}
                                                    </div>
                                                        {{ Form::submit('Upload', array('class' => 'btn btn-success')) }}
                                                {{ Form::close() }}
                                              </div>
                                            </div>
                                          </div>
                                    </div><!-- /Modal -->


                                        <div class="col-md-9 col-sm-9 col-xs-10 animated fadeInDown ">
                                   
                                            <div class="x_panel">
                                                <div class="x_title">
                                                    <h2>Personal Information</h2>
                                                        <a href="{{ URL::to('profile/edit') }}" class="btn btn-success pull-right"><i class="fa fa-edit"></i> Edit Profile</a>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="x_content">
                                                    <table class="table table-hover">
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row" style="border:0">Full Name</th>
                                                                <td style="border:0"> {{ $user->full_name }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">User Name</th>
                                                                <td style="border:0"> {{ $user->username }}</td>
                                                            </tr>                                                            
                                                            <tr>
                                                                <th scope="row" >Role</th>
                                                                <td>
                                                                    @foreach($user->roles as $role)
                                                                        <span class='label label-default'>{{ $role->name }}</span>
                                                                    @endforeach
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row" >E-mail</th>
                                                                <td>{{ $user->email }}</td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">Location</th>
                                                                <td>{{ $user->profile->location }}</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                            </div>

                                        </div><!--End col-->
                                </div><!-- /x_content -->

                            </div><!-- /x_panel -->
                        </div><!-- /col -->
                    </div><!-- /row -->
                
                </div><!--/class-->

@stop