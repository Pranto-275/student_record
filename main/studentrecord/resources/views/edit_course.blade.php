@extends('layout.master')

@section('title')
Add Course
@endsection
@section('content')

<h4 class="mb-1">WELCOME ADMIN</h4>
<hr>

<div class="card">
    <div class="card-header text-center">
        <h4> Edit Course</h4>

    </div>
    <div class="card-body text-dark">
        <form action="{{route('course.update',$data->id) }}" method="POST">

            @csrf
            @method("PUT")
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Course Short Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="courseshortname" value="{{ $data->cshortname }}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Course Full Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="coursefullname" value="{{$data->cfullname}}">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Creation Date</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="02-01-2022" name="currenttime" value="{{ $data->currentdate }}" >
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Course</button>
            </div>


        </form>
    </div>
</div>



@endsection
