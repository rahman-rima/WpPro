

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

<div>
	<form action="{{route('students.update', $student->id)}}" method="POST">
 	 	@csrf
          @method('PUT')
	<table>
		<tr>
			<td>Student-ID:</td>
			<td><input type="text" name="stud_id" placeholder="XXX-XXX-XXX" value="{{$student->stud_id}} "></td>
        </tr>
        <tr>
			<td>Name:</td>
			<td><input type="text" name="name" placeholder="Full Name" value="{{$student->name}}"></td>
        </tr>
	    <tr>
			<td>Batch:</td>
			<td><input type="text" name="batch" placeholder="eg-45" value="{{$student->batch}}"></td>
        </tr>
	    <tr>
			<td>Year of Paasing:</td>
			<td><input type="text" name="year" placeholder="eg-2010" value="{{$student->year}}"></td>
        </tr>
	    <tr>
			<td>Gender:</td>
			<td><input type="text" name="gender" placeholder="eg-Male" value="{{$student->gender}}"></td>
        </tr>

		<tr>
			<td><hr><button type="submit" >Update</button ></td>
		</tr>

	</table>


	</form>

</div>