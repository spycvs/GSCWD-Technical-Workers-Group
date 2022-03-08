<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'tech');
$variable3 = $_GET['projectSelect3'];
$query = "SELECT * FROM `bidevaluation` WHERE `p_id` ='".$variable3."'" ;
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
		  <td align="center">
			 <p> Republic of the Philippines <br>
			<strong><span class="blue">GENERAL SANTOS CITY WATER DISTRICT</span></strong><br>
			E. Fernandez St., Brgy. Lagao, General Santos City<br>
			Telephone No.: 552-3824; Telefax No.: 553-4960<br>
			Email Address: <u><span class="linkcolor">gscwaterdistrict@yahoo.com</span></u>
</p>
		  </td>
		  <td>
      <strong>GPM-053-1</strong>
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
               <br>
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
                    <td colspan="2" width="450" >5. Net Financing Contracting Capacity (NFCC) computation in accordance with ITB Clause 5.5 </td>
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
                    <td colspan="2" width="450" >6. Bid Security as to form, amount & validity period</td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" height="30">&nbsp;&nbsp;&nbsp;6.1 Bid Securing Declaration OR</td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >&nbsp;&nbsp;&nbsp;6.2 at least one (1) other form, the amount of which shall be equal to a 
                      percentage of the ABC in accordance with the following schedule
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.2a Cash, certified check, cashier's check, bank draft or
                      irrevocable letter of credit, bank guarantee (2%) Php 66,870.00
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" height="30">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6.2b Surety bond (5%) Php 167,175.00
                    </td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >7. Conformity with Trchnical Specifications, as enumerated and specified in Sections VI
                      and VII of the Bidding Documents
                  </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >8. Sworn Statement in accordance with Section 25.2 (a)(iv) of the IRR of RA 9184 and using
                      the form prescribed in Section IX bidding Forms
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" >9. Pipes supplied shall be the product of one manufacturer that has not less than
                      five (5) years successful experience manufacturing pipe in the Philippines of the particular type and size indicated
                    </td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                    <td width="100" ></td>
                  </tr>
                  <tr>
                    <td colspan="5" height="25" align="left"><strong>FINANCIAL PROPOSAL</strong></td>
                  </tr>
                  <tr>
                    <td colspan="2" width="450" height="30"><strong>Bid Prices in Bill of Quantities in the Prescribed Form</strong>
                  </td>
                    <td width="100" height="30" ></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"><?php echo $row['prospectBid']?></td>
                  </tr>
                  <tr>
                    <td width="450" height="30"></td>
                    <td width="80" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                  </tr>
                  <tr>
                    <td width="450" height="30"></td>
                    <td width="80" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                  </tr>
                  <tr>
                    <td width="450" height="30"></td>
                    <td width="80" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
                    <td width="100" height="30"></td>
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
          <tr>
          <table width="100%" align="center">
<td><br>6. Findings:</td>
</tr>
<tr>
<td><br>O Responsive</td>
<td><br>O Non-Responsive</td>
</tr>
<tr>
<td><br>Prepared by:</td>
<td><br>Submitted by:</td>
</tr>
<tr>
<td><br><br><img src="line.png"></td>
<td><br><br><img src="line.png"></td>
</tr>
<tr>
<td>BAC TWG:</td>
<td>BAC Secretariat:</td>
</tr>
<tr>
<td><br><img src="line.png" width="50%"></td>
<td><br><img src="line.png" width="50%"></td>
</tr>
<tr>
<td>Date:</td>
<td>Date:</td>
</tr>
<tr>
<td><br>Noted by:</td>
</tr>
<tr>
<td><br><img src="line.png"></td>
</tr>
<tr>
<td>Implementing Office:</td>
</tr>
<tr>
<td><br><img src="line.png" width="50%"></td>
</tr>
<tr>
<td>Date:</td>
</tr>
</table>
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