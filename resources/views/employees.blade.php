<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employess</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark justify-content-center">
  <ul class="navbar-nav">
    <li class="nav-item"> <a class="nav-link" href="#">Home</a></li>
    <li class="nav-item"> <a class="nav-link " href="{{ URL::to('logout') }}">Log Out</a></li>
    <li class="nav-item"> <a class="nav-link active" href="{{ URL::to('employees') }}">Show employee</a></li>
    <li class="nav-item"> <a class="nav-link" href="{{ URL::to('insert') }}">Insert</a></li>
    
  </ul>
</nav>
<div class="container">
    <h2>All Employees</h2>
    
    <table class="table table-hover">
        <thead>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Role</th>
            <th>Status</th>
            <th>Password</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($employees as $e) 
            <tr>
                <td> {{ $e->name }} </td>
                <td> {{ $e->email }} </td>
                <td> {{ $e->gender }} </td>
                <td> {{ $e->dob }} </td>
                <td> {{ $e->role }} </td>
                <td> {{ $e->is_active }} </td>
                <td> {{ $e->password }} </td>
                <td>
                    <a href="{{ URL::to('edit/'.$e->id) }}">edit</a>
                    <a data-toggle="modal" data-target="#myModal{{ $e->id }}" href="#">delete</a>
                    <div id="myModal{{ $e->id }}" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Confirmation</h4>
                            </div>

                            <div class="modal-body">
                                <p>are you sure want  to delete <b>{{ $e->name }}</b>?</p>
                            </div>
                            
                            <div class="modal-footer">
                                <a class="btn btn-danger" href="{{ URL::to('delete/'.$e->id) }}">Delete</a>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                            </div>

                        </div>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
</body>
</html>