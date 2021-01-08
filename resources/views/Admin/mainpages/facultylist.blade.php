@extends('Admin.mainpages.layouts.layoutmain')

         
@section('content')


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Faculty List</h1>
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
                                        <th>Faculty Name</th>
                                        <th>Faculty Email</th>
                                        <th>Phone</th>
                                        <th>Subject</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                	@if(isset($faculty_data))
                                	  @php
                                	   $i=1;
                                	   @endphp
                                	 @foreach($faculty_data as $fdata)
                                    <tr class="odd gradeX">
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $fdata->faculty_name }}</td>
                                        <td>{{ $fdata->faculty_email }}</td>
                                        <td>{{ $fdata->faculty_no }}</td>
                                        <td>{{ $fdata->subject }}</td>
                                        <td class="center"><a href="/editfaculty/{{$fdata->faculty_id}}">Edit</a>|<a href="">Delete</a></td>
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