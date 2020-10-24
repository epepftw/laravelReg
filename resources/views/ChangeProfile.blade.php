<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background: #f6e58d">
<br>
    <div class="container-fluid d-flex p-2 justify-content-center">
        <div class="card shadow p-3 w-25">
        <h3 class="text-primary"><b>Edit Information</b></h3><hr>
                <div class="d-flex flex-row">
                <a class="btn btn-success offset-md-2" href="/profile">My Account</a><a class="btn btn-danger offset-2" href="/logout">Logout</a>
                </div>
                <hr>
            <form method="POST" action="/profile/changeprofile/{{$user->id}}">
                @csrf
                <label for="firstname"><b>First Name :</b></label>
                <input class="form-control" type="text" name="fname" value="{{$user->firstname}}"><br>
                <label for="middlename"><b>Middle Name :</b></label>   
                <input class="form-control" type="text" name="mname" value="{{$user->middlename}}"><br>
                <label for="lastname"><b>Last Name</b></label>
                <input class="form-control" type="text" name="lname" value="{{$user->lastname}}"><br>
                <label for="email"><b>E-mail Address :</b></label>
                <input class="form-control" type="email" name="email" value="{{$user->email}}"><br>
                <label for="contact"><b>Contact :</b></label>
                <input class="form-control" type="tel" name="contact" pattern="[0-9]{11}" value="{{$user->contact}}"><br>
                <label for="address"><b>Address</b></label>
                <textarea class="form-control" name="address" >{{$user->address}}</textarea><br>
                <label for="birthday"><b>Birthday :</b></label>
                <input class="form-control" type="date" name="month" required><br>
                    <input class="btn btn-success" type="submit" value="Update">
            </form>
        </div>
    </div>



   
</body>
</html>
