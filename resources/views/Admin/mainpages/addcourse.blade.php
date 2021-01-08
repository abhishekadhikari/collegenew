@extends('Admin.mainpages.layouts.layoutmain')

         
@section('content')
        <div id="page-wrapper">
                       <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Courses</h1>
                </div>
                <!-- /.col-lg-12 -->
                <span style="color:green">
                @if(Session::has('msg'))

                    {{ Session::get('msg') }}

                  @endif

                @if ($errors->any())
            </span>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="{{route('addcoursesubmit')}}">

                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Course Name</label>
                                            <input class="form-control" type="text" name="course_name">        
                                        </div>
                                         <div class="form-group">
                                            <label>Course Description</label>
                                            <textarea class="form-control" rows="3" name="course_desc"></textarea>        
                                        </div>
                                         <div class="form-group">
                                            <label>Course HOD(Head of Department)</label>
                                            <input class="form-control" type="text" name="course_hod">        
                                        </div>
                                         <div class="form-group">
                                            <label>Course Seats</label>
                                            <input class="form-control" type="number" name="course_seats" value="0" >        
                                        </div>
                                        <div class="form-group">
                                            <label>Course duration(in years)</label>
                                            <input class="form-control" type="number" name="course_duration" value="0">        
                                        </div>
                                        <div class="form-group">
                                            <label>Course Fees</label>
                                            <input class="form-control" type="text" name="course_fees">        
                                        </div>
                                        <input class="form-control btn btn-success" type="submit" name="sub">
                                      
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
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
    <!-- /#wrapper -->

    @stop
