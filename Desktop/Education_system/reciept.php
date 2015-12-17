<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Receipt</title>
</head>

<body>
        <center>
         <td width="48" height="37"><a href="index.php" class="style1">Home</a></td>
         <td width="59"><a href="about-us.php" class="style1">AboutUs</a></td>
		  <td width="103"><a href="registeracc.php" class="style1">Current Orders</a></td>
		   <td width="103"><a href="send.php" class="style1">Send</a></td>
         <td width="58"><a href="payment.php" class="style1">Payment</a></td>
         <td width="53"><a href="contact.php" class="style1">Contact</a></td>
		 <td width="61"><a href="logout.php" class="style1">Logout</a></td></center>
    <?php
// start posting my form which look at the fields
$t=$_POST['t'];
$name=$_POST['n'];
$age=$_POST['a'];
$gender=$_POST['g'];
$nationality=$_POST['n'];
$tel=$_POST['te'];
$w=$_POST['email'];
$amount=$_POST['amount'];
$total=(($t*1000000));
$balance=($amount-$total);
echo'
<table width="1087" border="1" cellspacing="2" cellpadding="2">

  <tr>
    <td colspan="3"><div align="center">RECEIPT</div></td>
    <td width="203"><div align="right">Date</div></td>
    <td width="122">'.date("d-m-y ").'</td>
  </tr>
  
  <tr>
   <td width="133">Name</td>
    <td width="133">Age</td>
	<td width="133">Gender</td>
	<td width="133">Nationality</td>
	<td width="133">Phone Number</td>
	<td width="133">Email</td>
    <td width="133">Facults</td>
    <td>Per Semister</td>
	 <td width="170">UNIT PRICE </td>
    <td>RESUILT</td>
  </tr>';
  
  if($t){
  echo'
  <tr>
   <td>halima</td>
   <td>33</td>
   <td>female</td>
   <td>ug</td>
   <td>+256791346057</td>
   <td>halima@hotmail.com</td>
    <td>CITs</td>
    <td>'.$t.'</td>
    <td>'.($t*1000000).'</td>
  </tr>';}
  
  echo'
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>School Fee</td>
    <td>'.$total.' Ugx</td>
  </tr>
 
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Amount Paid </td>
    <td>'.$amount.'</td>
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>Balance</td>
    <td>'.$balance.'</td>
  </tr>';
  
  echo' </table>'
  ?>
    </table>
</body>
</html>
