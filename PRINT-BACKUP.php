<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tech');
$variable = $_GET['projectSelect'];
$query = "SELECT * FROM `bidevaluation` WHERE `p_id` ='".$variable."'" ;
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>


<html>

<head>
  <link rel="stylesheet" href="print.css" />

  

</head>

<body>

  <div class="page-header" style="text-align: center">
	  <table class="head" width="100%">
	  	  <td>
		  <img src="outer.png" width="100" height="100" alt=""/></td>
		  <td>
			 <p> Republic of the Philippines <br>
			<strong><span class="blue">GENERAL SANTOS CITY WATER DISTRICT</span></strong><br>
			E. Fernandez St., Brgy. Lagao, General Santos City<br>
			Telephone No.: 552-3824; Telefax No.: 553-4960<br>
			Email Address: <u><span class="linkcolor">gscwaterdistrict@yahoo.com</span></u>
</p>
		  </td>
		  <td>
      <strong>GPM-038-02</strong>
		  </td>
	  </table>
    
  </div>

  <div class="page-footer" align="center" >
  <button type="button"  onClick="window.print()" >
      PRINT
    </button>
  </div>
 <br>
 <br>
 <br>
 
  <table>
    <thead>
      <tr>
        <td>
          <!--place holder for the fixed-position header-->
          <div class="page-header-space"></div>
        </td>
      </tr>
    </thead>
    
    <tbody>
     
      <tr>
        <td>
          <!--*** CONTENT GOES HERE ***-->
          <div class="page"><br>
          <table width="100%" align="center">
           <tr align="center">
           <table width="100%" align="center">
           <tr>
           <td><strong>GENERAL SANTOS CITY WATER DISTRICT</strong></td>
              <td>Project Reference No: <strong>Project<?php echo $row['p_id']?>; PR No.<?php echo $row['purchaseNo']?></strong></td>
              </tr>
              <tr>
              <td>Fernandez St., Gen. Santos City	</td>
              <td>Project Title: <strong><?php echo $row['p_title']?></strong></td>
              </tr>
              <tr>
              <td></td>
              <td>Location of the Project: <strong><?php echo $row['p_location']?></strong></td>
              </tr>
           </table>
              
              </tr>
            <tr align="center">
              <td><br><strong><span align="center" style="font-size:15px">BID EVALUATION REPORT</span></strong></td>
              </tr>
              <tr>
              <td><br><strong><span style="font-size:12px"><u>PROJECT IDENTIFICATION</u></span></strong></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>Primarily for the purchase of  <strong><?php echo $row['p_title']?></strong>. The approved budget was Php <?php echo $row['p_budget']?> with Purchase Requisition No. <?php echo $row['purchaseNo']?>.</td>
              </tr>
              <tr align="center">
              <td><br><strong><span align="center" style="font-size:12px">Table1: Identification</span></strong><br></td>
              </tr>
              <tr>
              <td>
                <table width="100%" border="1" class="t" align="center">
                <col width="200">
                <col width="400">
                  <tr>
                    <td height="50"> 1.1	Purchaser(Employer) <br>
                          a.	Name <br>
                              b.	Address <br>
                    </td>
                    <td>GENERAL SANTOS CITY WATER DISTRICT<br>E. Fernandez St., Lagao, General Santos City</td>
                  </tr>
                  <tr>
                    <td height="35">1.2 Name of the Project
                    </td>
                    <td><strong><?php echo $row['p_title']?></strong></td>
                  </tr>
                  <tr>
                    <td height="35">1.3 Location of the Project
                    </td>
                    <td><strong><?php echo $row['p_location']?></strong></td>
                  </tr>
                  <tr>
                    <td height="35">1.4 Approved Budget of Contract
                    </td>
                    <td>Php <?php echo $row['p_budget']?></td>
                  </tr>
                  <tr>
                    <td height="35">1.5 Method of  Procurement
                    </td>
                    <td><strong><?php echo $row['procurement']?></strong></td>
                  </tr>
                  <tr>
                  </tr>
                </table>
              </td>
              </tr>
              <tr>
              <td><br><strong><span style="font-size:12px"><u>INITIAL STEPS IN THE BIDDING PROCESS</u></span></strong></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>Issuance of Invitation to Bid was from <?php echo $row['dateOfPosting']?>-<?php echo $row['deadlineOfInvitation']?>. <?php echo $row['numberInvitedBidders']?> bidders were given the IAEB namely: <?php echo $row['nameInvitedBidders']?>. The availability of the bidding documents is from <?php echo $row['dateOfPosting']?> - <?php echo $row['deadlineOfBid']?>. <?php echo $row['noPurchasedBid']?> bidders purchased the bidding documents, <?php echo $row['namePurchasedBid']?> and submitted the bidding documents dated <?php echo $row['deadlineOfBid']?> at 12:00nn.
              </td>
              </tr>
              <tr align="center">
              <td><br><strong><span align="center" style="font-size:12px">Table 2. Initial Steps in the Bidding Process</span></strong><br></td>
              </tr>
              <tr>
              <td>
                <table width="100%" border="1" class="t" align="center">
                <col width="300">
                  <tr>
                    <td height="80"> 2.1 Invitation to Apply for Eligibility & to Bid<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;a.	Date of Issuance<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;b.	Date of deadline<br>
                      2.2 Issuance of Bidding Documents<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;a.	Period of Availability of Bid Docs<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;b.	Number of Bid Docs issued<br>
