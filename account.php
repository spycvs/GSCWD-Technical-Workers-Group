

<!doctype html>

<html lang="en">
<head>
	

<title>Account</title>
<link rel="shortcut icon" type="image/png" href="favicon.png"/>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootsrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootsrap/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/bootsrap/style.css">
	<link rel="stylesheet" href="assets/css/bootsrap/main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700">
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<!-- javascript CSS -->
	<script src="assets/libs/js/bootstrap.min.js"></script>
	<script src="assets/libs/js/jquery.min.js"></script>
	<script src="assets/libs/js/jquery.slimscroll.min.js"></script>
	<script src="assets/libs/js/klorofil-common.js"></script>
	<script src="assets/libs/js/jquery.avatarInitial.min.js"></script>
	<script language="JavaScript">
  /**
    * Disable right-click of mouse, F12 key, and save key combinations on page
    * By Arthur Gareginyan (arthurgareginyan@gmail.com)
    * For full source code, visit https://mycyberuniverse.com
    */
  window.onload = function() {
    document.addEventListener("contextmenu", function(e){
      e.preventDefault();
    }, false);
    document.addEventListener("keydown", function(e) {
    //document.onkeydown = function(e) {
      // "I" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
        disabledEvent(e);
      }
      // "J" key
      if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
        disabledEvent(e);
      }
      // "S" key + macOS
      if (e.keyCode == 83 && (navigator.platform.match("Mac") ? e.metaKey : e.ctrlKey)) {
        disabledEvent(e);
      }
      // "U" key
      if (e.ctrlKey && e.keyCode == 85) {
        disabledEvent(e);
      }
      // "F12" key
      if (event.keyCode == 123) {
        disabledEvent(e);
      }
    }, false);
    function disabledEvent(e){
      if (e.stopPropagation){
        e.stopPropagation();
      } else if (window.event){
        window.event.cancelBubble = true;
      }
      e.preventDefault();
      return false;
    }
  };
</script>
	
</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
	<div class="brand">
	<img src="finallogo.png" width="150" height="55" alt=""/>
	</div>
	<div class="container-fluid">
		<div class="navbar-btn">
		<button type="button" class="btn-toggle-fullwidth"><img src="arrow.png" width="25" height="24" alt=""/></button>
		</div>
				<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
				<?php include('session.php'); ?>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="admin.png" class="name" data-name="admin">
						<span><?php echo $_SESSION['name']; ?></span>
					</a>
					<ul class="dropdown-menu">
						<li><a href="account.php"><img src="assets/images/u.png" width="17" height="17">&nbsp;&nbsp;<span>Account</span></a></li>
						<li><a href="log.php" onclick="return confirm('Are you sure to logout?');"><img src="assets/images/logout.png" width="15" height="15">&nbsp;&nbsp;<span>Logout</span></a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>		<div id="sidebar-nav" class="sidebar">
	<div class="sidebar-scroll">
		<nav>
			<ul class="nav">
				<li><a href="home.php" ><img src="home.png" width="26" height="27">&nbsp;<span>Dashboard</span></a></li>
		<!--		<li><a href="project.php" ><img src="project.png" width="25" height="25">&nbsp;<span>Project</span></a></li> -->
		<?php
          if($_SESSION['type'] == 'Admin')
          {
          ?>
				<li><a href="manageadmin.php"><img src="manage.png" width="26" height="27">&nbsp;<span>Manage Users</span></a></li>
				<?php
          }
          ?>
				<li><a href="account.php" class="active"><img src="admin.png" width="24" height="23">&nbsp;<span>Account</span></a></li>
			</ul>
		</nav>
	</div>
</div>		<div class="main">
			<!-- CONTENT HERE -->
			<div class="main-content">
				<div class="container-fluid">
					<!--CONTENT HERE-->
					<?php
									 $connection = mysqli_connect("localhost","root","");
									 $db = mysqli_select_db($connection, 'tech');
 $sql="SELECT * FROM users where id = '".$_SESSION['id']."'";
 // $result = $con->query($sql);
 $result = mysqli_query($connection, $sql);
 
 $row = mysqli_fetch_array($result);
 $image = $row['image'];
$image_src = "uploads/".$image;
?>
									

					<div class="panel panel-profile" style="min-height: 500px;">
						<div class="clearfix">
							<div class="profile-left">
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
									

<img src='<?php echo $image_src;  ?>' width="150px" heigt="150px" >
										<h3 class="name"><?php echo $_SESSION['name']; ?></h3>
									</div>
								</div>
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Basic Info</h4>
										<ul class="list-unstyled list-justify">
											<li>User ID <span><?php echo $_SESSION['id']; ?></span></li>
											<li>Username <span><?php echo $_SESSION['name']; ?></span></li>
											<li>Firstname <span><?php echo $_SESSION['fname']; ?></span></li>
											<li>Lastname <span><?php echo $_SESSION['lname']; ?></span></li>
										</ul>
									</div>
								</div>
							</div>
						
							</div>
						</div>
					</div>


					<!--CONTENT HERE-->
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
<footer>
	<div class="container-fluid">
		<p class="copyright">&copy; 2019 General Santos City Water District. All Rights Reserved.</p>
	</div>
</footer>
</body>
</html>
