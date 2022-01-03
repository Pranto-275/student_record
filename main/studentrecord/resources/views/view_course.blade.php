@extends('layout.master')

@section('title')
view Course
@endsection
@section('content')

<h4 class="mb-1">WELCOME ADMIN</h4>
            <hr>

            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4> View Courses</h4>

                </div>
                <div class="card-body p-2">
                    <!-- data table -->
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Short Name</th>
                                <th>Full Name</th>
                                <th>Created Date</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $course)
                            <tr>
                                <td>{{ $course->id }}</td>
                                <td>{{ $course->cshortname }}</td>
                                <td>{{ $course->cfullname }}</td>
                                <td>{{ $course->currentdate }}</td>
                                <td class="text-center">
                                    <a href="{{ route('course.edit',$course->id) }}" class="btn btn-success"> <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('course.destroy',$course->id) }}" style="display: inline" method="POST">

                                        @csrf
                                        @method('DELETE')


                                        <button type="submit" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>

                <!-- END data table -->

            </div>




@endsection
