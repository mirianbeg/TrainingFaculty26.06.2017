<form  action="{{route('programs.store')}}" method="post">
	{{csrf_field()}}
	<p>
	Name:
	{{ $errors->first('name') }}
		<input type="text" name="name" value="{{old('name')  }}">
	</p>
	<p>
	Faculty:
	{{ $errors->first('faculty_id') }}
	
	<select name="{{'faculty_id'}}">
	@foreach($faculties as $faculty)
		<option value="{{$faculty->id}}"
		@if (old('faculty_id')==$faculty->id)
		selected
		@endif;
		>
		{{$faculty->name}}
		</option>
	@endforeach
	</select>
	</p>
	<p>
	Mandatory credits:
	{{ $errors->first('mandatory_credits') }}
		<input type="number" name="mandatory_credits" value="{{old('mandatory_credits')  }}">
	</p>

	<p>
	Optional credits:
	{{ $errors->first('optional_credits') }}
		<input type="number" name="optional_credits" value="{{old('optional_credits')  }}">
	</p>

		<button type="submit" name="">save</button>
</form>