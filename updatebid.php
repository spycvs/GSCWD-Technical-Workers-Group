<div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="optionModalTitle" id="updateModal<?php echo $row['p_id']?>" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<form method="POST" action="update_query_bid.php">
				<div class="modal-header">
					<h3 class="modal-title">Update Project</h3>
				</div>
				<div class="modal-body">
						<div class="row">
						<div class="col-md-12">
						<div class="form-group">
							<label style="font-size:12px">Project Title</label>
							<input type="hidden" name="p_id" value="<?php echo $row['p_id']?>"/>
							<input type="text" class="form-control"  name="p_title" value="<?php echo $row['p_title']?>" class="form-control" required="required"/>
						</div>
						</div>
						</div>
						<div class="row">
						<div class="col-md-12">
						<div class="form-group">
							<label style="font-size:12px">Location</label>
							<input type="text" class="form-control"  name="p_location" value="<?php echo $row['p_location']?>" class="form-control" required="required" />
						</div>
						</div>
						</div>
						<div class="row">
						<div class="col-md-4">
						<div class="form-group">
							<label style="font-size:12px">Approved Budget</label>
							<input type="text" class="form-control"  name="p_budget" value="<?php echo $row['p_budget']?>" class="form-control" required="required"/>
						</div>
						</div>
						<div class="col-md-4">
						<div class="form-group">
							<label style="font-size:12px">Purchase Request No. :</label>
							<input type="text" class="form-control"  name="purchaseNo" value="<?php echo $row['purchaseNo']?>" class="form-control" required="required"/>
						</div>
						</div>
						<div class="col-md-4">
						<div class="form-group">
							<label style="font-size:12px">Method of Procurement :</label>
							<input type="text" class="form-control"  name="procurement" value="<?php echo $row['procurement']?>" class="form-control" required="required"/>
						</div>
						</div>
						</div>
						<div class="row">
						<div class="col-md-6">
							<div class="form-group">
                            <label style="font-size:12px">Date of Posting/Issuance of Invitation to Bid From :</label>
                            <input type="text" id="dateOfPosting" name="dateOfPosting" value="<?php echo $row['dateOfPosting']?>" class="form-control" required>
							</div>
							</div>
                            <div class="col-md-6">
							<div class="form-group">
							<label style="font-size:12px">Date of Posting/Issuance of Invitation to Bid To :</label>
							<input type="text" id="deadlineOfInvitation" name="deadlineOfInvitation" value="<?php echo $row['deadlineOfInvitation']?>" class="form-control" required>
							</div>
							</div>
							</div>
                            <div class="row">
                            <div class="col-md-4">
							<div class="form-group">
                            <label style="font-size:12px">Number of Invited Bidders :</label>
                            <input type="text" id="numberInvitedBidders" name="numberInvitedBidders" value="<?php echo $row['numberInvitedBidders']?>" class="form-control" required>
							</div>
							</div>
							<div class="col-md-8">
							<div class="form-group">
							<label style="font-size:12px">Name of Invited Bidders :</label>
							<input type="text" id="nameInvitedBidders" name="nameInvitedBidders" value="<?php echo $row['nameInvitedBidders']?>" class="form-control" required>
							</div>
							</div>
							</div>
                            <div class="row">
                            <div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">No. of Bidders who purchased the bid documents  :</label>
							<input type="text" id="noPurchasedBid" name="noPurchasedBid" value="<?php echo $row['noPurchasedBid']?>" class="form-control" required>
							</div>
							</div>
                            <div class="col-md-8">
							<div class="form-group">
							<label style="font-size:12px">Name of Bidders who purchased the bid documents :</label>
							<input type="text" id="namePurchasedBid" name="namePurchasedBid" value="<?php echo $row['namePurchasedBid']?>" class="form-control" required>
							</div>
							</div>
							</div>
                            <div class="row">
                            <div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Number of Bid Docs issued  :</label>
							<input type="number" id="noBidIssued" name="noBidIssued" value="<?php echo $row['noBidIssued']?>" class="form-control" required>
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Deadline of Submission of Bid  :</label>
							<input type="text" id="deadlineOfBid" name="deadlineOfBid" value="<?php echo $row['deadlineOfBid']?>" class="form-control" required>
							</div>
							</div>
                            <div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Bid Opening Time :</label>
							<input type="text" id="bidTime" name="bidTime" value="<?php echo $row['bidTime']?>" class="form-control" required>
							</div>
							</div>
							</div>
							<div class="row">
                            <div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Number of bids submitted :</label>
							<input type="number" id="numberBidsSubmitted" name="numberBidsSubmitted" value="<?php echo $row['numberBidsSubmitted']?>" class="form-control" required>
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Type of Bid Security :</label>
							<input type="text" id="typeBidSec" name="typeBidSec" value="<?php echo $row['typeBidSec']?>" class="form-control" required>
							</div>
							</div>
                            <div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Amount of Bid Security :</label>
							<input type="text" id="amountBidSec" name="amountBidSec" value="<?php echo $row['amountBidSec']?>" class="form-control">
							</div>
							</div>
							</div>
                            <div class="row">
							<div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">QTY :</label>
							<input type="text" id="qty" name="qty" value="<?php echo $row['qty']?>" class="form-control" required>
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Bid as Calculated amount:</label>
							<input type="text" id="prospectBid" name="prospectBid" value="<?php echo $row['prospectBid']?>" class="form-control" required>
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Rank of Bidder :</label>
							<input type="text" id="rank" name="rank" value="<?php echo $row['rank']?>" class="form-control" required>
							</div>
							</div>
                            <div class="col-md-8">
							<div class="form-group">
							<label style="font-size:12px">Bidder Identification/Name :</label>
							<input type="text" id="nameProspect" name="nameProspect" value="<?php echo $row['nameProspect']?>" class="form-control" required>
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Post-Qualified / Post Disqualified :</label>
							<input type="text" id="qualification" name="qualification" value="<?php echo $row['qualification']?>" class="form-control" required>
							</div>
							</div>
							</div>
                            <div class="row">
							<div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Bidder Remarks :</label>
							<input type="text" id="results" name="results" value="<?php echo $row['results']?>" class="form-control" required>
							</div>
							</div>
							<div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Period of Post-Qualification :</label>
							<input type="text" id="periodPostQual" name="periodPostQual" value="<?php echo $row['periodPostQual']?>" class="form-control" >
							</div>
							</div>
                            <div class="col-md-4">
							<div class="form-group">
							<label style="font-size:12px">Grounds :</label>
							<input type="text" id="grounds" name="grounds" value="<?php echo $row['grounds']?>" class="form-control" required>
							</div>
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