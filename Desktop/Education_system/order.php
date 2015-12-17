<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Order</title>
<style type="text/css">
<!--
.style1 {
	color: #330066;
	font-weight: bold;
	font-size: 24px;
}
-->
</style>
</head>

<body bgcolor="pink">
          
         <center>
		 <td width="48" height="37"><a href="index.php" class="style1">Home</a></td>
		 <td width="59"><a href="about-us.php" class="style1">AboutUs</a></td>
         <td width="103"><a href="order.php" class="style1">CurrentOrders</a></td>
         <td width="58"><a href="payment.php" class="style1">Payment</a></td>
         <td width="53"><a href="contact.php" class="style1">Contact</a></td>
		 <td width="61"><a href="logout.php" class="style1">Logout</a></td></center>
		 
	  <img src="images/9.jpg" width="300" height="300" /> 
	    <img src="images/8.jpg" width="300" height="300" />
		  <img src="images/7.jpg" width="300" height="300" />
		    <img src="images/3.jpg" width="300" height="300" />   
	<form id="form1" name="form1" method="post" action="money.php">
  <table width="493" border="0" cellspacing="2" cellpadding="2" align="center">
  
  <tr>
            <td>ICT</td>
            <td><label>
              <select name="ICT">
                <option>BSCE</option><option>BSCE</option>
                <option>BSC.IS</option><option>BSC.IS</option>
                <option>BAIT</option><option>BACS</option>
              </select>
            </label></td>
          </tr>
  
    <tr>
      <td colspan="2"><div align="center" class="style1">Student's Credit Card</td>
    </tr>
	
	<td>
        <strong>
        <label>Name:</label>
      </strong></td>
    <td><input name="name" type="text" id="name" /></td>
  </tr>
  
  <td>
        <strong>
        <label>Age:</label>
      </strong></td>
    <td><input name="age" type="text" id="age" /></td>
  </tr>
  
   <tr>
       <td>
       <strong>
      <label>Gender:</label>
	        </strong></td>
      <td colspan="2"><input type="radio" name="gender" id="radio" value="Male" />
        <label for="radio">Male
          <input type="radio" name="gender" id="radio2" value="Female" />
          Female</label></td>
      </tr>
         

          <tr>
		 <td>
       <strong>
            <label>Nationality</label>
            </strong></td>
              <td><select name="nationality">
                <option>uganda</option><option>RDcongo</option>
                <option>Burundi</option><option>Rwanda</option>
                <option>Tanzania</option><option>Kenya</option>
                <option>ZAmbie</option><option>England</option>
                <option>Russian</option><option>France</option>
                <option>Algerian</option><option>USA</option>
              </select>
            </label></td>
          </tr>
		  
		  <tr>
		     <td>
       <strong>
            <label>Phone Number:</label>
             </strong></td
              ><td><input type="text" name="tel" /></td>
          </tr>
		  
		    <tr>
		     <td>
       <strong>
            <label>Email</label>
             </strong></td
              ><td><input type="text" name="email" />
           </td>
          </tr>
		  
		  <tr>
		  <td>
        <strong>
        <label>Faculty:</label>
      </strong></td>
    <td><input name="f" type="text" id="f" /></td>
  </tr>
	
    <tr>
	  <td>
        <strong>
     <label>Fee</label>
	  </strong></td>
      <td><input name="fee" type="text" id="fee" /></td>
	   </strong></td>
    </tr>
	
    <tr>
            <td><label><input type="submit" name="submit2" value="reset" /></label></td>
            <td><label>
              <input type="submit" name="submit" value="send" />
            </label></td>
	      </tr>
	
  </table>
</form>
</body>
</html>
