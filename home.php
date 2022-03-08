<?php include('session.php'); ?>
<!doctype html>

<html lang="en">

<head>


	<title>TWG</title>
	<link rel="shortcut icon" type="image/png" href="favicon.png" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/css/bootsrap/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bootsrap/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/bootsrap/style.css">
	<link rel="stylesheet" href="assets/css/bootsrap/main.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- javascript CSS -->
	<script src="assets/libs/js/bootstrap.min.js"></script>
	<script src="assets/libs/js/jquery.min.js"></script>
	<script src="assets/libs/js/jquery.slimscroll.min.js"></script>
	<script src="assets/libs/js/klorofil-common.js"></script>
	<script src="assets/libs/js/jquery.avatarInitial.min.js"></script>
	<script>
		var myWindow;

		function open_win() {
			myWindow = window.open("print.php");
		}
	</script>
	<script>
		function addProject() {
			var x = document.getElementById("bid");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}

		function bidEvaluationReport() {
			var x = document.getElementById("print");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}

		function postQualification() {
			var x = document.getElementById("eval");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}

		function infrastructureProject() {
			var x = document.getElementById("infra");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}

		function goodsProcurement() {
			var x = document.getElementById("goods");
			if (x.style.display === "none") {
				x.style.display = "block";
			} else {
				x.style.display = "none";
			}
		}
		$(document).ready(function() {
			$('#getUser').on('click', function() {
				var userID = $('#userSelect').val();
				$('#userInfo').load('getData.php?p_id=' + userID, function() {
					var printContent = document.getElementById('userInfo');
					var WinPrint = window.open('', '', 'width=900,height=650');
					WinPrint.document.write(printContent.innerHTML);
					WinPrint.document.close();
					WinPrint.focus();
					WinPrint.print();
					WinPrint.close();
				});
			});
		});
	</script>

</head>

<body>
	<div id="wrapper">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<img src="finallogo.png" width="150" height="55" alt="" />
			</div>
			<div class="container-fluid">
				<div class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><img src="arrow.png" width="25" height="24" alt="" /></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
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
		</nav>
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">

						<li><a href="home.php" class="active"><img src="home.png" width="26" height="27">&nbsp;<span>Dashboard</span></a></li>
						<!-- 	<li><a href="project.php"><img src="project.png" width="25" height="25">&nbsp;<span>Project</span></a></li> -->
						<?php
						if ($_SESSION['type'] == 'Admin') {
						?>
							<li><a href="manageadmin.php"><img src="manage.png" width="26" height="27">&nbsp;<span>Manage Users</span></a></li>
						<?php
						}
						?>
						<li><a href="account.php"><img src="admin.png" width="24" height="23">&nbsp;<span>Account</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<div class="main">
			<div class="main-content">
				<div class="container-fluid">
					<!-- CONTENT HERE -->

					<style>
						textarea {
							resize: vertical;
						}

						.dropdown-menu {
							right: 0;
							left: auto;
						}

						.dropdown {
							cursor: pointer;
						}
					</style>

					<div class="row">
						<div class="col-md-12">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Dashboard</h3>
								</div>
								<div class="panel-body no-padding">
									<button type="button" class="btn btn-primary" onclick="addProject()">
										Add Project
									</button>
									<button type="button" class="btn btn-primary" onclick="bidEvaluationReport()">
										Bid Evaluation Report
									</button>
									<button type="button" class="btn btn-primary" onclick="postQualification()">
										Post Qualification Evaluation Summary Report
									</button>
									<button type="button" class="btn btn-primary" onclick="infrastructureProject()">
										Checklist for Infrastructure Project
									</button>
									<button type="button" class="btn btn-primary" onclick="goodsProcurement()">
										Checklist for Procurement of Goods
									</button>
									<!-- Add toggle 
