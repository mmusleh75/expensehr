@extends('layouts.main')

@section('content')

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
                    <a href="{{ URL::to('addReport') }}" class="btn btn-success">Create New Report</a>
                        <div class="x_content">

                        <table id="example" class="table table-striped responsive-utilities jambo_table">
                            <thead>
                                <tr class="headings">
                                    <th>
                                    </th>
                                    <th>Reports Name </th>
                                    <th>Actions </th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach($reports as $report)
                                <tr class="even pointer">
                                    <td class="a-center ">
                                    </td>
                                    <td class=" ">{{ $report->name }}</td>
                                    </td>
                                    <td class="col-md-2">
                                       <a   href="{{ route('reports.edit',$report->id) }}" class="btn btn-info btn-xs pull-left"><i class="fa fa-pencil"></i> edit</a>
                                       <a   href="{{ route('reports.show',$report->id) }}" class="btn btn-info btn-xs pull-left"><i class="fa fa-pencil"></i> View</a>
                                  
                                        {{ Form::open(['onclick' => 'return confirm("Are you sure to delete this Report?");','method' => 'DELETE','route' => ['reports.destroy', $report->id]]) }}
                                            <button class="btn btn-danger  btn-xs"><i class="fa fa-trash-o"></i>Delete</button>
                                        {{ Form::close() }}
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>

                        </div><!-- /x_content -->
                </div>
            </div>

        </div><!-- /end row -->

        <div class="clearfix"></div>

</div><!--/class-->



@stop