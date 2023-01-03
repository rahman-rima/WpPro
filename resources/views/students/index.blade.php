
@extends('students.layout')



@section('content')
<div>
	<style>
		.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}
	</style>
</div>
<div>
	<br>
	<div >
            <img src="https://cdn-0.enacademic.com/pictures/enwiki/77/Metropolitan_University%2C_Sylhet_logo.jpg" class="center">
        </div>
</div>
<div style="font-family: sans-serif; background-color:white;">

	<h1 style="font-family: sans-serif;"> Student Profiles: </h1>
	
	<h2><a href="{{ route('students.create') }}"> Register Here</a>
	<br>
	<a href="/"> Home</a><br></h2>

	<br>
	<hr>


	<table border="2" width="800">
		<tr>
			<th> Student ID </th>
			<th> Full Name </th>
			<th> Batch </th>
            <th>Year of Passing</th>
            <th>Gender</th>
			<th>Action</th>
			
		</tr>

		@foreach ($students as $student)
		<tr> 
			<td>{{$student->stud_id}} </td>
			<td>{{$student->name}} </td>
			<td>{{$student->batch}} </td>
            <td>{{$student->year}} </td>
            <td>{{$student->gender}} </td>
			<td>
				<form action="{{ route('students.destroy', $student->id)}}" method="POST">
					<a href="{{ route('students.edit', $student->id)}}"> Edit </a>					
					@csrf
                    @method('DELETE') 

					<button type="submit" > Delete </button>
				</form>
			</td>
		</tr>
		@endforeach 

	</table>

</div>