@extends('layout.master')

@section('title')
Add Subject
@endsection
@section('content')

<h4 class="mb-1">WELCOME ADMIN</h4>
<hr>

<div class="card">
    <div class="card-header text-center">
        <h4> Add Subject</h4>

    </div>
    <div class="card-body text-dark">
        <form action="{{ route('subject.store') }}" method="POST">
            @csrf
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Course Short Name</label>
                <div class="col-sm-9">
                    <select name="cshortname"  class="form-control">
                      @foreach ($data as $item)
                      <option value="{{ $item->cshortname }}">{{ $item->cshortname }}</option>
                      @endforeach
                   </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Course Full Name</label>
                <div class="col-sm-9">
                    <select  name="cfullname" class="form-control">
                        @foreach ($data as $item)
                        <option value="{{ $item->cfullname }}">{{ $item->cfullname }}</option>
                        @endforeach
                   </select>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label">Subject 1</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control"  name="subject1" value="{{ old('subject1') }}">
                    <span style="color: red">
                        @error('subject1')
                            {{ $message }}
                        @enderror
                    </span>
                </div>

            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" >Subject 2</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="subject2" value="{{ old('subject2') }}">
                    <span style="color: red">
                        @error('subject2')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-3 col-form-label" >Subject 3</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="subject3" value="{{ old('subject3') }}">
                    <span style="color: red">
                        @error('subject3')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Add Subject</button>
            </div>


        </form>
    </div>
</div>
@endsection
