<?php

namespace App\Http\Controllers;

use App\Models\Course;

use Illuminate\Http\Request;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('add_course');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Course();
        $data->cshortname = $request->courseshortname;
        $data->cfullname = $request->coursefullname;
        $data->currentdate = $request->currenttime;
        $data->save();
        return back();
    }


    //view all data

    public function showcourse()
    {
        $data = Course::orderBy('id', 'desc')->get();
        return view('view_course', compact('data'));
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
        return view('edit_course', compact('data'));
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
        $data = Course::findOrFail($id);

        $data->cshortname = $request->courseshortname;
        $data->cfullname = $request->coursefullname;
        $data->currentdate = $request->currenttime;

        $data->save();
        return redirect()->route('allcourse');
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
