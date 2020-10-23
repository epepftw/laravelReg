<html>
<head><title> Profile </title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<br>
<div class="container-fluid d-flex p-2 justify-content-center">
<div class="card shadow p-3 w-25">
  <h3 class="text-primary"><b>My Profile</b></h3><hr>
    @if(session()->has('email'))
    <div class="d-flex flex-row">
    <a class="btn btn-success offset-md-2" href="/profile">My Account</a><a class="btn btn-danger offset-2" href="/logout">Logout</a>
    </div>
  @else
		<p>Last Name not set</p>
    @endif
    @foreach($user as $users)
    <hr><h3>Information</h3>
  	<table class="table table-striped">
      <tbody>
        <tr class='details'><td><b>Name:</b> {{$users->firstname}} {{$users->middlename}} {{$users->lastname}}</td></tr>
        <tr class='details'><td><b>Email:</b> {{$users->email}}</td></tr>
        <tr class='details'><td><b>Contact:</b> {{$users->contact}}</td></tr>
        <tr class='details'><td><b>Address:</b> {{$users->address}}</td></tr>
        <tr class='details'><td><b>Birthday:</b> {{$users->birthday}}</td></tr>			
      </tbody>
    </table>
    <a href='/profile/edit/{{$users->id}}'>Edit Account Information</a>
    <a href='/profile/editpass/{{$users->id}}'>Change Password</a>
    @endforeach	
</div>
</div>    
</body>
</html>