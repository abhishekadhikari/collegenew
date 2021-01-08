@extends('Admin.mainpages.layouts.layoutmain')

         
@section('content')


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Courses List</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Sl no.</th>
                                        <th>Course Name</th>
                                        <th>Course Description</th>
                                        <th>Course HOD</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                	@if(isset($course_data))
                                	  @php
                                	   $i=1;
                                	   @endphp
                                	 @foreach($course_data as $data)
                                    <tr class="odd gradeX">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $data->course_name }}</td>
                                        <td>{{ $data->course_desc }}</td>
                                        <td class="center">{{ $data->course_hod }}</td>
                                        <td class="center"><a href="/editcourse/{{$data->course_id}}">Edit</a>|<a href="">Delete</a></td>
                                    </tr>
                                     
                                     @endforeach
                                    @endif
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

             </div>
        <!-- /#page-wrapper -->




 </div>

    @stop