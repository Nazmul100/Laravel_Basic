<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>This is Log in Page </title>

    @include('component.Header.header')

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">{{$user->name}}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="/crud">Crud</a>
                </li>

            </ul>

        </div>
    </div>
</nav>



<div class="container">
    <div class="row mt-5 text-center">
            <div class="col-12 ">
                <h2> Welcome My Page </h2>
                <div>
                    <h5>Crud Operation </h5>
                </div>

                <div class="row">
                    <div class="col-6 col-sm-6">
                        <div class="mt-3">
                            <a href="login">
                            <button type="submit" class="btn btn-primary">Login</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6">
                        <div class="mt-3">
                            <a href="registration">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>







@include('component.Footer.footer')


</body>
</html>
