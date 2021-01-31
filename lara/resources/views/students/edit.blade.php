<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
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

@extends('students.layout')

@section('content')
@if ($errors->any())
    <div  >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<body>
   <br>
<br>
      <h1 style="color:red;" class="text-center">Edit your data</h1>
<br>
<br>
<form action="{{route('students.update',$student->id) }}" method="POST">
  @csrf
 	 	@method('PUT')
  <div class="form-group">
    <label class="btn btn-warning" for="exampleInputEmail1">Name</label>
    <input  name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name" value="{{$student->student_id}}">
    <label  class="btn btn-warning" for="exampleInputEmail1">Mobile Number</label>
    <input  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number" value="{{$student->name}}">
    <label class="btn btn-warning" for="exampleInputEmail1">Blood Group</label>
    <input  name="batch" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your blood group" value="{{$student->batch}}">
    
  </div>
 
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form> 
</body>
</html>