<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class registrationController extends Controller
{

    public function viewregform()
    {
        $data = Course::get();
        return view('Register.registration_student', compact('data'));
    }
    public function register(Request $request)
    {
        return $request->input();
    }
}
