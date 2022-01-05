@extends('layout.master')

@section('title')
Registration Student
@endsection
@section('content')

<h4 class="mb-1">WELCOME ADMIN</h4>
<hr>


<form action="{{ route('reg.form') }}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header text-center">
            <h4> Registration Student</h4>

        </div>
        <div class="card-body text-dark">

            <div class="mb-3 row">
<<<<<<< HEAD
                <label class="col-sm-3 col-form-label">Course Short Name</label>
                <div class="col-sm-9">
                    <select name="" id="" class="form-control coursecategory" id="course_id">
                      @foreach ($data as $item)
                      <option value="{{ $item->id }}">{{ $item->cshortname }}</option>

=======
                <label class="col-sm-3 col-form-label">CourseName</label>
                <div class="col-sm-9">
                    <select name="course_id" class="form-control" >
                      @foreach ($data as $item)
                      <option value="{{ $item->id }}">{{ $item->cshortname }}</option>
>>>>>>> adminpanel
                      @endforeach
                   </select>
                </div>
            </div>
<<<<<<< HEAD
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Select Subject</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control allcourses" value="{{ $item->subject1 }} + {{ $item->subject2 }}{{ $item->subject3 }}">
                </div>
            </div>
            <div class="mb-3 row">
=======

            {{-- <div class="mb-3 row">
>>>>>>> adminpanel
                <label class="col-sm-3 col-form-label">Current Session</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="2022-2023">
                </div>
<<<<<<< HEAD
            </div>
=======
            </div> --}}
>>>>>>> adminpanel

        </div>
    </div>

    <!-- Personal info -->

    <div class="card mt-5">
        <div class="card-header text-center">
            <h4> Personal Info</h4>

        </div>
        <div class="card-body text-dark">

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="">First name</label>
                </div>
                <div class="col-md-4">
<<<<<<< HEAD
                    <input type="text" class="form-control form-control-sm" name="fname">
=======
                    <input type="text" class="form-control form-control-sm" name="fname" value="{{ old("fname") }}">
                    <span style="color: red">
                        @error('fname')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>
                <div class="col-md-2">
                    <label for="">Middle name</label>
                </div>
                <div class="col-md-4">
<<<<<<< HEAD
                    <input type="text" class="form-control form-control-sm" name="mname">
=======
                    <input type="text" class="form-control form-control-sm" name="mname" value="{{ old("mname") }}">
                    <span style="color: red">
                        @error('mname')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="">last name</label>
                </div>
                <div class="col-md-4">
<<<<<<< HEAD
                    <input type="text" class="form-control form-control-sm" name="lname">
=======
                    <input type="text" class="form-control form-control-sm" name="lname" value="{{ old("lname") }}">
                    <span style="color: red">
                        @error('lname')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>

                <div class="col-md-2">
                    <label for="">Gender</label>
                </div>
                <div class="col-md-4">
                    <div class="form-check form-check-inline">
<<<<<<< HEAD
                        <input class="form-check-input" type="radio"  name="male"  value="male">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="female"  value="female">
                        <label class="form-check-label" for="inlineRadio1">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="other"  value="other">
                        <label class="form-check-label" for="inlineRadio1">Other</label>
                    </div>
=======
                        <input class="form-check-input" type="radio"  name="gender"  value="male" value="{{ old("male") }}">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender"  value="female" value="{{ old("female") }}">
                        <label class="form-check-label" for="inlineRadio1">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender"  value="other" value="{{ old("other") }}">
                        <label class="form-check-label" for="inlineRadio1">Other</label>
                    </div>
                    <span style="color: red">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="">Guardian name</label>
                </div>
                <div class="col-md-4">
<<<<<<< HEAD
                    <input type="text" class="form-control form-control-sm" name="guardianame">
=======
                    <input type="text" class="form-control form-control-sm" name="guardianame" value="{{ old("guardianame") }}">
                    <span style="color: red">
                        @error('guardianame')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>
                <div class="col-md-2">
                    <label for="">Occupation</label>
                </div>
                <div class="col-md-4">
<<<<<<< HEAD
                    <input type="text" class="form-control form-control-sm" name="occupation">
=======
                    <input type="text" class="form-control form-control-sm" name="occupation" value="{{ old("occupation") }}">
                    <span style="color: red">
                        @error('occupation')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col-md-2">
                    <label for="">Phone Number</label>
                </div>
                <div class="col-md-4">
<<<<<<< HEAD
                    <input type="text" class="form-control form-control-sm" name="phone">
=======
                    <input type="text" class="form-control form-control-sm" name="phone" value="{{ old("phone") }}">
                    <span style="color: red">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>
                <div class="col-md-2 ">
                    <label for="">Email Id</label>
                </div>
                <div class="col-md-4 ">
<<<<<<< HEAD
                    <input type="text" class="form-control form-control-sm"name="email">
=======
                    <input type="text" class="form-control form-control-sm"name="email" value="{{ old("email") }}">
                    <span style="color: red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col-md-2">
                    <label for="">Present Address</label>
                </div>
                <div class="col-md-4 ">
<<<<<<< HEAD
                    <input type="text" class="form-control form-control-sm" name="paddress">
=======
                    <input type="text" class="form-control form-control-sm" name="paddress" value="{{ old("paddress") }}">
                    <span style="color: red">
                        @error('paddress')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>
                <div class="col-md-2">
                    <label for="">Permanent Address</label>
                </div>
                <div class="col-md-4">
<<<<<<< HEAD
                    <input type="text" class="form-control form-control-sm" name="peraddress">
=======
                    <input type="text" class="form-control form-control-sm" name="peraddress" value="{{ old("peraddress") }}">
                    <span style="color: red">
                        @error('peraddress')
                            {{ $message }}
                        @enderror
                    </span>
>>>>>>> adminpanel
                </div>
            </div>


        </div>
    </div>



    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>


</form>
@endsection
<<<<<<< HEAD

@section('script')
<script>



</script>
@endsection
=======
>>>>>>> adminpanel
