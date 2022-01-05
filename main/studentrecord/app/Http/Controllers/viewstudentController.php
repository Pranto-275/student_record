<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class viewstudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = Student::with('course')->get();


        return view('view_students', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Student::findOrFail($id);

        $course = Course::get();
        return view('Register.edit_student', compact('data', 'course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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


        $data = Student::findOrFail($id);
        $data->course_id = $request->course_id;
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
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Student::where('id', $id)->delete();
        return back();
    }
}
