<!DOCTYPE HTML>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title> Home </title>
</head>
<body style="background: #f6e58d">
<br>
<div class="container-fluid d-flex p-2 justify-content-center">
  <div class="card shadow p-3 w-25">
  <h3 class="text-primary"><b>Sign up</b></h3><hr>
  	@if($errorMsg != null)
	<p id="error">{{$errorMsg}}</p>
	@endif
    <form method="POST" action="login">
	@csrf
	  <label for="email"><b>E-mail Address</b></label>
      <input class="form-control" type="text" name="email" placeholder="E-mail"/>
	  <label for="email"><b>Password</b></label>
	  <input class="form-control" type="password" name="password" placeholder="Password"/><br>
      <button class="btn btn-primary">Sign in</button><hr>
      <p class="message">Don't have an account yet?<br> <a href="/register">Register</a></p>
    </form>
  </div>
</div>
</body>
</html>
<script>
	/*
		to prevent a resubmit on refresh and back button.
	*/
	if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
	}
</script>