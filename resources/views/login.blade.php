<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center">
    <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href="#">Home</a></li>
    </ul>
    </nav>
    <div class="container text-center" style="margin-top:60px">
        <div class = "col-md-5 ">
            <div class="card">
                <div class="card-header">
                    <h2>Log In</h2>
                </div>
                @if(Session::has('err_msg')) 
                    <div class="alert alert-danger" role="alert">
                        {{Session::get('err_msg')}}
                    </div>
                @endif
                <div class="card-body">
                    <form method = "post" action="{{ URL::to('store-login') }}">
                        {{ csrf_field() }}
                        <div class = "form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email" id="">
                        </div>
                        <div class = "form-group">
                            <label for="">Password</label>
                            <input type="password" class="form-control" name="password" id="">
                        </div>
                        <div class = "form-group">
                            <button class="btn btn-success" name="submit" type="submit">Log in</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
    </div>
</body>
</html>