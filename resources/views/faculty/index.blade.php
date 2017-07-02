<a href="{{route('faculties.create')}}">Create</a>

<ul>
@foreach ($faculties as $faculty)
<li><a href="{{route('faculties.show', $faculty->id)}}"> {{ $faculty->name}} </a></li>
@endforeach
</ul>