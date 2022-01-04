<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class subjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Course::orderBy('id', 'desc')->get();


        return view('Subject.view_subject', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Course::get();
        return view('Subject.add_subject', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'subject1' => 'required',
            'subject2' => 'required',
            'subject3' => 'required'
        ]);

        $data1 = Course::where('cshortname', $request->cshortname)->first();
        $data2 = Course::where('cfullname', $request->cfullname)->first();

        $id1 = $data1->id;
        $id2 = $data2->id;


        if ($id1 == $id2) {
            if ($data1->subject1 == null &&  $data1->subject1 == null &&  $data1->subject1 == null) {
                $data1->subject1 = $request->subject1;
                $data1->subject2 = $request->subject2;
                $data1->subject3 = $request->subject3;
                $data1->save();
            }
        }

        return back();
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
        $data = Course::findOrFail($id);
        return view('Subject.edit_subject', compact('data'));
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
            'subject1' => 'required',
            'subject2' => 'required',
            'subject3' => 'required'
        ]);



        $data = Course::findOrFail($id);


        $data->subject1 = $request->subject1;
        $data->subject2 = $request->subject2;
        $data->subject3 = $request->subject3;
        $data->save();

        return redirect()->route('subject.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Course::where('id', $id)->delete();
        return back();
    }
}
