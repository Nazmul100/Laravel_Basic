<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>User Create </title>
    @include('component.Header.header')
</head>
<body>
@include('component.NavBar.NavBar')
<div class="container">
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center"> User Create </h3>
                <form action="{{ route('createUser') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01">

                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Bio</label>
                        <input type="text" class="form-control" name="bio" id="validationCustom02">

                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Project</label>
                        <input type="text" name="project" class="form-control" id="validationCustom01">
                    </div>

                    <div class="col-md-12">
                        <label for="validationCustom03" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="validationCustom03">
                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom04" class="form-label">Skill</label>
                        <select class="form-select" name="skill" id="validationCustom04">
                            <option selected disabled value="">Choose...</option>
                            <option>Laravel</option>
                            <option>React</option>
                            <option>Vue</option>
                        </select>

                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="validationCustom05" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="validationCustom05">

                    </div>

                    <div class="col-12 mt-3">
                            <button type="submit" name="button" class="btn btn-primary"> Submit</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@include('component.Footer.footer')