-->
									<div id="bid" style="display:none">
										<div class="col-md-12">
											<form action="addbid.php" method="POST">
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Project Reference No. </label>
															<input type="text" id="p_id" name="p_id" class="form-control" required>
															</select>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<label style="font-size:12px">Project Title </label>
															<input type="text" id="p_title" name="p_title" class="form-control" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label style="font-size:12px">Project Location </label>
															<input type="text" id="p_location" name="p_location" class="form-control" required>
														</div>
													</div>
													<div class="col-md-6">
														<div class="form-group">
															<label style="font-size:12px">Approved Budget of the Contract </label>
															<input type="text" id="p_budget" name="p_budget" class="form-control" placeholder="Use comma(,) as thousand separators" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Purchase Request No. :</label>
															<input type="text" id="purchaseNo" name="purchaseNo" class="form-control" required>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Method of Procurement :</label>
															<select id="procurement" name="procurement" class="form-control">
																<option value="Public Bidding">Public Bidding</option>
																<option value="Negotiation">Negotiation</option>
																<option value="Procurement of Goods">Procurement of Goods</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Date of Posting/Issuance Invitation to Bid From :</label>
															<input type="text" id="dateOfPosting" name="dateOfPosting" placeholder="Month Date, Year" class="form-control" required>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Date of Posting/Issuance Invitation to Bid To :</label>
															<input type="text" id="deadlineOfInvitation" name="deadlineOfInvitation" placeholder="Month Date, Year" class="form-control" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Number of Invited Bidders :</label>
															<select id="numberInvitedBidders" name="numberInvitedBidders" class="form-control">
																<option value="One (1)">1</option>
																<option value="Two (2)">2</option>
																<option value="Three (3)">3</option>
																<option value="Four (4)">4</option>
																<option value="Five (5)">5</option>
																<option value="Six (6)">6</option>
																<option value="Seven (7)">7</option>
																<option value="Eight (8)">8</option>
																<option value="Nine (9)">9</option>
																<option value="Ten (10)">10</option>
															</select>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<label style="font-size:12px">Name of Invited Bidders :</label>
															<input type="text" id="nameInvitedBidders" name="nameInvitedBidders" placeholder="Separate with comma ( , )" class="form-control" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">No. of Bidders who purchased the bid documents :</label>
															<select id="noPurchasedBid" name="noPurchasedBid" class="form-control">
																<option value="One (1)">1</option>
																<option value="Two (2)">2</option>
																<option value="Three (3)">3</option>
																<option value="Four (4)">4</option>
																<option value="Five (5)">5</option>
																<option value="Six (6)">6</option>
																<option value="Seven (7)">7</option>
																<option value="Eight (8)">8</option>
																<option value="Nine (9)">9</option>
																<option value="Ten (10)">10</option>
															</select>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<label style="font-size:12px">Name of Bidders who purchased the bid documents :</label>
															<input type="text" id="namePurchasedBid" name="namePurchasedBid" placeholder="Separate with comma ( , )" class="form-control" required>
														</div>
													</div>
												</div>

												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Number of Bid Docs issued :</label>
															<select id="noBidIssued" name="noBidIssued" class="form-control" required>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Deadline of Submission of Bid :</label>
															<input type="text" id="deadlineOfBid" name="deadlineOfBid" placeholder="Month Date, Year" class="form-control date-picker" required>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Bid Opening Time :</label>
															<input type="text" id="bidTime" name="bidTime" placeholder="HH:MM AM/PM" class="form-control" placeholder="HH:MM AM/PM" required>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Number of bids submitted :</label>
															<select id="numberBidsSubmitted" name="numberBidsSubmitted" class="form-control" required>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
																<option value="5">5</option>
																<option value="6">6</option>
																<option value="7">7</option>
																<option value="8">8</option>
																<option value="9">9</option>
																<option value="10">10</option>
															</select>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Type of Bid Security :</label>
															<input type="text" id="typeBidSec" name="typeBidSec" class="form-control" required>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Amount of Bid Security :</label>
															<input type="text" id="amountBidSec" name="amountBidSec" class="form-control">
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Quantity :</label>
															<input type="text" id="qty" name="qty" class="form-control" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Bid as Calculated amount (php):</label>
															<input type="text" id="prospectBid" name="prospectBid" class="form-control" placeholder="Use comma(,) as thousand separators " required>
														</div>
													</div>
													<div class="col-md-9">
														<div class="form-group">
															<label style="font-size:12px">Bidder Identification/Name :</label>
															<input type="text" id="nameProspect" name="nameProspect" class="form-control" required>
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Rank of Bidder :</label>
															<input type="text" id="rank" name="rank" class="form-control" required>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Post-Qualified / Post Disqualified :</label>
															<select id="qualification" name="qualification" class="form-control">
																<option value="Post-Qualified">Post-Qualified</option>
																<option value="Post Disqualified">Post Disqualified</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Bidder Remarks :</label>
															<select id="results" name="results" class="form-control">
																<option value="Responsive Bidder">Responsive Bidder</option>
															</select>
														</div>
													</div>
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Period of Post-Qualification :</label>
															<input type="text" id="periodPostQual" name="periodPostQual" class="form-control">
														</div>
													</div>
												</div>
												<div class="row">
													<div class="col-md-3">
														<div class="form-group">
															<label style="font-size:12px">Grounds :</label>
															<input type="text" id="grounds" name="grounds" class="form-control" required>
														</div>
													</div>

												</div>
												<button type="submit" name="insert" class="btn btn-primary" onclick="return confirm('Are you sure to Add Project?');"> Add </button>
											</form>
										</div>
									</div>



									<div id="print" style="display:none">
										<div class="col-md-12">
											<form action="" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label style="font-size:12px">Bid Evaluation Report</label>
															<select id="projectSelect" name="projectSelect" class="form-control">
																<option value="">Select Project</option>
																<?php
																// Include the database configuration file
																require_once 'printdb.php';

																// Fetch the users from the database
																$result = $db->query("SELECT p_id, p_title FROM bidevaluation");
																$row = mysqli_num_rows($sql);
																while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['p_id'] . "'>" . $row['p_title'] . "</option>";
																}
																?>

															</select>

														</div>
													</div>
												</div>
												<button id="getUser" type="submit" name="print" class="btn btn-primary" onclick="window.open('bidevalallprojects.php?projectSelect='+document.getElementById('projectSelect').value,'MyWindow','toolbar=no,location=no,directories=no,status=no, menubar=no,scrollbars=no,width=950,height=750'); return false;">Print</button>

											</form>

											<div id="userInfo" style="display: none;"></div>
										</div>

									</div>
									<div id="eval" style="display:none">
										<div class="col-md-12">
											<form action="" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label style="font-size:12px">Post Qualification Evaluation Summary Report </label>

															<select id="projectSelect1" name="projectSelect" class="form-control">
																<option value="">Select Project</option>
																<?php
																// Include the database configuration file
																require_once 'printdb.php';

																// Fetch the users from the database
																$result = $db->query("SELECT p_id, p_title FROM bidevaluation");
																$row = mysqli_num_rows($sql);
																while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['p_id'] . "'>" . $row['p_title'] . "</option>";
																}
																?>
															</select>

														</div>
													</div>
												</div>
												<button id="getUser" type="submit" name="print" class="btn btn-primary" onclick="window.open('postqualiallprojects.php?projectSelect1='+document.getElementById('projectSelect1').value,'MyWindow','toolbar=no,location=no,directories=no,status=no, menubar=no,scrollbars=no,width=950,height=750'); return false;">Print</button>

											</form>

											<div id="userInfo" style="display: none;"></div>
										</div>
									</div>
									<div id="infra" style="display:none">
										<div class="col-md-12">
											<form action="" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label style="font-size:12px">Checklist for Infrastructure Project</label>

															<select id="projectSelect2" name="projectSelect" class="form-control">
																<option value="">Select Project</option>
																<?php
																// Include the database configuration file
																require_once 'printdb.php';

																// Fetch the users from the database
																$result = $db->query("SELECT p_id, p_title FROM bidevaluation WHERE projectType='Infrastructure'");
																$row = mysqli_num_rows($sql);
																while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['p_id'] . "'>" . $row['p_title'] . "</option>";
																}
																?>

															</select>

														</div>
													</div>
												</div>
												<button id="getUser" type="submit" name="print" class="btn btn-primary" onclick="window.open('printinfra.php?projectSelect2='+document.getElementById('projectSelect2').value,'MyWindow','toolbar=no,location=no,directories=no,status=no, menubar=no,scrollbars=no,width=950,height=750'); return false;">Print</button>

											</form>

											<div id="userInfo" style="display: none;"></div>
										</div>
									</div>
									<div id="goods" style="display:none">
										<div class="col-md-12">
											<form action="" method="post">
												<div class="row">
													<div class="col-md-6">
														<div class="form-group">
															<label style="font-size:12px">Checklist for Procurement of Goods</label>

															<select id="projectSelect3" name="projectSelect" class="form-control">
																<option value="">Select Project</option>
																<?php
																// Include the database configuration file
																require_once 'printdb.php';

																// Fetch the users from the database
																$result = $db->query("SELECT p_id, p_title FROM bidevaluation WHERE projectType='Goods'");
																$row = mysqli_num_rows($sql);
																while ($row = mysqli_fetch_array($result)) {
																	echo "<option value='" . $row['p_id'] . "'>" . $row['p_title'] . "</option>";
																}
																?>

															</select>

														</div>
													</div>
												</div>
												<button id="getUser" type="submit" name="print" class="btn btn-primary" onclick="window.open('printgoods.php?projectSelect3='+document.getElementById('projectSelect3').value,'MyWindow','toolbar=no,location=no,directories=no,status=no, menubar=no,scrollbars=no,width=950,height=750'); return false;">Print</button>

											</form>

											<div id="userInfo" style="display: none;"></div>
										</div>
									</div>
									<div class="panel-footer">
										<div class="row">
											<div class="col-md-2">

											</div>
										</div>
										<div class="row">
											<div class="col-md-6">&nbsp;</div>
										</div>

									</div>
								</div>
							</div>

							<!-- Add For Bid Eval 
