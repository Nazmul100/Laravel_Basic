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
                <h3 class="text-center">Edit Your Profile</h3>
            </div>
        </div>
        <div>
            <form class="row g-3 needs-validation" method="post" action="{{route('update', $getUser->id)}}" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Name</label>
                    <input type="text" name="name" value="{{$getUser->name}}" class="form-control" id="validationCustom01"  >
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom02" class="form-label">Bio</label>
                    <input type="text" class="form-control" name="bio" value="{{$getUser->name}}" id="validationCustom02"  required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-12">
                    <label for="validationCustom01" class="form-label">Project</label>
                    <input type="text" class="form-control" name="project" value="{{$getUser->name}}" id="validationCustom01" >
                    <div class="valid-feedback">
                        Looks good!
                    </div>

                    <div class="col-md-12">
                        <label for="validationCustom03" class="form-label">Address</label>
                        <input type="text" class="form-control" name="address" value="{{$getUser->name}}" id="validationCustom03" >
                        <div class="invalid-feedback">
                            Please provide a valid city.
                        </div>
                    </div>
{{--                    {condtion ? forTrue : forFalse}--}}
                    <div class="col-md-12">
                        <label for="validationCustom04" class="form-label">Skill</label>
                        <select class="form-select" name="skill"   id="validationCustom04" >
                            <option selected  value="">Choose...</option>
                            <option value="Laravel" {{ $getUser->skill == 'Laravel' ? 'selected' : '' }}>Laravel</option>
                            <option value="React" {{ $getUser->skill == 'React' ? 'selected' : '' }}>React</option>
                            <option value="Vue" {{ $getUser->skill == 'Vue' ? 'selected' : '' }}>Vue</option>
                        </select>
                        <div class="invalid-feedback">
                            Please select a valid state.
                        </div>
                    </div>
                    <div class="col-md-12 mt-2">
                        <label for="validationCustom05" class="form-label">Image</label>
                        <input type="file" name="image" class="form-control" id="validationCustom05">
                        <div class="invalid-feedback">
                            Please provide a valid zip.
                        </div>
                    </div>

                    <div class="col-12 mt-3">
                        <button type="submit" name="button" class="btn btn-primary"> Submit</button>
                    </div>
            </form>
        </div>
    </div>




</div>
@include('component.Footer.footer')




</body>
</html>
