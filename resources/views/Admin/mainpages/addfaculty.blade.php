@extends('Admin.mainpages.layouts.layoutmain')

         
@section('content')
        <div id="page-wrapper">
                       <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Add Faculty Details</h1>
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
                                    <form role="form" method="post" action="{{route('addfacultysubmit')}}">

                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Faculty Name</label>
                                            <input class="form-control" type="text" name="faculty_name">        
                                        </div>
                                         <div class="form-group">
                                            <label>Faculty Email</label>
                                            <input type="email"  class="form-control" rows="3" name="faculty_email"></textarea>        
                                        </div>
                                         <div class="form-group">Faculty Ph no.</label>
                                            <input class="form-control" type="number" name="faculty_no">        
                                        </div>
                                         <div class="form-group">
                                            <label>Faculty's Subject name</label>
                                            <input class="form-control" type="text" name="subject"  >        
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
