<form  action="{{route('faculties.store')}}" method="post">
	{{csrf_field()}}
	<p>
	Name:
	{{ $errors->first('name') }}
		<input type="text" name="name" value="{{old('name')  }}">
	</p>
		<button type="submit" name="">save</button>
</form>