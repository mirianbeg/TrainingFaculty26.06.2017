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
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="/faculties">
                        ფაკულტეტები
                    </a>
                    <a class="navbar-brand" href="/courses">
                        კურსები
                    </a>
                    <a class="navbar-brand" href="/programs">
                        პროგრამები
                    </a>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="page-header">
                <h1>
                    <small>
                        სტუდენტის მონაცემების რედაქტირება
                    </small>
                </h1>
            </div>
            <label>
                სახელი
            </label>
        </div>
    </body>
</html>
{!! Form::open(['route' => ['students.update', $student->id], 'method' => 'put']) !!}
          
            {!!Form::text('name', $student->name );!!}
            {!!Form::text('surname', $student->surname );!!}
            
           
            {!!Form::text('personalID', $student->personalID );!!}
            {!!Form::select('gender', array('female' => 'Female', 'male' => 'Male'), $student->gender);!!}

            {{--
<select name="gender">
    <option value="male">
        @if (old('gender') == "male") 
                    selected
                    @endif
                Male
    </option>
    <option value="female">
        @if (old('gender') == "female") 
                    selected
                    @endif
                Female
    </option>
</select>
--}}
            {!!Form::text('dateOfBirth', $student->dateOfBirth );!!}
<button class="btn btn-primary" type="submit">
    დამახსოვრება
</button>
{!! Form::close() !!}
