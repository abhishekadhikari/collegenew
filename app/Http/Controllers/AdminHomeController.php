<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\coursemasters;

class AdminHomeController extends Controller /* insert*/
{
    public function coursedetailssubmit(Request $request){
    	$request->validate([
    'course_name' => 'required',
    'course_desc' => 'required',
       ]);

       $course_data = new coursemasters;

        $course_data->course_name = $request->course_name;
        $course_data->course_desc =$request->course_desc;
        $course_data->course_hod = $request->course_hod;
        $course_data->course_seats =$request->course_seats;
        $course_data->course_duration = $request->course_duration;
        $course_data->course_fees =$request->course_fees;

        if($course_data->save()){

        	$msg="Data inserted successfully";

        	return redirect('/addcourseshow')->with(['msg'=>$msg]);
        }





    }

    public function getcoursedetailsbyid($id){

        $course_details=coursemasters::where('course_id',$id)->get();
        return view('Admin.mainpages.editcoursepage',['course_data'=>$course_details]);



    }

    public function updatecoursedetails(Request $request){
        $request->validate([
    'course_name' => 'required',
    'course_desc' => 'required',
       ]);

        $course_id=$request->hidden_course_id;
        $course_name =$request->course_name;
        $course_desc =$request->course_desc;
        $course_hod =$request->course_hod;
        $course_seats =$request->course_seats;
        $course_duration =$request->course_duration;
        $course_fees =$request->course_fees;

        $course_det= coursemasters::where('course_id', $course_id)
          ->update(['course_name'=>$course_name,'course_desc'=> $course_desc,'course_hod'=> $course_hod,'course_seats'=>$course_seats,'course_duration'=>$course_duration,'course_fees'=>$course_fees]);
          if($course_det){
            $msg="Data updated successfully";

          return redirect('/editcourse/'.$course_id)->with(['msg'=>$msg]);

          }


    }


}
