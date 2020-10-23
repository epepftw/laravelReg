<!DOCTYPE HTML>
<html>
<head>
	<title> Registration Form </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div>
	<form method="POST" action="/register" id="signup">
	@csrf
		<div class="header">			
			@if($errors->any())
			<div class="alert">
				<strong>Please type correct informations in the form.
				<ul>
				@foreach($errors->all() as $error)			
					<li>{{$error}}</li>			
				@endforeach
				</ul>
			</div>
			@endif	
		</div>	
		<br>
		<div class="container-fluid d-flex justify-content-center">
			<div class="row">
				<div class="col-12">
					<div class="card shadow p-3">
								<h3 class="text-info"><b>Sign Up</b></h3><hr>
						<div class="reg-modal">	
							<label for="firstname"><b>First Name :</b></label>
							<input class="form-control" type="text" value="{{old('firstname')}}" name="firstname" maxlength="15" autocomplete="off" placeholder="First Name"required>
							<label for="middlename"><b>Middle Name :</b></label>
							<input class="form-control" type="text" value="{{old('middlename')}}" name="middlename" maxlength="15" autocomplete="off" placeholder="Middle Name" required>
							<label for="lastname"><b>Last Name :</b></label>
							<input class="form-control" type="text" value="{{old('lastname')}}" name="lastname" placeholder="Last Name" maxlength="30" autocomplete="off" required> 
							<label for="date"><b>Birthday :</b></label>
							<input class="form-control" type="date" name="month">
							<label for="email"><b>E-mail:</b></label>
							<input class="form-control" type="email" name="email" value="{{old('email')}}" placeholder="ex. johnsmith@mail.com" autocomplete="off" required> 
							<label for="contact"><b>Contact Number :</b></label>
							<input class="form-control" type="tel" id="phone" name="contact" value="{{old('contact')}}" placeholder="ex.09991234567" pattern="[0-9]{11}">
							<label for="address"><b>Address :</b></label>
							<textarea class="form-control" rows="3" cols="50" type="text" name="address" value="{{old('address')}}" placeholder="Address" autocomplete="off" required></textarea>
							<label for="password"><b>Password :</b></label>
							<input class="form-control" type="password" name="password" maxlength="30" placeholder="Password" autocomplete="off" required>
							<label for="confirmpassword"><b>Verify Password :</b></label>
							<input class="form-control" type="password" name="confirmpassword" maxlength="30" placeholder="Confirm Password" autocomplete="off" required><br>
							<input class="btn btn-primary" type="submit" id="submit" placeholder="SIGN UP">
						</div>
					</div>
				</div>
			</div>
		</div>
		
	</form>
	</div>
</body>
<html>
<script>
	/*
		to prevent a resubmit on refresh and back button.
	*/
	if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
	}
</script>