<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="optionModalTitle" id="updateAdminModal<?php echo $row['id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query_admin.php">
				<div class="modal-header">
					<h3 class="modal-title">Update Project</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Username</label>
							<input type="hidden" name="id" value="<?php echo $row['id']?>"/>
							<input type="text" class="form-control"  name="username" value="<?php echo $row['username']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control"  name="password" value="<?php echo $row['password']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>Firstname</label>
							<input type="text" class="form-control"  name="fname" value="<?php echo $row['fname']?>" class="form-control" required="required"/>
						</div>
                  <div class="form-group">
							<label>Lastname</label>
							<input type="text" class="form-control"  name="lname" value="<?php echo $row['lname']?>" class="form-control" required="required"/>
						</div>
                  <div class="form-group">
							<label>Type</label>
							<input type="text" class="form-control"  name="type" value="<?php echo $row['type']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
                                    <input type="hidden" name="size" value="1000000">
  	                                <div>
  	                                 <input type="file" name="image1">
  	                                </div>
							</div>
						<?php
									 $connection = mysqli_connect("localhost","root","");
									 $db = mysqli_select_db($connection, 'tech');
 $sql="SELECT * FROM users where id = '".$row['id']."'";
 // $result = $con->query($sql);
 $result = mysqli_query($connection, $sql);
 
 $row = mysqli_fetch_array($result);
 $image = $row['image'];
$image_src = "uploads/".$image;
?>
						<div class="form-group">
						<img src='<?php echo $image_src;  ?>' width="150px" heigt="150px" >
                                   
                                    
					</div>
				</div>
				<div style="clear:both;"></div>
				<div class="modal-footer">
					
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button name="update" class="btn btn-primary">Update</button>

				</div>
				</div>
			</form>
		</div>
	</div>
</div>