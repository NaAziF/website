
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
        <li><a class="facebook" href="https://www.facebook.com">facebook</a></li>
        <li><a class="vimeo" href="https://www.youtube.com">YouTube</a></li>
        <li><a class="rss" href="https://www.instagram.com">Instagram</a></li>
      </ul>
    </div>
    <div id="navigation">
	
      <ul>
        <li><a class="active" href="index.php">HOME</a></li>
        <li><a href="news.php">NEWS</a></li>
        <li><a href="privacy_policy.php">PRIVACY POLICY</a></li>
        <li><a href="about_us.php">ABOUT US</a></li>
        <li><a href="contact_us.php">CONTACT US</a></li>
        <li><a href="advertise.php">ADVERTISE</a></li>
		<li><a href="terms_and_conditions.php">TERMS AND CONDITIONS</a></li>
      </ul>
    </div>
   <div id="sub-navigation">
    
   <?php
#..........................................................................................................................................................................................
   
$mm=$_GET['movie'];
echo "$mm";   
   
#get all values from previous page   
$host="localhost";
$user="root";
$pass="";
$dbase="movies";
$con=mysqli_connect($host, $user, $pass, $dbase);
if(!$con==true)
{
	echo "Database cannot be connected";
}

   
   
  
#............................................................................................................................................................................................
   
   ?>
     </div>
    <br>
   
   
    <div id="news">
      <div class="head">
         <h3>NEWS</h3>
        <p class="text-right"><a href="news.php">See all</a></p>
      </div>
      <div class="content">
        <p class="date">25/12/2018</p>
        <h4>Desmopq A Christmas Gift for people</h4>
        <p>&quot;Desmopq A Christmas Gift for people announced the CAI-DEVELOPING-COMMUNITY owner FAIZAN. They told that they are giving people A christmas gift that is there new movie website WWW.DESMOPQ.COM. All people are waiting for there movie website. that is supposed to realize on 01/01/2018. Thanks </p>
         </div>
      <div class="content">
        <p class="date">27/12/2018</p>
        <h4 th>DesmopQ preparing to launch there Website</h4>
        <p>DESMOPQ owner told that they are about to launch there Movies website DESMOPQ.com. Further details are awaited,&quot;...</p>
         </div>
      <div class="content">
        <p class="date">01/01/2019</p>
        <h4>DESMOPQ Launched</h4>
        <p>Great movie website WWW.DESMOPQ.COM ha been Launched and are statosfying people very much they are recieving very much high traffic and are helping people also by giving them the desired content. Thanks </p>
         </div>
    </div>
    <div id="coming">
      <div class="head">
        <h3>ADDS<strong>!</strong></h3>
        <p class="text-right"><a href="advertise.php">See all</a></p>
      </div>
      <div class="content">
        <h4>The Princess and the Frog </h4>
        <a href="#"><img src="css/images/coming-soon1.jpg" alt="" /></a>
        <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated comedy set in the great city of New Orleans...</p>
         </div>
      <div class="cl">&nbsp;</div>
      <div class="content">
        <h4>The Princess and the Frog </h4>
        <a href="#"><img src="css/images/coming-soon2.jpg" alt="" /></a>
        <p>Walt Disney Animation Studios presents the musical &quot;The Princess and the Frog,&quot; an animated comedy set in the great city of New Orleans...</p>
         </div>
    </div>
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