@extends('layout.master')

@section('title')
view Course
@endsection
@section('content')

<h4 class="mb-1">WELCOME ADMIN</h4>
            <hr>

            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4> View Students</h4>

                </div>
                <div class="card-body p-2">
                    <!-- data table -->
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Student_id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Mobile</th>
                                <th>Course</th>
                                <th>Subjects</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>


                            @foreach ($data as $data)
                            <tr>


                              <td>{{ $data->id }}</td>
                                <td>{{ $data->student_id }}</td>
                                <td>{{ $data->fname }}</td>
                                <td>{{ $data->email_id }}</td>
                                <td>{{ $data->phone }}</td>
                                <td>{{ $data->course->cshortname }}</td>

                                <td> {{ $data->course->subject1 }}+{{ $data->course->subject2 }}+{{ $data->course->subject3 }}</td>



                                <td class="text-center">
                                    <a href="{{ route('student.edit',$data->id) }}" class="btn btn-success"> <i class="fas fa-edit    "></i>
                                    </a>
                                    <form action="{{ route('student.destroy',$data->id) }}" style="display: inline" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"> <i class="fas fa-trash-alt"></i>
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
