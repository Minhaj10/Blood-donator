<!DOCTYPE html>
<html>
<head>
    <title>Search Result</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
body {
  background-image: url('https://png.pngtree.com/thumb_back/fh260/back_our/20190619/ourmid/pngtree-voluntary-blood-donation-image_133373.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
</head>
<body>

    <br>
<br>
        <h1 style="color:red;" class="text-center">List Of Blood Donators</h1>
<br>
<br>

   <div class="container">
        <form action="/search" method="POST" role="search">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" class="form-control" name="q"
                    placeholder="Search donor by blood group or name"> <span class="input-group-btn">
                    <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search">Search</span>
                    </button>
                </span>
            </div>
        </form>
        <div class="container">
            @if(isset($details))
            <p> The Search results for your query <b> {{ $query }} </b> are :</p>
            <h2>Blood donor List for following search</h2>
            <table id="dtDynamicVerticalScrollExample" class="table table-success table-striped" border="2" width="800">
                <thead>
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Mobile Number</th>
                        <th scope="col">Blood Group</th>
                        <th scope="col"> Action </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($details as $user)
                    <tr class="table-info" scope="row" >
                        <td>{{$user->student_id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->batch}}</td>
                        <td>
                <form action="{{ route('students.destroy', $user->id)}}" method="POST">
                    <a class="btn btn-dark" href="{{ route('students.edit', $user->id)}}" > Edit </a>                    
                    @csrf
                    @method('DELETE') 

                    <button class="btn btn-danger" type="submit" > Delete </button>
                </form>
            </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @elseif(isset($message))
            <p>{{ $message }}</p>
            @endif
        </div>

</body>
</html>

