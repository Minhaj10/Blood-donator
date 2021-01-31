<html>
<head>
	<title>List of donators</title>
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
<body>
<div>
<br>
<br>
    	<h1 style="color:red;" class="text-center">List Of Blood Donors</h1>
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

</div>

<br>
<br>
<div style="overflow-x:auto;">
	<table id="dtDynamicVerticalScrollExample" class="table table-success table-striped" border="2" width="800" >
		<tr>
			<th scope="col"> Name </th>
			<th scope="col"> Mobile_number </th>
			<th scope="col"> Blood_Group </th>
			<th scope="col"> Action </th>
		</tr>

		@foreach ($students as $student)
		<tr class="table-info" scope="row"> 
			<td>{{$student->student_id}} </td>
			<td>{{$student->name}} </td>
			<td>{{$student->batch}} </td>
			<td>
				<form action="{{ route('students.destroy', $student->id)}}" method="POST">
					<a class="btn btn-dark" href="{{ route('students.edit', $student->id)}}" > Edit </a>					
					@csrf
                    @method('DELETE') 

					<button class="btn btn-danger" type="submit" > Delete </button>
				</form>
			</td>
		</tr>
		@endforeach 

	</table>
</div>
	<br>
	<br>
	<a class="btn btn-warning"  href="{{ route('students.create') }}"> Register as donator </a>

</div>


<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <ol class="carousel-indicators">
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
    <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.pr-medicalevents.com/wp-content/uploads/2016/06/post-img.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://t3.ftcdn.net/jpg/02/76/71/88/360_F_276718846_1mDkxI8gb6FrfuwAiPb6OuB4M7BbeuoV.jpg" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://media1.s-nbcnews.com/j/newscms/2019_24/2895091/190613-donating-blood-cs-406p_c7ece08578922a72c9c7e853226a4fec.fit-760w.jpg" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>