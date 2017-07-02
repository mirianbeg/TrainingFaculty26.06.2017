<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
            <meta content="IE=edge" http-equiv="X-UA-Compatible">
                <link crossorigin="anonymous" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" rel="stylesheet">
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <div class="container">
            <div class="panel-heading">
                Edit User
            </div>
            <label>
                Firstname
            </label>
        </div>
    
{!! Form::open(['route' => ['users.update', $user->id], 'method' => 'put']) !!}
           
            {!!Form::text('email', $user->email );!!}

{!! Form::hidden('isAdmin', 0) !!}
{!! Form::checkbox('isAdmin', 1) !!}

{{-- <input type="hidden" name="isAdmin" value="0">
<input type="checkbox" name="isAdmin" value="1" @if ($user->isAdmin==1) checked 
@endif> --}}
    
        <button class="btn btn-primary" type="submit">
            save
        </button>
        {!! Form::close() !!}
    </input>
</input>
</body>
</html>