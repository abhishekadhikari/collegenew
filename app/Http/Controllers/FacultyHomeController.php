<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Session;
use App\facultymasters;

class FacultyHomeController extends Controller
{
    public function facultydetailssubmit(Request $request){
    	$request->validate([
    'faculty_name' => 'required',
    'faculty_no' => 'required',
       ]);

       $faculty_data = new facultymasters;

        $faculty_data->faculty_name =$request->faculty_name;
         $faculty_data->faculty_email =$request->faculty_email;
          $faculty_data->faculty_no =$request->faculty_no;
           $faculty_data->subject =$request->subject;
           
        if($faculty_data->save()){

        	$msg="Data inserted successfully";

        	return redirect('/addfacultyshow')->with(['msg'=>$msg]);
        }





    }

    public function getfacultydetailsbyid($id){

        $faculty_details=facultymasters::where('faculty_id',$id)->get();
        return view('Admin.mainpages.editfacultypage',['faculty_data'=>$faculty_details]);



    }
}