</td>
<td><br>
<strong><?php echo $row['dateOfPosting']?><br>
<?php echo $row['deadlineOfInvitation']?> - 12:00 noon<br>
<br>
<?php echo $row['dateOfPosting']?> - <?php echo $row['deadlineOfBid']?><br>
<?php echo $row['noBidIssued']?> Bidding Document Issued
</strong>
</td>
</tr>

                </table>
              </td>
              </tr>
              <tr>
              <td><br><strong><span style="font-size:12px"><u>SUBMISSION AND OPENING OF BIDS AND PRELIMINARY EXAMINATION</u></span></strong></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>The Bid submission deadline was on <?php echo $row['deadlineOfBid']?> 12:00 nn and the opening of the bid forms was on the same date. <?php echo $row['numberInvitedBidders']?> bidders were given the IAEB named: <?php echo $row['nameInvitedBidders']?>. The availability of the bidding documents is from <?php echo $row['dateOfPosting']?> - <?php echo $row['deadlineOfBid']?>.
              </td>
              </tr>

          </table>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="page">
          <table width="100%" align="center">
          <tr align="center">
          <br>
          <table width="100%" align="center">
           <tr>
           <td><strong>GENERAL SANTOS CITY WATER DISTRICT</strong></td>
              <td>Project Reference No: <strong>Project<?php echo $row['p_id']?>; PR No.<?php echo $row['purchaseNo']?></strong></td>
              </tr>
              <tr>
              <td>Fernandez St., Gen. Santos City	</td>
              <td>Project Title: <strong><?php echo $row['p_title']?></strong></td>
              </tr>
              <tr>
              <td></td>
              <td>Location of the Project: <strong><?php echo $row['p_location']?></strong></td>
              </tr>
           </table>
           </tr>
          <tr>
          <td><?php echo $row['p_location']?> bidders purchased the bidding documents, <?php echo $row['namePurchasedBid']?> and submitted the bidding documents dated <?php echo $row['deadlineOfBid']?> at 12:00nn.
          </tr> 
          <tr align="center">
           <td><strong><span align="center" style="font-size:12px"><p>Table 3. Bid Submission and Opening</p></span></strong></td>
          </tr>
          <tr>
              <td>
                <table width="100%" border="1" class="t" align="center">
                <col width="300">
                  <tr>
                    <td height="75"> 3.1 Bid Submission Deadline<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;a.	Original date, time<br>
                      3.2 Bid Opening date, time<br>
                      3.3 Number of bids submitted<br>
                    </td>
                    <td><br><strong><?php echo $row['deadlineOfBid']?> @ 12:00nn <br>
                    <?php echo $row['deadlineOfBid']?> @ <?php echo $row['bidTime']?><br>
                    <?php echo $row['numberBidsSubmitted']?> Bid submitted
                  </strong>
                  </td>
                  </tr>
                </table>
              </td>
              </tr>
              <tr align="center">
           <td><strong><span align="center" style="font-size:12px"><p>Table 4. Bid Prices (As Read Out)</p></span></strong></td>
          </tr>
          <tr>
              <td>
                <table width="100%" border="1" class="t" align="center">
                  <tr>
                    <td colspan="2" rowspan="2" height="50" align="center"><strong>Amount of Bid as Read</strong>
                    </td>
                    <td colspan="2" height="35" align="center"><strong>Bidder Identification/name</strong></td>
                    <td width="200" height="35"></td>
                    <td width="200" height="35"></td>
                  </tr>
                  <tr>
                    
                    <td width="100" height="40" align="center"><strong>QTY</strong></td>
                    <td width="200" height="50"><?php echo $row['bidderFinal']?></td>
                    <td width="200" height="35"></td>
                    <td width="200" height="35"></td>
                  </tr>
                  <tr>
                    <td width="20" height="35" align="center"><strong>1</strong></td>
                    <td width="200" height="35" align="center"><strong>Project Title</strong></td>
                    <td width="100" height="35"><strong><?php echo $row['qty']?></strong></td>
                    <td width="200" height="35" colspan="3"><strong><?php echo $row['p_title']?></strong></td>
                  </tr>
                  <tr>
                    <td width="20" height="35"></td>
                    <td width="200" height="35" align="center">Name/Type of Bid Security</td>
                    <td width="100" height="35"></td>
                    <td width="200" height="35"><strong><?php echo $row['typeBidSec']?></strong></td>
                    <td width="200" height="35"></td>
                    <td width="150" height="35"></td>
                  </tr>
                  <tr>
                    <td width="20" height="35"></td>
                    <td width="200" height="35" align="center">Amount of Bid Security</td>
                    <td width="150" height="35"></td>
                    <td width="200" height="35"></td>
                    <td width="200" height="35"></td>
                    <td width="150" height="35"></td>
                  </tr>
                  
                </table>
              </td>
              </tr>
              <br>
              <tr>
              <td><strong><span style="font-size:12px"><u>BID EVALUATION</u></span></strong></td>
              <td></td>
              <td></td>
              </tr>
              <br>
              <tr align="center">
           <td><strong><span align="center" style="font-size:12px"><p>Table 5. Correction of Bids</p></span></strong></td>
          </tr>
          <tr>
              <table width="100%" border="1" class="t" align="center">
                  <tr>
                    <td width="300" height="40" align="center"> Bidder Identification/Name
                    </td>
                    <td width="300" height="40" align="center"> Bid as Calculated amount (Php)
                    </td>
                  </tr>
                  <tr>
                    <td height="30"> 
                    </td>
                    <td height="30"> 
                    </td>
                  </tr>
            </table>
          </tr>
           <tr>
            <table>
              <tr>
              <td width="300" height="50">Prepared by:</td>
              <td width="300" height="50">Submitted by:</td>
              </tr>
              <tr>
              <td width="300" height="50"><br><strong>ENGR. MARIA CELIA N. DANDAN</strong><br>BAC TWG</td>
              <td width="300" height="50"><br><strong>AGNES P. TAMPICO</strong><br>BAC Secretariat</td>  
              </tr> 
              <tr>
              <td width="300" height="50"><br><br><strong>JUDY A. LIM-PASMAN, LLB</strong><br>BAC TWG</td>
              <td width="300" height="50"></td>  
              </tr> 
              <tr>
              <td width="300" height="50"><br><br><strong>ENGR. MICHAEL G. GABALES</strong><br>TWG-Head</td>
              <td width="300" height="50"></td>  
              </tr>
            </table>
          </tr>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="page"><br>
          <table width="100%" align="center">
           <tr align="center">
           <br>
           <table width="100%" align="center">
           <tr>
           <td><strong>GENERAL SANTOS CITY WATER DISTRICT</strong></td>
              <td>Project Reference No: <strong>Project<?php echo $row['p_id']?>; PR No.<?php echo $row['purchaseNo']?></strong></td>
              </tr>
              <tr>
              <td>Fernandez St., Gen. Santos City	</td>
              <td>Project Title: <strong><?php echo $row['p_title']?></strong></td>
              </tr>
              <tr>
              <td></td>
              <td>Location of the Project: <strong><?php echo $row['p_location']?></strong></td>
              </tr>
           </table>
              </tr>
            <tr align="center">
              <td align="center"><br><strong><span align="center" style="font-size:15px"><p>POST QUALIFICATION EVALUATION SUMMARY REPORT</p></span></strong></td>
              </tr>
              <tr>
              <td><strong><span style="font-size:12px"><u>POST IDENTIFICATION:</u></span></strong></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>Primarily for the Construction of <strong><?php echo $row['p_title']?></strong>. The approved budget was Php <?php echo $row['p_budget']?> with Purchase Requisition No. <?php echo $row['purchaseNo']?>.
              </td>
              </tr>
              <tr align="center">
              <td align="center"><strong><span align="center" style="font-size:12px"><p>Table1: Identification</p></span></strong></td>
              </tr>
              <tr>
              <td>
                <table width="100%" border="1" class="t">
                <col width="200">
                <col width="450">
                  <tr>
                    <td height="50"> 1.1	Purchaser(Employer) <br>
                          a.	Name <br>
                              b.	Address <br>
                    </td>
                    <td>GENERAL SANTOS CITY WATER DISTRICT<br>
                    E. Fernandez St., Lagao, General Santos City
                  </td>
                  </tr>
                  <tr>
                    <td height="45">1.2 Name of the Project
                    </td>
                    <td><strong><?php echo $row['p_title']?></strong></td>
                  </tr>
                  <tr>
                    <td height="45">1.3 Location of the Project
                    </td>
                    <td><strong><?php echo $row['p_location']?></strong></td>
                  </tr>
                  <tr>
                    <td height="40">1.4 Approved Budget of Contract
                    </td>
                    <td><?php echo $row['p_budget']?></td>
                  </tr>
                  <tr>
                    <td height="40">1.5 Method of  Procurement
                    </td>
                    <td><strong><?php echo $row['procurement']?></strong></td>
                  </tr>
                  <tr>
                  </tr>
                </table>
              </td>
              </tr>
              <tr>
              <td><br><strong><span style="font-size:12px"><u>INITIAL STEPS IN THE BIDDING PROCESS</u></span></strong></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>Issuance of Invitation to Bid was from <?php echo $row['dateOfPosting']?>-<?php echo $row['deadlineOfInvitation']?>. <?php echo $row['numberInvitedBidders']?> bidders were given the IAEB namely: <?php echo $row['nameInvitedBidders']?>. The availability of the bidding documents is from <?php echo $row['dateOfPosting']?> - <?php echo $row['deadlineOfBid']?>. <?php echo $row['noPurchasedBid']?> bidders purchased the bidding documents, <?php echo $row['namePurchasedBid']?> and submitted the bidding documents dated <?php echo $row['deadlineOfBid']?> at 12:00nn.
              </tr>
              <br>
              <tr align="center">
              <td><strong><span align="center" style="font-size:12px"><p>Table 2. Initial Steps in the Bidding Process</p></span></strong></td>
              </tr>
              <tr>
              <td>
                <table width="100%" border="1" class="t" align="center">
                <col width="300">
                  <tr>
                    <td height="60"> 2.1 Invitation to Apply for Eligibility & to Bid<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;a.	Date of Issuance<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;b.	Date of deadline<br>
                    </td>
                    <td><strong><br>
                    <?php echo $row['dateOfPosting']?><br>
                    <?php echo $row['deadlineOfInvitation']?> - 12:00 noon
                    </strong></td>
                  </tr>
                  <tr>
                    <td height="60"> 2.2 Issuance of Bidding Documents<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;a.	Period of Availability of Bid Docs<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;b.	Number of Bid Docs issued<br>
                    </td>
                    <td><strong><br>
                    <?php echo $row['dateOfPosting']?> - <?php echo $row['deadlineOfBid']?><br>
                    <?php echo $row['noBidIssued']?> Bidding Document Issued
                    </strong></td>
                  </tr>
                  <tr>
                    <td height="60"> 2.3 Eligibility Check<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;c.	Date of Eligibility Check<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;d.	Number of Eligibility envelopes receive<br>
                    </td>
                    <td><strong><br>
                    <?php echo $row['deadlineOfBid']?><br>
                    <?php echo $row['noBidIssued']?> Bidding Document received
                    </strong></td>
                  </tr>
                </table>
              </td>
              </tr>
              <tr>
              <td><br><strong><span style="font-size:12px"><u>SUBMISSION AND OPENING OF BIDS AND PRELIMINARY EXAMINATION</u></span></strong></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>The Bid submission deadline was on <?php echo $row['deadlineOfBid']?> 12:00 nn and the opening of the bid forms was on the same date. <?php echo $row['numberInvitedBidders']?> bidders were given the IAEB named: <?php echo $row['nameInvitedBidders']?>. The availability of the bidding documents is from <?php echo $row['dateOfPosting']?> - <?php echo $row['deadlineOfBid']?>.
              </tr>

          </table>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="page"><br>
          <table width="100%" align="center">
          <table width="100%" align="center">
           <tr>
           <td><strong>GENERAL SANTOS CITY WATER DISTRICT</strong></td>
              <td>Project Reference No: <strong>Project<?php echo $row['p_id']?>; PR No.<?php echo $row['purchaseNo']?></strong></td>
              </tr>
              <tr>
              <td>Fernandez St., Gen. Santos City	</td>
              <td>Project Title: <strong><?php echo $row['p_title']?></strong></td>
              </tr>
              <tr>
              <td></td>
              <td>Location of the Project: <strong><?php echo $row['p_location']?></strong></td>
              </tr>
           </table>
           </tr>
          <tr>
          <td><?php echo $row['p_location']?> bidders purchased the bidding documents, <?php echo $row['namePurchasedBid']?> and submitted the bidding documents dated <?php echo $row['deadlineOfBid']?> at 12:00nn.
          </tr>
              <tr align="center">
              <td><br><strong><span align="center" style="font-size:12px">Table 3. Bid Submission and Opening</span></strong><br></td>
              </tr>
              <tr>
              <td>
              <table width="100%" border="1" class="t" align="center">
              <col width="300">
                  <tr>
                    <td height="60"> 3.1 Bid Submission Deadline<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;b.	Original date, time<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;c.	Extensions / Revisions, if any<br>
                    </td>
                    <td><strong><?php echo $row['deadlineOfBid']?> @ 12:00 noon</strong></td>
                  </tr>
                  <tr>
                    <td height="40"> 3.2 Bid Opening date, time<br>
                    </td>
                    <td><strong><?php echo $row['deadlineOfBid']?> @ <?php echo $row['bidTime']?></strong></td>
                  </tr>
                  <tr>
                    <td height="40"> 3.3 Number of bids submitted<br>
                    </td>
                    <td><?php echo $row['numberBidsSubmitted']?></td>
                  </tr>
                  <tr>
                    <td height="60"> 3.4 Bid validity period (days or weeks)<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;c.	Original specified<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;d.	Extensions / Revisions, if any<br>
                    </td>
                    <td></td>
                  </tr>
                </table>
              </td>
              </tr>
              <tr align="center">
              <td><br><strong><span align="center" style="font-size:12px">Table 4. Bid Prices ( As Read Out)</span></strong><br></td>
              </tr>
              <tr>
              <td>
                <table width="100%" border="1" class="t" align="center">
                  <tr>
                    <td colspan="2" height="30" align="center"> Amount of Bid as Read
                    </td>
                    <td height="30">QTY</td>
                    <td colspan="2" height="30" align="center">Bidder Identification/name</td>
                  </tr>
                  <tr>
                    <td  width="20" height="30"></td>
                    <td width="200" height="30"></td>
                    <td width="200" height="30"></td>
                    <td width="200" height="30" align="center">Bidder 1</td>
                    <td width="200" height="30" align="center">Bidder 2</td>
                  </tr>
                  <tr>
                    <td width="20" height="30" align="center">1</td>
                    <td width="150" height="30" align="center">Project Title</td>
                    <td width="200" height="30"></td>
                    <td width="200" height="30" align="center">Amount</td>
                    <td width="200" height="30"align="center">Amount</td>
                  </tr>
                  <tr>
                    <td width="20" height="40"></td>
                    <td width="150" height="40" align="center">Name/Type of Bid Security</td>
                    <td width="200" height="40"></td>
                    <td width="200" height="40"></td>
                    <td width="200" height="40"></td>
                  </tr>
                  <tr>
                    <td width="20" height="40"></td>
                    <td width="150" height="40" align="center">Amount of Bid Security</td>
                    <td width="200" height="40"></td>
                    <td width="200" height="40"></td>
                    <td width="200" height="40"></td>
                  </tr>
                </table>
              </td>
              </tr>
              <tr>
              <td><br><strong><span style="font-size:12px"><u>BID EVALUATION</u></span></strong></td>
              <td></td>
              <td></td>
              </tr>
              <tr align="center">
              <td><strong><span align="center" style="font-size:12px">Table 5. Correction of Bid</span></strong><br></td>
              </tr>
              <tr>
              <table width="100%" border="1" class="t" align="center">
                  <tr>
                    <td width="300" height="30" align="center"> Bidder Identification/Name
                    </td>
                    <td width="300" height="30" align="center"> Bid as Calculated amount (Php)
                    </td>
                  </tr>
                  <tr>
                    <td height="50"> 
                    </td>
                    <td height="50"> 
                    </td>
                  </tr>
            </table>
          </tr>
          <tr align="center">
              <td><strong><span align="center" style="font-size:12px"><p>Table 6. Post Qualification Report</p></span></strong></td>
              </tr>
              <tr>
              <table width="100%" border="1" class="t" align="center">
                  <tr>
                    <td width="150" height="30" align="center"> Bidder Identification/Name
                    </td>
                    <td width="150" height="30" align="center"> Post-Qualified / Post Disqualified
                    </td>
                    <td width="150" height="30" align="center"> Grounds
                    </td>
                  </tr>
                  <tr>
                    <td height="50"> 
                    </td>
                    <td height="50"> 
                    </td>
                    <td height="50"> 
                    </td>
                  </tr>
            </table>
          </tr>
          <tr>
            <table>
              <tr>
              <td width="300" height="50">Prepared by:</td>
              <td width="300" height="50">Submitted by:</td>
              </tr>
              <tr>
              <td width="300" height="50">BAC TWG</td>
              <td width="300" height="50">BAC Secretariat</td>  
              </tr> 
              <tr>
              <td width="300" height="50">TWG – Head</td>
              <td width="300" height="50"></td>  
              </tr> 
            </table>
          </tr>
          </table>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="page"><br>
          <table width="100%" align="center">
           <tr align="center">
           <br>
           <table width="100%" align="center">
           <tr>
           <td><strong>Owner</strong></td>
              <td><?php echo $row['p_id']?></td>
              </tr>
              <tr>
              <td>Owner Address</td>
              <td><?php echo $row['p_title']?>	</td>
              </tr>
              <tr>
              <td></td>
              <td><?php echo $row['p_location']?>	</td>
              </tr>
           </table>
              </tr>
            <tr align="center" width="100%">
              <td><strong><span style="font-size:15px" align="center"><p class="uppercase"><?php echo $row['p_title']?></p></span></strong></td>
              </tr>
              <tr>
              <table>
              <tr><td>1. Name of Bidder:</td></tr>
              <tr><td>2. Rank in the List of Bids:</td></tr>
              <tr><td>3. Bid Price: </td></tr>
              <tr><td>4. Period of Post-Qualification:</td></tr>
              <tr><td>5. Results of Post-Qualification:</td></tr>
              </table>
              </tr>
              <tr>
              <table width="100%" border="1" class="t" align="center">
                  <tr>
                    <td colspan="2" height="20" align="center"><strong> Requirements </strong>
                    </td>
                    <td height="20" align="center"><strong>Parties Consulted</strong></td>
                    <td  height="20" align="center"><strong>Findings</strong></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="20"> Eligibility Envelope (1st Envelope)
                    </td>
                    <td height="20"></td>
                    <td height="20"></td>
                  </tr>
                  <tr>
                    <td width="20" height="30">1</td>
                    <td width="400" >1. Platinum Philgeps Certificate of registration and membership with Annex A in accordance with Section 8.5.2 of this IRR, except for foreign bidders participating in the procurement by a Philippine Foreign Service Office of Post</td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                    
                  </tr>
                  <tr>
                    <td width="20" >2</td>
                    <td width="400" >2. Statement of the prospective bidder of all its on going and completed government and private contracts within the period stated in the BDS (5 calendar year) including contracts awarded but not yet started, if any whether similar or not similar in nature and complexity to the contract to be bid, within the relevant period as provided in the Bidding Documents. The statement shall include, for each contract. For this purpose, similar in contracts shall refer to UPVC Pipes</td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" >3</td>
                    <td width="400" >3. Statement identifying the bidder's Single Largest Completed Contract (SLCC) similar to the contract to be bid (5 years), except under conditions provided for in Section 23.4.1.3 and 23.4.2.4 of the IRR, within the relevant period as provided in the Bidding Documents. The statement shall include, for each contract, the following: a) name of contract, b) date of contract, c) contract of duration, d) owner's name and address, e) kinds of goods, f) for statement of ongoing contract - amount of contract and value of outstanding contracts, g) for statement of SLCC - amount of completed contracts, adjusted by the Bidder ot current prices using PSA's consumenr price index, if necessary for the purpose of meeting the SLCC requirement, h) date of delivery; and i) end user's acceptance or official receipt(s) or sales invoice issued for the contract, if completed, which shall be attached to the statements.
                    </td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" >4</td>
                    <td width="400" >4. NFCC computation  in accordance with ITB Clause 5.5 or Committed Line of Credit (CLC) at least equal to 10% of the ABC from a Universal or Commercial Bank.
                  </td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" ></td>
                    <td width="400" ><strong>Technical Documents</strong></td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" >5</td>
                    <td width="400" >Bid Security as to form, amount & validity period </td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" ></td>
                    <td width="400" ><strong>5.1 Bid Securing Declaration OR</strong></td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" ></td>
                    <td width="400" ><strong>5.2 at least one (1) other form, the amount of which shall be equal to a percentage of the ABC in accordance with the following schedule</strong></td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                </table>
