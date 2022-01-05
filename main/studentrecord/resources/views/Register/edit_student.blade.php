@extends('layout.master')

@section('title')
Registration Student
@endsection
@section('content')

<h4 class="mb-1">WELCOME ADMIN</h4>
<hr>


<form action="{{ route('student.update',$data->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="card">
        <div class="card-header text-center">
            <h4> Edit Student</h4>

        </div>
        <div class="card-body text-dark">

            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">CourseName</label>
                <div class="col-sm-9">
                    <select name="course_id" class="form-control" >
                      @foreach ($course as $item)
                      <option value="{{ $item->id }}">{{ $item->cshortname }}</option>
                      @endforeach
                   </select>
                </div>
            </div>

            {{-- <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Current Session</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" value="2022-2023">
                </div>
            </div> --}}

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
                    <input type="text" class="form-control form-control-sm" name="fname" value="{{ $data->fname }}">
                    <span style="color: red">
                        @error('fname')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-2">
                    <label for="">Middle name</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-sm" name="mname" value="{{ $data->mname }}">
                    <span style="color: red">
                        @error('mname')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="">last name</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-sm" name="lname"  value="{{ $data->lname }}">
                    <span style="color: red">
                        @error('lname')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

                <div class="col-md-2">
                    <label for="">Gender</label>
                </div>
                <div class="col-md-4">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio"  name="gender"  value="{{ $data->gender }}">
                        <label class="form-check-label" for="inlineRadio1">Male</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender"  value="{{ $data->gender }}">
                        <label class="form-check-label" for="inlineRadio1">Female</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender"  value="{{ $data->gender }}">
                        <label class="form-check-label" for="inlineRadio1">Other</label>
                    </div>
                    <span style="color: red">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="">Guardian name</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-sm" name="guardianame" value="{{ $data->g_name }}">
                    <span style="color: red">
                        @error('guardianame')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-2">
                    <label for="">Occupation</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-sm" name="occupation" value="{{ $data->occupation }}">
                    <span style="color: red">
                        @error('occupation')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col-md-2">
                    <label for="">Phone Number</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-sm" name="phone" value="{{ $data->phone }}">
                    <span style="color: red">
                        @error('phone')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-2 ">
                    <label for="">Email Id</label>
                </div>
                <div class="col-md-4 ">
                    <input type="text" class="form-control form-control-sm"name="email" value="{{ $data->email_id }}">
                    <span style="color: red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="row mt-3 ">
                <div class="col-md-2">
                    <label for="">Present Address</label>
                </div>
                <div class="col-md-4 ">
                    <input type="text" class="form-control form-control-sm" name="paddress" value="{{ $data->p_address }}">
                    <span style="color: red">
                        @error('paddress')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col-md-2">
                    <label for="">Permanent Address</label>
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control form-control-sm" name="peraddress" value="{{ $data->per_address }}">
                    <span style="color: red">
                        @error('peraddress')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>


        </div>
    </div>



    <div class="text-center mt-3">
        <button type="submit" class="btn btn-primary">Update Info</button>
    </div>


</form>
@endsection

