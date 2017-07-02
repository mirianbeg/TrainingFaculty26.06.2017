@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="content">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                       Teachers
                         <a href="{{ route('teachers.create')}}">
                            Add
                        </a>
                    </div>
                    <div class="panel-body">
                        <p>
                            <table style="width:100%">
                                <tr>
                                    <th>
                                        Firstname
                                    </th>
                                    <th>
                                        Latname
                                    </th>
                                    <th>
                                        e-mail
                                    </th>
                                    <th>
                                        Date of Birth
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                                @foreach ($teachers as $teacher)
                                <tr>
                                    <td>
                                        {{ $teacher->firstname }}
                                    </td>
                                    <td>
                                        {{ $teacher->lastname }}
                                    </td>
                                    <td>
                                        {{ $teacher->email }}
                                    </td>
                                    <td>
                                        {{ $teacher->dateOfBirth }}
                                    </td>
                                    <td>
                                    <a href="{{route('teachers.edit', $teacher->id)}}" class="btn btn-primary">edit</a>
                                    
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
