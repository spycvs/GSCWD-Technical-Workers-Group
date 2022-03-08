<!DOCTYPE html>
<html>
<head>
	<?php include('include/head.php'); ?>
	<title>TWG</title>
	<link rel="shortcut icon" type="image/png" href="favicon.png"/>
</head>
<body>
	<div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
		<div class="login-box bg-white box-shadow pd-30 border-radius-5">
			<img src="assets/images/l_outer.png" alt="login" width="2000" class="login-img">
			<h4 align="center"><strong>Technical Working Group</strong></h4>
			<p align="center">Login to your Account</p>
			<form action="login.php" method="post">
				<div class="input-group custom input-group-lg">
					<input type="text" class="form-control" id="username" name="username" placeholder="Username">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="input-group custom input-group-lg">
					<input type="password" class="form-control" id="password" name="password" placeholder="**********">
					<div class="input-group-append custom">
						<span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12" >
						<div class="input-group">
						
								<input class="btn btn-outline-primary btn-lg btn-block" type="submit" value="Sign In">
						
							<!--<a class="btn btn-outline-primary btn-lg btn-block">Sign In</a> -->
						</div>
					</div>
				</div>
				
			</form>
		</div>
	</div>
</body>
</html>