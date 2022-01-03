<div class="wrapper d-flex align-items-stretch">
        <nav id="sidebar">
            <div class="p-4 pt-5">
                <a href="#" class="img logo rounded-circle mb-5" style="background-image: url(images/admin.jpg);"></a>
                <ul class="list-unstyled components mb-5">
                    <li class="active">
                        <a href="#course" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Course</a>
                        <ul class="collapse list-unstyled" id="course">
                            <li>
                                <a href="{{ route('course.index') }}">Add Course</a>
                            </li>
                            <li>
                                <a href="{{ route('allcourse') }}">View Course</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#subject" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Subject</a>
                        <ul class="collapse list-unstyled" id="subject">
                            <li>
                                <a href="add_subject.html">Add Subject</a>
                            </li>
                            <li>
                                <a href="view_subject.html">View Subject</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="Register_student.html">Register Student</a>
                    </li>
                    <li>
                        <a href="view_students.html">View Students</a>
                    </li>
                    <li>
                        <a href="session.html">Session</a>
                        <!-- <ul class="collapse list-unstyled" id="session">
                            <li>
                                <a href="#">Session</a>
                            </li>
                        </ul> -->
                    </li>
                    <li class="mt-5">
                        <button type="button" name="" id="" class="btn btn-danger btn-sm btn-block">Logout</button>

                    </li>
                </ul>


            </div>
        </nav>
