<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
</head>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Sign In</h3>
				
			</div>
			<div class="card-body">
				<form action="process-login.php" method="POST">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-envelope"></i></span>
						</div>
						<input type="email" class="form-control" name="txtEmail" id="txtEmail" placeholder="email">
            
					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="fas fa-key"></i></span>
						</div>
						<input type="password" class="form-control" name="txtPassword" id="txtPassword" placeholder="Password">
            
					</div>
					<div class="row align-items-center remember">
						<input type="checkbox">Remember Me
					</div>
					<div class="form-group">
						<input type="submit" value="Login" class="btn float-right login_btn" name="txtLogin" id="txtLogin" >
					</div>
				</form>
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					Don't have an account?<a href="register.php">Sign Up</a>
				</div>
				<div class="d-flex justify-content-center">
					<a href="#">Forgot your password?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
<style>
      
/* Made with love by Mutiullah Samim*/

@import url('https://fonts.googleapis.com/css?family=Numans');

html,body{
background-image: url('../image/bar.jpg');
background-size: cover;
background-repeat: no-repeat center;
height: 100%;
font-family: 'Numans', sans-serif;

}

.container{
height: 100%;
align-content: center;
}

.card{
height: 370px;
margin-top: auto;
margin-bottom: auto;
width: 400px;
background-color: rgba(0,0,0,0.7) !important;
}



.card-header h3{
color: white;
}



.input-group-prepend span{
width: 50px;
background-color: #FFC312;
color: black;
border:0 !important;
}

input:focus{
outline: 0 0 0 0  !important;
box-shadow: 0 0 0 0 !important;

}

.remember{
color: white;
}

.remember input
{
width: 20px;
height: 20px;
margin-left: 15px;
margin-right: 5px;
}

.login_btn{
color: black;
background-color: #FFC312;
width: 100px;
}

.login_btn:hover{
color: black;
background-color: white;
}

.links{
color: white;
}

.links a{
margin-left: 4px;
}
</style>