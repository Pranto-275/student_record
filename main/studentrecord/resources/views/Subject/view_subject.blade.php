@extends('layout.master')

@section('title')
view Course
@endsection
@section('content')

<h4 class="mb-1">WELCOME ADMIN</h4>
            <hr>

            <div class="card">
                <div class="card-header text-center mb-3">
                    <h4> View Subject</h4>

                </div>
                <div class="card-body p-2">
                    <!-- data table -->
                    <table id="example" class="table table-striped table-bordered " style="width:100%">
                        <thead>
                            <tr>
                                <th>S No</th>
                                <th>Subject 1</th>
                                <th>Subject 2</th>
                                <th>Subject 3</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($data as $subject)
                           <tr>
                            <td>{{ $subject->id }}</td>
                            <td>{{ $subject->subject1 }}</td>
                            <td>{{ $subject->subject2 }}</td>
                            <td>{{ $subject->subject3 }}</td>

                            <td class="text-center">
                                <a href="{{ route('subject.edit',$subject->id) }}" class="btn btn-success"> <i class="fas fa-edit"></i>
                                </a>
                               <form action="{{ route('subject.destroy',$subject->id) }}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> <i class="fas fa-trash-alt"></i>
                               </form>
                                </button>
                            </td>
                        </tr>

                           @endforeach

                        </tbody>
                    </table>
                </div>

                <!-- END data table -->

            </div>

@endsection
