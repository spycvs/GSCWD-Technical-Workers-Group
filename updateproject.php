<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="optionModalTitle" id="updateModal<?php echo $row['pid']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query.php">
				<div class="modal-header">
					<h3 class="modal-title">Update Project</h3>
				</div>
				<div class="modal-body">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<div class="form-group">
							<label>Project Title</label>
							<input type="hidden" name="pid" value="<?php echo $row['pid']?>"/>
							<input type="text" class="form-control"  name="p_title" value="<?php echo $row['p_title']?>" class="form-control" required="required"/>
						</div>
						<div class="form-group">
							<label>Location</label>
							<input type="text" class="form-control"  name="p_location" value="<?php echo $row['p_location']?>" class="form-control" required="required" />
						</div>
						<div class="form-group">
							<label>Approved Budget</label>
							<input type="number" class="form-control"  name="p_budget" value="<?php echo $row['p_budget']?>" class="form-control" required="required"/>
						</div>
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