<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registration Page </title>

    @include('component.Header.header')

</head>
<body>
<div class="container">
    <div class="col-md-8 text-center mt-5">
        <h2> Create Account </h2>
    </div>
    <form action="{{ route('registration') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-md-8  mt-3"  >
            <label for="exampleInputEmail1" class="form-label">Name</label>
            <input type="text" class="form-control" name="username" id="exampleInputEmail1" >
           </div>

        <div class="col-md-8  mt-3" >
            <label for="exampleInputEmail1"  class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>
        <div class="col-md-8  mt-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="col-md-8 mt-3">
            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
            <input type="password" name="confirm-password" class="form-control" id="exampleInputPassword1">
        </div>
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">Register</button>
    </div>

    </form>

    </div>











@include('component.Footer.footer')


</body>
</html>
