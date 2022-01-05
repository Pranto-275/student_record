<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Helpers\Helper;

class registrationController extends Controller
{

    public function viewregform()
    {
        $data = Course::get();
        return view('Register.registration_student', compact('data'));
    }
    public function register(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'mname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'guardianame' => 'required',
            'occupation' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            'paddress' => 'required',
            'peraddress' => 'required',
        ]);


        $data = new Student();
        $data->course_id = $request->course_id;
        $student_id = Helper::IDGenerator($data, 'student_id', 4, 'STU');
        $data->student_id = $student_id;
        $data->fname = $request->fname;
        $data->mname = $request->mname;
        $data->lname = $request->lname;
        $data->gender = $request->gender;
        $data->g_name = $request->guardianame;
        $data->occupation = $request->occupation;
        $data->phone = $request->phone;
        $data->email_id = $request->email;
        $data->p_address = $request->paddress;
        $data->per_address = $request->peraddress;

        $data->save();

        return back();
    }
}
