<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('component.Header.header')

</head>
<body>
<div class="container">
    @include('component.NavBar.NavBar')
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <h3 class="text-center">User Create</h3>
                <form action="" method="get">
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
                        <select class="form-select" name="skil" id="validationCustom04">
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
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck">
                            <label class="form-check-label" for="invalidCheck">
                                Agree to terms and conditions
                            </label>

                        </div>
                        <div class="col-12 mt-3">
                            <a href="/crud">
                                <button type="button" name="button" class="btn btn-primary"> Submit</button>
                            </a>
                        </div>

                </form>
            </div>
        </div>
    </div>
</div>
@include('component.Footer.footer')
