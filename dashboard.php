<!doctype html>
<html lang="en">
<head>
	

<title>Dashboard</title>
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
	
<style>
.dropdown-submenu {
  position: relative;
}

.dropdown-submenu .dropdown-menu {
  top: 0;
  left: 100%;
  margin-top: -1px;
}
</style>
	
	<!-- Bootstrap CSS -->
	
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/libs/css/style.css">
    <link rel="stylesheet" href="../assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
	
	
	<!-- javascript CSS -->
	<script src="assets/libs/js/bootstrap.min.js"></script>
	<script src="assets/libs/js/jquery.min.js"></script>
	<!--<script src="assets/libs/js/jquery.slimscroll.min.js"></script>-->
	<script src="assets/libs/js/klorofil-common.js"></script>
	
	
</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
	<div class="brand">
		<img src="logo_2.png" width="200" height="52" alt=""/>
	</div>
	<div class="container-fluid">
		<div class="navbar-btn">
			<button type="button" class="btn-toggle-fullwidth"><img src="assets/images/a.png" width="25" height="24" alt=""/></button>
		</div>
					<form class="navbar-form navbar-left">
				<div class="input-group">
					<input type="text" value="" id="dashboard_search" class="form-control" placeholder="Search Devices">
				</div>
			</form>
				<div id="navbar-menu">
			<ul class="nav navbar-nav navbar-right">
			  <li class="dropdown">
			  <?php include('session.php'); ?>
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/images/user.png" class="name" data-name="admin">
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
				<li><a href="dashboard.php" class="active"><img src="assets/images/map.png" width="25" height="26">&nbsp;<span>Dashboard</span></a></li>
				<li><a href="project.php" ><img src="assets/images/chip.png" width="28" height="28">&nbsp;<span>Project</span></a></li>
				<li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><img src="assets/images/manage.png" width="25" height="25">&nbsp;Manage Admin <span class="badge badge-success"></span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a href="manage_admin.php" class="">View Active </a>
                                        </li>
										<li class="nav-item">
                                            <a href="manage_declined.php" class="">Revoked Users </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
				<li><a href="account.php" ><img src="assets/images/admin.png" width="26" height="25">&nbsp;<span>Account</span></a></li>
			</ul>
		</nav>
	</div>
</div>		<div class="main">
			<div class="main-content no-padding">
				<div class="container-fluid no-padding">
				<!-- CONTENT HERE -->
				<style> 
                        textarea { 
                            resize:vertical;
                        }

                        #map {
							display: block;
							position: relative;
							height: 600px;
							width: 100%;
						}

                        .btn-xs{
                            padding: 1  px 18px;
                        }
                    </style>

				<div id="map"></div>

				<script>
					var marker = [];
					var map;
					
                    function initMap() {
   					 map = new google.maps.Map(document.getElementById('map'), {
          			center: {lat: 6.116243, lng: 125.171738},
          zoom: 15
        });
 
					}
				</script>
				<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBSQgM6LguOqMzvXfPL_G6NcpfxGnbSrko&callback&callback=initMap"></script>
				<!-- CONTENT HERE -->
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
