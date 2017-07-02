@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="content">
                <div class="panel panel-default">
                    <!-- Default panel contents -->
                    <div class="panel-heading">
                       
                    </div>
                    <div class="panel-body">
                        <p>
                            <table style="width:100%">
                                <tr>
                                    <th>
                                        Users
                                    
                                    </th>
                                    <th>
                                        Type
                                    </th>
                                    <th>
                                    </th>
                                </tr>
                                @foreach ($users as $user)
                                <tr>
                                    <td>
                                        {{ $user->email }}
                                    </td>
                                    <td>
                                        @if($user->isAdmin==1)
Administrator
@elseif($user->isAdmin==0)
 User
@endif
                                    </td>
                                    <td>
                                        <a href="{{route('users.edit', $user->id)}}">
                                            Edit
                                        </a>
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
