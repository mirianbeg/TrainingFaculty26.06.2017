<a href="{{route('courses.create')}}">create </a>
<ul>
@foreach ($courses as $course)
	<li>
		<a href="{{route('courses.show', $course->id)}}" >{{$course->name}}</a>
	</li>
@endforeach
</ul>