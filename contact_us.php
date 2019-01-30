<?php
#...................................................................................................................
$host="localhost";
$user="root";
$pass="";
$dbase="movies";
$con=mysqli_connect($host, $user, $pass, $dbase);
if(!$con==true)
{
	echo "Database cannot be connected";
}





#..................................................................................................................
?>
<html>
<head>
<title>DESMOPQ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!--[if IE 6]><link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" /><![endif]-->
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="shell">
  <div id="header">
    <h1 id="logo"><a href="https://www.youtube.com/watch?v=EjOEVKojIyQ">DESMOPQ</a></h1>
    <div class="social"> <span>FOLLOW US ON:</span>
      <ul>
        <li><a class="twitter" href="https://www.twitter.com">twitter</a></li>
        <li><a class="facebook" href="https://www.facebook.com/Desmopq">facebook</a></li>
        <li><a class="vimeo" href="https://www.youtube.com">YouTube</a></li>
        <li><a class="rss" href="https://www.instagram.com">Instagram</a></li>
      </ul>
    </div>
    <div id="navigation">
      <ul>
        <li><a href="index.php">HOME</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="privacy_policy.php">PRIVACY POLICY</a></li>
        <li><a href="about_us.php">ABOUT US</a></li>
        <li><a class="active" href="contact_us.php">CONTACT US</a></li>
        <li><a href="advertise.php">ADVERTISE</a></li>
		<li><a href="terms_and_conditions.php">TERMS AND CONDITIONS</a></li>
      </ul>
    </div>
    
	
	
	<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>Contact Us</title>
	<script src="freecontactformvalidation.js"></script>
	<script>
	required.add('Full_Name','NOT_EMPTY','Full Name');
	required.add('Email_Address','EMAIL','Email Address');
	required.add('Your_Message','NOT_EMPTY','Your Message');
	required.add('AntiSpam','NOT_EMPTY','Anti-Spam Question');
	</script>
	<link rel="stylesheet" type="text/css" href="freecontactform.css">
	</head>
	<body>
	
	<form name="freecontactform" method="post" action=".php" onsubmit="return validate.check(this)">
	<table width="400px" class="freecontactform">
	<tr>
	 <td colspan="2">
	  
	 <div class="freecontactformheader">Contact Us Form</div>
	  
	 <div class="freecontactformmessage">Fields marked with <span class="required_star"> * </span> are mandatory.</div>
	  
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Full_Name" class="required">Full Name<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Full_Name" id="Full_Name" maxlength="80" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Email_Address" class="required">Email Address<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Email_Address" id="Email_Address" maxlength="100" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Telephone_Number" class="not-required">Telephone Number</label>
	 </td>
	 <td valign="top">
	  <input type="text" name="Telephone_Number" id="Telephone_Number" maxlength="100" style="width:230px">
	 </td>
	</tr>
	<tr>
	 <td valign="top">
	  <label for="Your_Message" class="required">Your Message<span class="required_star"> * </span></label>
	 </td>
	 <td valign="top">
	  <textarea style="width:230px;height:160px" name="Your_Message" id="Your_Message" maxlength="2000"></textarea>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center" >
	  <div class="antispammessage">
	  To help prevent automated spam, please answer this question
	  <br /><br />
		  <div class="antispamquestion">
		   <span class="required_star"> * </span>
		   Using only numbers, what is 10 plus 15? &nbsp; 
		   <input type="text" name="AntiSpam" id="AntiSpam" maxlength="100" style="width:30px">
		  </div>
	  </div>
	 </td>
	</tr>
	<tr>
	 <td colspan="2" style="text-align:center" >
	 <br /><br />
	  <input type="submit" value=" Submit Form " style="width:200px;height:40px">
	  <br /><br />
	 
	 
	  <br /><br />
	 </td>
	</tr>
	</table>
	</form>
</body>
</html>




	
	
	
    <div class="cl">&nbsp;</div>
  </div>
  <div id="footer">
    <p class="lf">Copyright &copy; 2019 <a href="http://desmopq.com">DESMOPQ.COM</a> - All Rights Reserved</p>
    <p class="rf">Design by <a href="http://desmopq.com/">CAI Developing Community</a></p>
    <div style="clear:both;"></div>
  </div>
</div>
<!-- END PAGE SOURCE -->
</body>
</html>