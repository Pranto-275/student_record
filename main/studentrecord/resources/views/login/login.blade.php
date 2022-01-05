<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>To-Do</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="{{ asset('css/style.css') }}">
   <link rel="stylesheet" href="css/all.css">
</head>

<body>

    <div class="container">
        <div class="mt-2 text-center">
            <h3>Student Record Management System</h3>
        </div>
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-5">
                <div class="card">
                    <div class="card-header bg-primary text-light text-center">
                        <h6>Admin SignUp</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('auth.check') }}" method="POST">
                            @if (Session::has('failed'))
                        <div class="alert alert-danger text-center" role="alert">
                            <strong> {{ Session('failed') }}</strong>
                        </div>

                         @endif

                            @csrf
                            <div class="mb-3">
                                <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Email" value="{{ old('email') }}">

                              <span style="color: red">  @error('email')
                                {{ $message }}
                                @enderror</span>

                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" name="password" placeholder="password" value="{{ old('password') }}">
                                <span style="color: red">  @error('password')
                                    {{ $message }}
                                    @enderror</span>
                            </div>

                            <button type="submit" class="btn btn-success w-100"><b>Login</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>
