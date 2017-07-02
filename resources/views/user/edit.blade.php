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
            
        
    

 <form  action="{{route('users.update', $user->id)}}" method="post">
    {{csrf_field()}}
     <input type="hidden" name="_method" value="PUT">
    <p>
    {{ $errors->first('name') }}
    <label>
       Name: 
    </label>
      </br>  
        <input type="text" name="name" value="{{ ($user->name)  }}">
    </input>
    </p>

    <p>
    {{ $errors->first('email') }}
    <label>
       E-mail: 
    </label>
      </br>  
        <input type="text" name="email" value="{{ ($user->email)  }}">
    </input>
    </p>

    <p>
        {{ $errors->first('isAdmin') }}
        <label>
           isAdmin: 
        </label>
        </br>
       <input type="hidden" name="isAdmin" value="0">
       <input type="checkbox" name="isAdmin" value="1" 
            @if ($user->isAdmin==1) 
            checked 
            @endif>
       </input>    
    </p>
        
        <button type="submit" name="">save</button>
</form>
</div>
</body>
</html>