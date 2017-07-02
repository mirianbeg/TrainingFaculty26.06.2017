<h1>{{$program->name}}</h1>

<p>
    {{ $program->faculty->name }}
</p>
<p>
    {{ $program->mandatory_credits }}
</p>
<p>
    {{ $program->optional_credits }}
</p>
<a href="{{route('programs.edit', $program->id)}}"> edit </a>&nbsp&nbsp
<a href="{{route('programs.courses.index', $program->id)}}">Courses</a>