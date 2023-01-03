
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

</div>
 <style>	  
			 
.create-box{
	left      : 37%;
    top       : 50%;
    position  : absolute;
    transform : translate(-50%, -50%);
}
body{
	background-image: url(https://i.ytimg.com/vi/6ijCZOCvxnQ/maxresdefault.jpg) ;
	background-attachment: fixed;
    background-size: cover;
	
}

 </style>
</div>
<div>
<div class="create-box">

<h1>Create Profile</h1>
	<form action="{{route('students.store')}}" method="POST">
 	 	@csrf
	<table class="backk">
		<tr>
			<td style="font-weight: 900;">Student-ID:</td>
			<td><input type="text" name="stud_id" placeholder="XXX-XXX-XXX"></td>
        </tr>
        <tr>
			<td style="font-weight: 900;">Name:</td>
			<td><input type="text" name="name" placeholder="Full Name"></td>
        </tr>
	    <tr>
			<td style="font-weight: 900;">Batch:</td>
			<td><input type="text" name="batch" placeholder="eg-45"></td>
        </tr>
	    <tr>
			<td style="font-weight: 900;">Year of Paasing:</td>
			<td><input type="text" name="year" placeholder="eg-2010"></td>
        </tr>
	    <tr>
			<td style="font-weight: 900;">Gender:</td>
			<td><input type="text" name="gender" placeholder="eg-Male"></td>
        </tr>

		<tr>
			<td><hr><button type="submit" >Register</button></td>
		</tr>

	</table>


	</form>

</div>
</div>