-->
							<div class="row">
								<div class="col-md-12">
									<div class="panel">
										<div class="panel-heading">
											<h3 class="panel-title"></h3>
										</div>
										<div class="panel-body no-padding">
											<div class="panel-body no-padding" style="overflow-x:auto;">
												<?php
												$connection = mysqli_connect("localhost", "root", "");
												$db = mysqli_select_db($connection, 'tech');

												$query = "SELECT * FROM bidevaluation";
												$query_run = mysqli_query($connection, $query);
												?>


												<table class="table table-striped" style="margin-bottom: 0px;">
													<thead>
														<tr>
															<th width="100px">Project Reference No:</th>
															<th>Project Title</th>
															<th>Location</th>
															<th>Budget</th>
															<th>Update</th>
															<th>Delete</th>
														</tr>
													</thead>
													<!--2.) fetch data to table-->
													<?php
													if ($query_run) {
														foreach ($query_run as $row) {
													?>
															<tbody>
																<tr>
																	<!--4.) for display to table-->
																	<td><?php echo $row['p_id']; ?></td>
																	<td><?php echo $row['p_title']; ?></td>
																	<td><?php echo $row['p_location'];  ?></td>
																	<td><?php echo $row['p_budget'];   ?></td>

																	<th> <button class="btn btn-success" data-toggle="modal" type="button" data-target="#updateModal<?php echo $row['p_id'] ?>"></span>Update</button></td>
																		<?php include('updatebid.php'); ?>
																	</th>
																	<form action="deletebid.php" method="post">
																		<input type="hidden" name="p_id" value="<?php echo $row['p_id'] ?>">
																		<th> <input type="submit" name="delete" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');" value="DELETE"> </th>
																	</form>
																	</td>
																</tr>

																</tr>
															</tbody>
													<?php
														}
													} else {
														echo "No Record Found";
													}
													?>
												</table>
											</div>
											<div class="panel-footer">
												<div class="row">
													<div class="col-md-2">

													</div>
												</div>

												<div>&nbsp;</div>

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

						<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
						<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
						</script>
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
						<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
						<script>
							$(function() {
								$("#datepicker").datepicker();
							});
						</script>
</body>

</html>