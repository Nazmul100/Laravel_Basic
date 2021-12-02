<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @include('component.Header.header')

</head>
<body>
<div class="container ">
    <div class="row col-12">
        <div class="col-4">

        </div>
        <div class="col-4 mt-5">
            <div class="card text-center" style="width: 22rem;">
{{--                <img src="Image/.{{$getUser->image}}" class="card-img-top" alt="...">--}}
                <img src={{asset("Image/".$getUser->image)}} class="card-img-top" alt="..."/>
                <div class="card-body">
                    <h5 class="card-title">Name:{{$getUser->name}}</h5>
                    <p class="card-text">{{$getUser->bio}}</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>{{$getUser->project}}</b></li>
                    <li class="list-group-item">{{$getUser->skill}}</li>
                    <li class="list-group-item"><i>{{$getUser->address}}</i></li>
                </ul>

            </div>
        </div>
<div class="text-center">

    <a href="/crud" > <button type="button" class="btn btn-success mt-4">Back</button> </a>

</div>


        </div>
    </div>











@include('component.Footer.footer')

</body>
</html>
