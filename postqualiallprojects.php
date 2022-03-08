<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tech');
$variable1 = $_GET['projectSelect1'];
$query = "SELECT * FROM `bidevaluation` WHERE `p_id` ='".$variable1."'" ;
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
      <strong>GPM-042-2</strong>
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
          <div class="page">
          <table width="100%" align="center">
           <tr align="center">
           <table width="100%" align="center">
           <tr>
           <td width="350"><strong>GENERAL SANTOS CITY WATER DISTRICT</strong></td>
              <td width="500">Project Reference No: <strong>Project<?php echo $row['p_id']?>; PR No.<?php echo $row['purchaseNo']?></strong></td>
              </tr>
              <tr>
              <td width="350">Fernandez St., Gen. Santos City	</td>
              <td width="500">Project Title: <strong><?php echo $row['p_title']?></strong></td>
              </tr>
              <tr>
              <td width="350"></td>
              <td width="500">Location of the Project: <strong><?php echo $row['p_location']?></strong></td>
              </tr>
           </table>
              </tr>
            <tr align="center">
              <td align="center"><strong><span align="center" style="font-size:15px"><p>POST QUALIFICATION EVALUATION SUMMARY REPORT</p></span></strong></td>
              </tr>
              <tr>
              <td><strong><span style="font-size:12px"><u>POST IDENTIFICATION:</u></span></strong></td>
              <td></td>
              <td></td>
              </tr>
              <tr>
              <td>Primarily for the <strong><?php echo $row['p_title']?></strong>. The approved budget was Php <?php echo $row['p_budget']?> with Purchase Requisition No. <?php echo $row['purchaseNo']?>.
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
                    <td height="45"> 1.1	Purchaser(Employer) <br>
                          a.	Name <br>
                              b.	Address <br>
                    </td>
                    <td>GENERAL SANTOS CITY WATER DISTRICT<br>
                    E. Fernandez St., Lagao, General Santos City
                  </td>
                  </tr>
                  <tr>
                    <td height="40">1.2 Name of the Project
                    </td>
                    <td><strong><?php echo $row['p_title']?></strong></td>
                  </tr>
                  <tr>
                    <td height="25">1.3 Location of the Project
                    </td>
                    <td><strong><?php echo $row['p_location']?></strong></td>
                  </tr>
                  <tr>
                    <td height="25">1.4 Approved Budget of Contract
                    </td>
                    <td><?php echo $row['p_budget']?></td>
                  </tr>
                  <tr>
                    <td height="25">1.5 Method of  Procurement
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
                    <td height="55"> 2.1 Invitation to Apply for Eligibility & to Bid<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;a.	Date of Issuance<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;b.	Date of deadline<br>
                    </td>
                    <td><strong><br>
                    <?php echo $row['dateOfPosting']?><br>
                    <?php echo $row['deadlineOfBid']?> - 12:00 noon
                    </strong></td>
                  </tr>
                  <tr>
                    <td height="55"> 2.2 Issuance of Bidding Documents<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;a.	Period of Availability of Bid Docs<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;b.	Number of Bid Docs issued<br>
                    </td>
                    <td><strong><br>
                    <?php echo $row['dateOfPosting']?> - <?php echo $row['deadlineOfBid']?><br>
                    <?php echo $row['noBidIssued']?> Bidding Document Issued
                    </strong></td>
                  </tr>
                  <tr>
                    <td height="55"> 2.3 Eligibility Check<br>
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
              <td>The Bid submission deadline was on <?php echo $row['deadlineOfBid']?> 12:00 nn and the opening of the bid forms was on the same date. <?php echo $row['numberInvitedBidders']?> bidders were given the IAEB named: <?php echo $row['nameInvitedBidders']?>. The availability of the bidding documents is from <?php echo $row['dateOfPosting']?> - <?php echo $row['deadlineOfBid']?>. <?php echo $row['noPurchasedBid']?> bidders purchased the bidding documents, <?php echo $row['namePurchasedBid']?> and submitted the bidding documents dated <?php echo $row['deadlineOfBid']?> at 12:00nn
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
          <div class="page"><br>
          <table width="100%" align="center">
          <table width="100%" align="center">
           <tr>
           <td width="350"><strong>GENERAL SANTOS CITY WATER DISTRICT</strong></td>
              <td width="500">Project Reference No: <strong>Project<?php echo $row['p_id']?>; PR No.<?php echo $row['purchaseNo']?></strong></td>
              </tr>
              <tr>
              <td width="350">Fernandez St., Gen. Santos City	</td>
              <td width="500">Project Title: <strong><?php echo $row['p_title']?></strong></td>
              </tr>
              <tr>
              <td width="350"></td>
              <td width="500">Location of the Project: <strong><?php echo $row['p_location']?></strong></td>
              </tr>
           </table>
           </tr>
           <br>
          <tr>
          <td><?php echo $row['noPurchasedBid']?> bidders purchased the bidding documents, <?php echo $row['namePurchasedBid']?> and submitted the bidding documents dated <?php echo $row['deadlineOfBid']?> at 12:00nn.
          </tr>
              <tr align="center">
              <td><br><strong><span align="center" style="font-size:12px"><p>Table 3. Bid Submission and Opening</p></span></strong></td>
              </tr>
              <tr>
              <td>
              <table width="100%" border="1" class="t" align="center">
              <col width="300">
                  <tr>
                    <td height="50"> 3.1 Bid Submission Deadline<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;b.	Original date, time<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;c.	Extensions / Revisions, if any<br>
                    </td>
                    <td><strong><?php echo $row['deadlineOfBid']?> @ 12:00 noon</strong></td>
                  </tr>
                  <tr>
                    <td height="30"> 3.2 Bid Opening date, time<br>
                    </td>
                    <td><strong><?php echo $row['deadlineOfBid']?> @ <?php echo $row['bidTime']?></strong></td>
                  </tr>
                  <tr>
                    <td height="30"> 3.3 Number of bids submitted<br>
                    </td>
                    <td><strong><?php echo $row['numberBidsSubmitted']?> Bid submitted</strong></td>
                  </tr>
                  <tr>
                    <td height="50"> 3.4 Bid validity period (days or weeks)<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;c.	Original specified<br>
                      &nbsp;&nbsp;&nbsp;&nbsp;d.	Extensions / Revisions, if any<br>
                    </td>
                    <td></td>
                  </tr>
                </table>
              </td>
              </tr>
              <tr align="center">
              <td><br><strong><span align="center" style="font-size:12px"><p>Table 4. Bid Prices ( As Read Out)</p></span></strong></td>
              </tr>
              <tr>
              <td>
                <table width="100%" border="1" class="t" align="center">
                  <tr>
                    <td colspan="2" height="40" align="center"><strong>Amount of Bid as Read</strong>
                    </td>
                    <td width="100" height="40" align="center"><strong>QTY</strong></td>
                    <td width="200" height="40" align="center"><strong><?php echo $row['nameProspect']?></strong></td>
                    <td width="150" height="40"></td>
                    <td width="150" height="40"></td>
                  </tr>
                  <tr>
                    <td width="20" height="40" align="center"><strong>1</strong></td>
                    <td width="200" height="40" align="center"><strong><?php echo $row['p_title']?></strong></td>
                    <td width="100" height="40" align="center"><?php echo $row['qty']?></td>
                    <td width="200" height="40" align="center"></td>
                    <td width="200" height="40"align="center"></td>
                    <td width="200" height="40"></td>
                  </tr>
                  <tr>
                    <td width="20" height="30"></td>
                    <td width="200" height="30" align="center">Name/Type of Bid Security</td>
                    <td width="100" height="30"></td>
                    <td width="200" height="30" align="center"><strong><strong><?php echo $row['typeBidSec']?></strong></td>
                    <td width="200" height="30"></td>
                    <td width="200" height="30"></td>
                  </tr>
                  <tr>
                    <td width="20" height="30"></td>
                    <td width="200" height="30" align="center">Amount of Bid Security</td>
                    <td width="100" height="30"><?php echo $row['amountBidSec']?></td>
                    <td width="200" height="30"></td>
                    <td width="200" height="30"></td>
                    <td width="200" height="30"></td>
                  </tr>
                </table>
              </td>
              </tr>
              <tr>
              <td align="left"><br><strong><span style="font-size:12px"><u>BID EVALUATION</u></span></strong></td>
              </tr>
              <tr align="center">
              <td><strong><span align="center" style="font-size:12px"><p>Table 5. Correction of Bid</p></span></strong></td>
              </tr>
              <tr>
              <table width="100%" border="1" class="t" align="center">
                  <tr>
                    <td width="300" height="30" align="center"><strong>Bidder Identification/Name</strong>
                    </td>
                    <td width="300" height="30" align="center"><strong>Bid as Calculated amount (Php)</strong>
                    </td>
                  </tr>
                  <tr>
                    <td height="40" align="center"><?php echo $row['nameProspect']?>
                    </td>
                    <td height="40" align="center"><?php echo $row['prospectBid']?>
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
                    <td width="150" height="30" align="center"><strong>Bidder Identification/Name</strong>
                    </td>
                    <td width="150" height="30" align="center"><strong>Post-Qualified / Post Disqualified</strong>
                    </td>
                    <td width="150" height="30" align="center"><strong>Grounds</strong>
                    </td>
                  </tr>
                  <tr>
                    <td height="50" align="center"><strong><?php echo $row['nameProspect']?></strong>
                    </td>
                    <td height="50" align="center"><strong><?php echo $row['qualification']?></strong>
                    </td>
                    <td height="50" align="center"><strong><?php echo $row['grounds']?></strong>
                    </td>
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
          <div class="page">
          <table>
              <tr>
              <td width="300" height="50">Prepared by:</td>
              <td width="300" height="50">Submitted by:</td>
              </tr>
              <tr>
              <td width="300" height="50"><br><br><strong>ENGR. MARIA CELIA N. DANDAN</strong><br>BAC TWG</td>
              <td width="300" height="50"><br><br><strong>AGNES P. TAMPICO</strong><br>BAC Secretariat</td>  
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
        </div>
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
              <td align="center"><strong><span align="center" style="font-size:15px"><p><strong>PROJ. <?php echo $row['p_id']?>: <?php echo $row['p_title']?></strong></p></span></strong></td>
              </tr>
              <tr>
              <table>
              <tr><td>1. Name of Bidder</td><td>: <u><?php echo $row['nameProspect']?>&nbsp;&nbsp;&nbsp;</u></td></tr>
              <tr><td>2. Rank in the List of Bids</td><td>: <u><?php echo $row['rank']?>&nbsp;&nbsp;&nbsp;</u></td></tr>
              <tr><td>3. Bid Price</td><td>: <u><?php echo $row['p_budget']?>&nbsp;&nbsp;&nbsp;</u></td></tr>
              <tr><td>4. Period of Post-Qualification</td><td>: <u><?php echo $row['periodPostQual']?>&nbsp;&nbsp;&nbsp;</u></td></tr>
              <tr><td>5. Results of Post-Qualification</td><td>: <u><?php echo $row['qualification']?> - <?php echo $row['results']?>&nbsp;&nbsp;&nbsp;</u></td></tr>
              </table>
              </tr>
              <br>
              <tr>
              <table width="100%" border="1" class="t" align="center" style="font-size:80%">
                  <tr>
                    <td colspan="2" align="center"><strong></strong>
                    </td>
                    <td colspan="3" align="center" style="font-size:75%"><strong>BIDDERS</strong></td>
                  </tr>
                  <tr>
                  <td colspan="2" height="20" align="center"><strong>Eligibility Documents</strong>
                    </td>
                    <td width="100" ></td>
                    <td width="100"></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" style="font-size:75%">Class A Document</td>
                    <td width="100"></td>
                    <td width="100"></td>
                    <td width="100"></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" height="30" >1. Authority of Signatory</td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >2. Platinum PhilGEPS certificate of registration and membership (with Annex A) in accordance
                      with Section 8.5.2 of the IRR
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >3. Statement of all its ongoing government and private contracts awarded but not yet stream_context_get_defaul,
                      if any, whether similar or not similar in nature and complexity to the contract to be bid.
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >4. Statement of the bidder's SLCC similar to the contract to be bid,
                      in accordance with ITB Clause 5.4
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >5. Philippine Contractors Accredication Board (PCAB) License</td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >6. Net Financing Contracting Capacity (NFCC) computation in accordance with ITB Clause 5.5 </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" height="25" align="center"><strong>TECHNICAL DOCUMENTS</strong></td>
                    <td width="100" height="25"></td>
                    <td width="100" height="25"></td>
                    <td width="100" height="25"></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >7. Bid Security as to form, amount & validity period</td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" height="30">&nbsp;&nbsp;&nbsp;7.1 Bid Securing Declaration OR</td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >&nbsp;&nbsp;&nbsp;7.2 at least one (1) other form, the amount of which shall be equal to a 
                      percentage of the ABC in accordance with the following schedule
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.2a Cash, certified check, cashier's check, bank draft or
                      irrevocable letter of credit, bank guarantee (2%) Php 256, 257.80
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7.2b Surety bond (5%) Php 640,644.50
                    </td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >8. Project Requirements, inlude: <br>
                  a) Organizational chart, <br>
                  b) List contractors personnel (ref. BDS Clause 12.1 (b)(ii.2))<br>
                  c) List of contractors equipment (ref. BDS Clause 12.1 (b)(ii.3))
                  </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >9. Sworn Statement in accordance with Section 25.2 (a)(iv) of the IRR of RA 9184 and using
                      the form prescribed in Section IX bidding Forms
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="5" height="25" align="left"><strong>FINANCIAL PROPOSAL</strong></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" ><strong>Bid Prices in Bill of Quantities in the Prescribed Form</strong><br>
                    1) Bid prices in the Bill Quantities;<br>
                    2) Detailed estimates, including a summary sheet indicating the unit prices of construcion materials, labor rates,
                    and equipment rentals used in coming up witht he Bid; and <br>
                    3) Cash flow by quarter or payment schedule.
                  
                  </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td width="450" height="40"></td>
                    <td width="80" height="40"></td>
                    <td width="100" height="40"></td>
                    <td width="100" height="40"></td>
                    <td width="100" height="40"></td>
                  </tr>
                  <tr>
                    <td width="450" height="30"><strong>TOTAL</strong></td>
                    <td width="80" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                  </tr>
                </table>
</tr>
          </table>
          </div>
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