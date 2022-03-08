	<div class="pre-loader"></div>
	<div class="header clearfix">
		<div class="header-right">
			<div class="brand-logo">
				<a href="home.php">
					<img src="vendors/images/logo.png" width="50" alt="" class="mobile-logo">
				</a>
			</div>
			<div class="menu-icon">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
			<div class="user-info-dropdown">
				<div class="dropdown">
					<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
						<span class="user-icon"><i class="fa fa-user-o"></i></span>
						<span class="user-name"><?php echo ($_SESSION['SESS_MEMBER_USER']); ?></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<a class="dropdown-item" href="profile.php"><i class="fa fa-cog" aria-hidden="true"></i> Setting</a>
						<a class="dropdown-item" href="logout.php" onclick="return confirm('Are you sure to logout?');"><i class="fa fa-sign-out" aria-hidden="true"></i>Log Out</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>