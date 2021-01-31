<html>
<head>
	<title>Submit Your data</title>
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
      <h1 style="color:red;" class="text-center">Sign Up As A Donor</h1>
<br>
<br>
<form action="{{route('students.store')}}" method="POST">
  @csrf
  <div class="form-group">
    <label class="btn btn-warning" for="exampleInputEmail1">Name</label>
    <input  name="student_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your name">
    <label  class="btn btn-warning" for="exampleInputEmail1">Mobile Number</label>
    <input  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your mobile number">
    <label class="btn btn-danger" for="exampleInputEmail1">Blood Group</label>
    <input  name="batch" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your blood group">
    
  </div>
 
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Register</button>
</form>
<div>

	

</div>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i1.wp.com/www.pacificprime.co.th/blog/wp-content/uploads/2020/06/banner-1138x493-v2.jpg?fit=1138%2C493&ssl=1" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>