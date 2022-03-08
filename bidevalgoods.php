<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tech');
$variableG = $_GET['projectSelectG'];
$query = "SELECT * FROM `bidevaluation` WHERE `p_id` ='".$variableG."'" ;
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
              <td>Primarily for the <strong><?php echo $row['p_title']?></strong>. The approved budget was Php <?php echo $row['p_budget']?> with Purchase Requisition No. <?php echo $row['purchaseNo']?>.</td>
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
              <td>Issuance of Invitation to Bid was from <?php echo $row['dateOfPosting']?>-<?php echo $row['deadlineOfInvitation']?>. <?php echo $row['numberInvitedBidders']?> bidders were given the IAEB namely: <?php echo $row['nameInvitedBidders']?>. The availability of the bidding documents is from <?php echo $row['dateOfPosting']?> - <?php echo $row['deadlineOfBid']?>. <?php echo $row['noPurchasedBid']?> bidders purchased the bidding documents, <?php echo $row['namePurchasedBid']?>. <?php echo $row['nameProspect']?> submitted the bidding documents dated <?php echo $row['deadlineOfBid']?> at 12:00nn.
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
           <br>
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
                    <td width="200" height="50" align="center"><?php echo $row['nameProspect']?></td>
                    <td width="200" height="35"></td>
                    <td width="200" height="35"></td>
                  </tr>
                  <tr>
                    <td width="20" height="35" align="center"><strong>1</strong></td>
                    <td width="200" height="35" align="center"><strong>Project Title</strong></td>
                    <td width="100" height="35" align="center"><strong><?php echo $row['qty']?></strong></td>
                    <td width="200" height="35" colspan="3"><strong><?php echo $row['p_title']?></strong></td>
                  </tr>
                  <tr>
                    <td width="20" height="35"></td>
                    <td width="200" height="35" align="center">Name/Type of Bid Security</td>
                    <td width="100" height="35"></td>
                    <td width="200" height="35" align="center"><strong><?php echo $row['typeBidSec']?></strong></td>
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
                    <td width="300" height="40" align="center"><strong>Bidder Identification/Name</strong>
                    </td>
                    <td width="300" height="40" align="center"><strong>Bid as Calculated amount (Php)</strong>
                    </td>
                  </tr>
                  <tr>
                    <td height="30" align="center"><strong>"Not Applicable"</strong>
                    </td>
                    <td height="30" align="center"> <strong>"Not Applicable"</strong>
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