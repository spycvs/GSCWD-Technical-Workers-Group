
<!doctype html>

<html lang="en">
<head>
	

<title>Projects</title>
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
    <script>
function open_win() {
  window.open("bideval.php");
}
</script>
	
</head>
<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
	<div class="brand">
    <img src="logo_2.png" width="150" height="55" alt=""/>
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
				<li><a href="project.php" class="active"><img src="project.png" width="25" height="25">&nbsp;<span>Project</span></a></li>
				<li><a href="manageadmin.php" ><img src="manage.png" width="26" height="27">&nbsp;<span>Manage Users</span></a></li>
				<li><a href="account.php" ><img src="admin.png" width="24" height="23">&nbsp;<span>Account</span></a></li>
			</ul>
		</nav>
	</div>
</div>		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
                <!-- CONTENT HERE -->
                    
                    <style> 
                        textarea { 
                            resize:vertical;
                        }
                        .dropdown-menu {
                            right: 0;
                            left: auto;
                        }
                        .dropdown{
                            cursor: pointer;
                        }
                    </style>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h2 class="panel-title">Projects</h2>
                                </div>
                                <div class="panel-body no-padding" style="overflow-x:auto;" >
                                <?php
                                            $connection = mysqli_connect("localhost","root","");
                                            $db = mysqli_select_db($connection, 'tech');

                                            $query = "SELECT * FROM projects";
                                            $query_run = mysqli_query($connection, $query);
                                        ?>
                                          

                                    <table class="table table-striped" style="margin-bottom: 0px;">
                                                <thead>
                                                    <tr>
                                                        <th width="100px">Project Reference No:</th>
                                                        <th>Project Title</th>
                                                        <th>Location</th>                                   
                                                        <th>Budget</th>
                                                        <th>BID</th>
                                                        <th>Update</th>
                                                        <th>Delete</th>
                                                    </tr>
                                                </thead>
                                            <!--2.) fetch data to table-->
                                            <?php
                                                if($query_run)
                                                {
                                                    foreach($query_run as $row)
                                                    {
                                            ?>
                                              <tbody>
                                                    <tr>
                                                    <!--4.) for display to table-->
                                                        <td><?php echo $row['pid'];?></td>
                                                        <td><?php echo $row['p_title'];?></td>
                                                        <td><?php echo $row['p_location'];  ?></td>
                                                        <td><?php echo $row['p_budget'];   ?></td>
                                                        <td><button type="button" class="btn btn-primary" value="Open Window" onclick="open_win()">
											BID EVALUATION
										</button>
                                        </td>
                                                         <th> <button class="btn btn-success" data-toggle="modal" type="button" data-target="#updateModal<?php echo $row['pid']?>"></span>Update</button></td>
                                                         <?php include('updateproject.php'); ?>
                                                         </th>
                                                        <form action="deleteproject.php" method="post">
                                                      <input type="hidden" name="pid" value="<?php echo $row['pid'] ?>">
                                                             <th> <input type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" value="DELETE"> </th>
                                                             </form>  
                                                  </td>
                                                 </tr>

                                                    </tr>
                                             </tbody>

                                             
                                             <?php
                                                }
                                            }
                                            else
                                            {
                                                echo "No Record Found";
                                            }
                                          ?>
                                    </table>
                                </div>
                              <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-2">
										<button type="button" class="btn btn-secondary mb-2" data-toggle="modal" data-target="#AddProject">
											Add Project
										</button>
									
									</div>
</div>
                                <div class="row">
                                  <div class="col-md-6">&nbsp;</div>
</div>
								  
                              </div>
                    </div>

                    <div class="modal fade" id="optionModal" tabindex="-1" role="dialog" aria-labelledby="optionModalTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="optionModalTitle">Modal title</h3>
                                </div>
                                <div class="modal-body" id="optionModalBody">
                                ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <a href="#"  id="optionModalAction" class="btn">Save changes</a>
                                </div>
                            </div>
                        </div>
                    </div>
							<!-- modal small -->
			<div class="modal fade" id="AddProject" tabindex="-1" role="dialog" aria-labelledby="optionModalTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h3 class="modal-title" id="optionModalTitle">Add Project</h3>
                                </div>
                                <form action="addproject.php" method="POST">	
                                <div class="modal-body" id="optionModalBody">
                                <form class="panel-body" method="post" action="recipients_save.php">

                                    <div class="form-group">
                                        <label for="pid" class="control-label sr-only">Project Reference NO.</label>
                                        <input type="text" class="form-control" id="pid" name="pid" placeholder="Project Reference No." required>
                                    </div>
                                    <div class="form-group">
                                        <label for="p_title" class="control-label sr-only">Project Title</label>
                                        <input type="text" class="form-control" id="p_title" name="p_title" placeholder="Project Title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="p_location" class="control-label sr-only">Location</label>
                                        <input type="text" class="form-control" id="p_location" name="p_location" placeholder="Location" required>
                                    </div>
									<div class="form-group">
                                        <label for="p_budget" class="control-label sr-only">Approved Budget</label>
                                        <input type="number" class="form-control" id="p_budget" name="p_budget" placeholder="Approved Budget" required>
                                    </div>
                                    
									<div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="insert" class="btn btn-primary" onclick="return confirm('New User Added');"> Add  </button>

                                  
                                </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
			<!-- end modal small -->

            

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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js">
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



</body>
</html>
