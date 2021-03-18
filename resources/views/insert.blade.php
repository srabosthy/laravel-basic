<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSERT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center">
    <ul class="navbar-nav">
        <li class="nav-item"> <a class="nav-link" href="#">Home</a></li>
        <li class="nav-item"> <a class="nav-link" href="{{ URL::to('employees') }}">Show employee</a></li>
        <li class="nav-item"> <a class="nav-link active" href="{{ URL::to('insert') }}">Insert</a></li>
    </ul>
    </nav>
    <div class="container" style="margin-top:60px">
        <div class = "col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Create Employee</h2>
                </div>
                <div class="card-body">
                    <form method = "post" action="{{ URL::to('store-employee') }}">
                        {{ csrf_field() }}
                        <div class = "form-group">
                            <label for="">Name</label>
                            <input type="text"class="form-control" name="name" id="">
                        </div>
                        <div class = "form-group">
                            <label for="">Email</label>
                            <input type="email"class="form-control" name="email" id="">
                        </div>
                        <div class = "form-group">
                            <label for="">Gender</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id value="male" checked>
                                <label class="form-check-label">
                                    Male
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gender" id value="female">
                                <label class="form-check-label">
                                    Female
                                </label>
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for="">Status</label>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_active" value="1" checked>
                                <label class="form-check-label" >
                                    Active
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="is_active" value="0" >
                                <label class="form-check-label" >
                                    Inactive
                                </label>
                            </div>
                        </div>
                        <div class = "form-group">
                            <label for="">Date of Birth</label>
                            <input type="date"class="form-control" name="dob" id="">
                        </div>
                        <div class = "form-group">
                            <label for="">Role</label>
                            <input type="text"class="form-control" name="role" id="">
                        </div>
                        <div class = "form-group">
                            <label for="">Password</label>
                            <input type="password"class="form-control" name="password" id="">
                        </div>

                        <div class = "form-group">
                            <button class="btn btn-success" name="submit" type="submit">Submit</button>
                            <a class='btn btn-primary' href="{{ URL::to('employees') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>   
    </div>
</body>
</html>