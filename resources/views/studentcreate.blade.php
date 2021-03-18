<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Creation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="col-md-8">
            <form action="{{ URL::to('store-student') }}" method = "post">
                {{ csrf_field() }}
                <div class="form_group">
                    <label for="">Name</label>
                    <input class = "form-control" type="text" value="{{ old('name')}}" name="name" id="">
                    <span class="error">{{ $errors->first('name') }}</span>
                </div>
                <div class="form_group">
                    <label for="">Email</label>
                    <input class = "form-control" type="text" value="{{ old('email')}}" name="email" id="">
                    <span class="error">{{ $errors->first('email') }}</span>
                </div>
                <div class="form_group">
                    <label for="">Salary</label>
                    <input class = "form-control" type="text" value="{{ old('salary')}}" name="salary" id="">
                    <span class="error">{{ $errors->first('salary') }}</span>
                </div>
                <div class="form_group">
                    <label for="">Age</label>
                    <input class = "form-control" type="text" value="{{ old('age')}}" name="age" id="">
                    <span class="error">{{ $errors->first('age') }}</span>
                </div>
                <div class="form_group">
                    <label for="">Date of Birth</label>
                    <input class = "form-control" type="text" value="{{ old('dob')}}"  name="dob" id="">
                    <span class="error">{{ $errors->first('dob') }}</span>
                </div>
                <div class="form_group">
                    <button class="btn btn-primary" type="submit">Add</button>
                </div>
            </form> 
          
        </div>
    </div>
</body>
</html>