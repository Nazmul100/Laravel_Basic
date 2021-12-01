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
                <h3>User List</h3>
            </div>

            <div class="col text-end">
                <a href="/crud_create" ><button type="button" class="btn btn-info"><i class="fas fa-user-plus"></i> Add User</button></a>
            </div>
        </div>
    </div>
    <table class="table caption-top">
        <thead>
        <tr class="">
            <th scope="col">Id</th>
            <th scope="col">Name</th>
            <th scope="col">Project</th>
            <th scope="col">Address</th>
            <th class="text-center">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($Users as $User)
        <tr>
            <th scope="row">{{$User->id}}</th>
            <td>{{$User->name}}</td>
            <td>{{$User->project}}</td>
            <td>{{$User->address}}</td>
            <td class="text-center">
                <a href="{{ url('/view',$User->id) }}"><button type="button" class="btn btn-info"><i class="fas fa-eye"></i> </button></a>
                <a href="{{ url('/edit',$User->id) }}"><button type="button" class="btn btn-info"><i class="fas fa-user-edit"></i></button></a>
                <a href="{{ url('/delete',$User->id) }}"><button type="button" class="btn btn-info"><i class="fas fa-trash"></i></button></a>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>


</div>
@include('component.Footer.footer')




</body>
</html>
