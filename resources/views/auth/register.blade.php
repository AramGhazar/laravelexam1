<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
</head>

</body>
<div class="container">
<hr>
<div class="card bg-light">
	
<article class="card-body mx-auto" style="max-width: 400px;">
	<h4 class="card-title mt-3 text-center">Create Account</h4>
	<p class="text-center">Get started with your free account</p>
	<form action="{{ route('register') }}" method="POST">
		@csrf
		<div class="form-group input-group">
			<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 	</div>
        	<input name="name" class="form-control" placeholder="Full name" type="text">
    	</div> <!-- form-group// -->
    	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" placeholder="Email address" type="text">
    	</div> <!-- form-group// -->
    	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-building"></i> </span>
		</div>
		<select class="form-control" name="role">
			<option selected=""> Select job type</option>
			<option value="manager">Manager</option>
			<option value="development">Development</option>
		</select>
		</div> <!-- form-group end.// -->
    	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Create password" type="password" name="password">
    	</div> <!-- form-group// -->
    	<div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
		</div>
        <input class="form-control" placeholder="Repeat password" type="password" name="password_confirmed">
    	</div> <!-- form-group// -->                                      
    	<div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    	</div> <!-- form-group// -->      
    	<p class="text-center">Have an account? <a href="">Log In</a> </p>                                                                 
	</form>
</article>
</div> <!-- card.// -->

</div> 
<!--container end.//-->

<br><br>


</body>
</html>