</tr>
          </table>
          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>
          <div class="page"><br>
          <table width="100%" align="center">
              <tr>
              <table width="100%" border="1" class="t" align="center">
                 
                  <tr>
                    <td width="20" ></td>
                    <td width="400" ><strong> 5.2a Cash, certified check, cashier's check, bank draft or irrevocable letter of credit, bank guarantee (2%) </strong></td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" ></td>
                    <td width="400" ><strong> 5.2b Surety bond (5%)  </strong></td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" >6</td>
                    <td width="400" >Conformity with technical specifications, as enumerated and specified in Section VI and VII of the Bidding Documents </td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" ></td>
                    <td width="400" ><strong>Sworn Statement  in accordance with Section 25.2 (a)(iv) of the IRR of RA 9184 and using the form prescribed in Section IX bidding Forms</strong></td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" >1</td>
                    <td width="400" >Bid Prices in Bill of Quantities</td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" >2</td>
                    <td width="400" >Authority of Signatory</td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                  <tr>
                    <td width="20" >3</td>
                    <td width="400" >Delivery Schedule</td>
                    <td width="150" ></td>
                    <td width="150" ></td>
                  </tr>
                </table>
                </tr>
                <tr>
                  <td><br>6. Findings:</td>
                </tr>
                <tr>
                  <td>O  Responsive</td>
                  <td>O  Non-Responsive</td>
                </tr>
                <tr>
            <table>
              <tr>
              <td width="300" height="50">Prepared by:</td>
              <td width="300" height="50">Submitted by:</td>
              </tr>
              <tr>
              <td width="300" height="50">BAC TWG <br> Date</td>
              <td width="300" height="50">BAC Secretariat <br> Date</td>  
              </tr> 
              <tr>
              <td width="300" height="50">Noted by:</td>
              </tr> 
              <tr>
              <td width="300" height="50">Implementing Office <br> Date</td>
              </tr>  
            </table>
          </tr>
          </table>
         
          </div>
          
        </td>
      </tr>
    </tbody>

    <tfoot>
      <tr>
        <td>
          <!--place holder for the fixed-position footer-->
          <div class="page-footer-space">

          
          </div>
        </td>
      </tr>
    </tfoot>

  </table>

</body>

</html>