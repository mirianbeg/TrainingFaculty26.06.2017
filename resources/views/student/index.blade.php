@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="content">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                       
                        <a href="{{ route('students.create')}}">
                            Add Students
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
                                        Lastname
                                    </th>
                                     <th>
                                        gender
                                    </th>
                                    <th>
                                        ID Number
                                    </th>
                                    <th>
                                       E-mail
                                    </th>
                                    <th>
                                        Date of Birth
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                                @foreach ($students as $student)
                                <tr>
                                    <td>
                                        {{ $student->firstname }}
                                    </td>
                                    <td>
                                        {{ $student->lastname }}
                                    </td>
                                    <td>
                                        {{ $student->gender }}
                                    </td>
                                    <td>
                                        {{ $student->personalID }}
                                    </td>
                                    <td>
                                        {{ $student->email }}
                                    </td>
                                    <td>
                                        {{ $student->dateOfBirth }}
                                    </td>
                                    <td>
                                    <a href="{{route('students.edit', $student->id)}}" class="btn btn-primary">Edit</a>
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
