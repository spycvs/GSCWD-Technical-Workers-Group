<?php

	//db info needed to connect
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tech";

	/* Attempt to connect to MySQL database */
$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


 
if(ISSET($_POST['update'])){
		$p_id = $_POST['p_id'];
		$p_title = $_POST['p_title'];
		$p_location = $_POST['p_location'];
		$p_budget = $_POST['p_budget'];
		$purchaseNo = $_POST['purchaseNo'];
		$procurement = $_POST['procurement'];
		$dateOfPosting = $_POST['dateOfPosting'];
		$deadlineOfInvitation = $_POST['deadlineOfInvitation'];
		$numberInvitedBidders = $_POST['numberInvitedBidders'];
    	$nameInvitedBidders = $_POST['nameInvitedBidders'];
    	$noPurchasedBid = $_POST['noPurchasedBid'];
    	$namePurchasedBid = $_POST['namePurchasedBid'];
    	$noBidIssued = $_POST['noBidIssued'];
    	$deadlineOfBid = $_POST['deadlineOfBid'];
    	$bidTime = $_POST['bidTime'];
    	$numberBidsSubmitted = $_POST['numberBidsSubmitted'];
   		$typeBidSec = $_POST['typeBidSec'];
		$amountBidSec = $_POST['amountBidSec'];
		$qty = $_POST['qty'];
    	$nameProspect = $_POST['nameProspect'];
		$prospectBid = $_POST['prospectBid'];
		$rank = $_POST['rank'];
		$qualification = $_POST['qualification'];
		$results = $_POST['results'];
		$periodPostQual = $_POST['periodPostQual'];
		$grounds = $_POST['grounds'];
 
		mysqli_query($link, "UPDATE `bidevaluation` SET `p_title` = '$p_title', `p_location` = '$p_location', `p_budget` = '$p_budget', `purchaseNo` = '$purchaseNo', `procurement` = '$procurement', `dateOfPosting` = '$dateOfPosting', `deadlineOfInvitation` = '$deadlineOfInvitation', `numberInvitedBidders` = '$numberInvitedBidders', `nameInvitedBidders` = '$nameInvitedBidders', `noPurchasedBid` = '$noPurchasedBid', `namePurchasedBid` = '$namePurchasedBid', `noBidIssued` = '$noBidIssued', `deadlineOfBid` = '$deadlineOfBid', `bidTime` = '$bidTime', `numberBidsSubmitted` = '$numberBidsSubmitted', `typeBidSec` = '$typeBidSec', `amountBidSec` = '$amountBidSec',`qty` = '$qty', `nameProspect` = '$nameProspect', `prospectBid` = '$prospectBid', `rank` = '$rank', `qualification` = '$qualification', `results` = '$results', `periodPostQual` = '$periodPostQual', `grounds` = '$grounds' WHERE `p_id` = '$p_id'") or die(mysqli_error());
 
		header("location: home.php");
	}
?>