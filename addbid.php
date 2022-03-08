<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tech');

if(isset($_POST['insert']))
{
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
    $projectType = $_POST['projectType'];


    $query = "INSERT INTO bidevaluation (`p_id`,`p_title`,`p_location`,`p_budget`,`purchaseNo`,`procurement`,`dateOfPosting`, `deadlineOfInvitation`, `numberInvitedBidders`,`nameInvitedBidders`,`noPurchasedBid`,`namePurchasedBid`,`noBidIssued`,`deadlineOfBid`,`bidTime`,`numberBidsSubmitted`,`typeBidSec`,`amountBidSec`,`qty`,`nameProspect`,`prospectBid`,`rank`,`qualification`,`results`,`periodPostQual`,`grounds`,`projectType`) VALUES
     ('$p_id','$p_title','$p_location','$p_budget','$purchaseNo','$procurement','$dateOfPosting','$deadlineOfInvitation','$numberInvitedBidders','$nameInvitedBidders','$noPurchasedBid','$namePurchasedBid','$noBidIssued','$deadlineOfBid','$bidTime','$numberBidsSubmitted','$typeBidSec','$amountBidSec','$qty','$nameProspect','$prospectBid','$rank','$qualification','$results','$periodPostQual','$grounds','$projectType')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: home.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}

?>