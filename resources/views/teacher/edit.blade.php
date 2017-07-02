<form  action="{{route('teachers.update', $teacher->id)}}" method="post">
	{{csrf_field()}}
	 <input type="hidden" name="_method" value="PUT">
	<p>
	{{ $errors->first('firstname') }}
		<input type="text" name="firstname" value="{{ ($teacher->firstname)  }}">
	</p>
	<p>
	{{ $errors->first('lastname') }}
		<input type="text" name="lastname" value="{{ ($teacher->lastname)  }}">
	</p>
	<p>
	{{ $errors->first('email') }}
		<input type="text" name="email" value="{{ ($teacher->email)  }}">
	</p>
	<p>
	{{ $errors->first('dateOfBirth') }}
		<input type="text" name="dateOfBirth" value="{{ ($teacher->dateOfBirth)  }}">
	</p>
		<button type="submit" name="">save</button>
</form>