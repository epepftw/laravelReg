<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br>
    <div class="container-fluid d-flex p-2 justify-content-center">
        <div class="card shadow p-3 w-25">
        <h3 class="text-danger"><b>Change Password</b></h3><hr>
        <div class="d-flex flex-row">
         <a class="btn btn-success offset-md-2" href="/profile">My Account</a><a class="btn btn-danger offset-2" href="/logout">Logout</a>
         </div>
         <hr>
         <form method="POST" action="/profile/changepass/{{$user->id}}">
        @csrf
        <input class="form-control" type="password" name="old" placeholder="Old Password" required><br>
        <input class="form-control" type="password" name="new" placeholder="New Password" required><br>
        <input class="form-control" type="password" name="confirm" placeholder="Confirm New Password" required><br>
        <input class="btn btn-primary" type="submit" value="Update Password">
        <form>

        </div>
    </div>

   
</body>
</html>