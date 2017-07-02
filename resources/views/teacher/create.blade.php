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
                    <a class="navbar-brand" href="{{route('faculties.index')}}">
                        Faculties
                    </a>
                    <a class="navbar-brand" href="{{route('programs.index')}}">
                        Programs
                    </a>
                    <a class="navbar-brand" href="{{route('courses.index')}}">
                        Courses
                    </a>
                    <a class="navbar-brand" href="{{route('teachers.index')}}">
                        Teachers
                    <a class="navbar-brand" href="{{route('students.index')}}">
                        Students
                    </a>
                    
                    </a>
                </div>
            </div>
        </nav>
        <div class="container">
            <h3>
                Add Teacher
            </h3>
            <label>
                Teacher's Info:
            </label>
        
    
<form action="{{route('teachers.store')}}" method="Post">
    {{ csrf_field() }}
            <label>
                Firstname
            </label>

            {{ $errors->first('firstname') }}
    <input class="form-control col-lg-3" name="firstname" type="text" value="{{old('firstname')}}"></input></br>

            <label>
                Lastname
            </label>

        {{ $errors->first('lastname') }}
    <input class="form-control col-lg-3" name="lastname" type="text" value="{{old('lastname')}}">
    </input></br>
        
            <label>
               E-mail
            </label>

        {{ $errors->first('email') }}
    <input class="form-control col-lg-3" name="email" type="email" value="{{old('email')}}">
    </input></br> 
            <label>
                Date of Birth
            </label>

        {{ $errors->first('dateOfBirth') }}
    <input class="form-control col-lg-3" name="dateOfBirth" type="date" value="{{old('dateOfBirth')}}">
    </input></br></br></br></br>

    <button class="btn btn-primary " type="submit">
       Save
    </button></br> 
                    
</form>

</div>
</body>
</html>