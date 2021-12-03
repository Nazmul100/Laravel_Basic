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


{{--                @if(Session::has('success'))--}}
{{--                    <div class="alert alert-success">--}}
{{--                        {{ Session::get('success') }}--}}
{{--                        @php--}}
{{--                            Session::forget('success');--}}
{{--                        @endphp--}}
{{--                    </div>--}}
{{--                @endif--}}

                <form action="{{ route('createUser') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Name</label>
                        <input type="text" name="name" class="form-control" id="validationCustom01">

                        @if($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif


                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom02" class="form-label">Bio</label>
                        <input type="text" class="form-control" name="bio" id="validationCustom02">
                        @if($errors->has('bio'))
                            <span class="text-danger">{{ $errors->first('bio') }}</span>
                        @endif

                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom01" class="form-label">Project</label>
                        <input type="text" name="project" class="form-control" id="validationCustom01">
                        @if($errors->has('project'))
                            <span class="text-danger">{{ $errors->first('project') }}</span>
                        @endif

                    </div>

                    <div class="col-md-12">
                        <label for="validationCustom03" class="form-label">Address</label>
                        <input type="text" name="address" class="form-control" id="validationCustom03">
                        @if($errors->has('address'))
                            <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif

                    </div>
                    <div class="col-md-12">
                        <label for="validationCustom04" class="form-label">Skill</label>
                        <select class="form-select" name="skill" id="validationCustom04">
                            <option selected disabled value="">Choose...</option>
                            <option>Laravel</option>
                            <option>React</option>
                            <option>Vue</option>
                        </select>
                        @if($errors->has('skill'))
                            <span class="text-danger">{{ $errors->first('skill') }}</span>
                        @endif


                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="validationCustom05" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="validationCustom05">
                        @if($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif


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











