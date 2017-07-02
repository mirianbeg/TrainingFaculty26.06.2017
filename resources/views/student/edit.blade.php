<form  action="{{route('students.update', $student->id)}}" method="post">
	{{csrf_field()}}
	 <input type="hidden" name="_method" value="PUT">
	<p>
	Firstname:
	{{ $errors->first('firstname') }}
		<input type="text" name="firstname" value="{{ ($student->firstname)  }}">
	</p>
	<p>
	Lastname:
	{{ $errors->first('lastname') }}
		<input type="text" name="lastname" value="{{ ($student->lastname)  }}">
	</p>
	<p>
	Gender:
	{{ $errors->first('gender') }}
		
		<select class="form-control col-lg-3" name="gender" value="{{old('gender')}}">
         <option value="female">
            Female
         </option>

         <option value="male">
            Male
         </option>
       </select></br>
	</p>
	<p>
	Personal ID:
	{{ $errors->first('personalID') }}
		<input type="text" name="personalID" value="{{ ($student->personalID)  }}">
	</p>

	<p>
	E-mail
	{{ $errors->first('email') }}
		<input type="text" name="email" value="{{ ($student->email)  }}">
	</p>
	<p>
	Date Of Birth:
	{{ $errors->first('dateOfBirth') }}
		<input type="text" name="dateOfBirth" value="{{ ($student->dateOfBirth)  }}">
	</p>
		<button type="submit" name="">save</button>
</form>