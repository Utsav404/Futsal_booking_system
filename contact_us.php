<?php
if(isset($_POST['btnsend'])){

$to='utsavj350@gmail.com';
$subject='Futsal message';

$name=$_POST['name'];
$email=$_REQUEST['email'];
$message=$_REQUEST['message'];
$topic=$_POST['Subject'];
$number=$_POST['Contactnumber'];
/*$body=<<<EMAIL*/
$message=<<<EMAIL
//Hi! my name is $name and my topic is $topic
From: $name
email: $email
Phone no.: $number
Subject: $topic
 
   $message
//from $name
//oh my email is $email
EMAIL;
$header="From:$email";
//if(isset($_POST['btnsend'])){
   if($name==''||$email==''||$message==''){
    $feedback="Please Fill all content ";
}else{
   $sent=mail($to,$subject,$message,$header);
   if($sent)
   {
       print('Thank you!!');
   }
    //$msg="Thanks for Your message";
   }
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<style type="text/css">    
form
{
  width: 500px;
}
select
{
  height:25px;
	width:280px;
	font-size:15px;
	border:1;
	margin-bottom:20px;
	padding-left:10px;
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
	/* box-shadow: 0px 0px 25px darkgreen;*/  	   
}
input[type="text"],input[type="tel"],input[type="email"]
{
	 height:25px;
	 width:250px;
	 font-size:15px;
	 border:1;
	 margin-bottom:20px;
	 padding-left:7px;
	 font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
   box-sizing: content-box;	    
}
    #Subject{
       height:25px;
	   width:280px;
	   font-size:15px;
	   border:1;
	   margin-bottom:20px;
	   padding-left:7px;
       font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        box-sizing: border-box;
	    
    }
    .contact{
        color: #ddd;
        font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position: relative;
        padding-left: 10px;
    }
      td{
                width: 100%;
                text-align:  left;
                   font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
    table{
        padding-right: 200px;
        margin: 20px;
        padding: 30px;
    }
    textarea{
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 15px;
    }
      .form_submit{
				padding:8px 17px;
				cursor:pointer;
				color:#fff;
				border:3px; 
				background-color:#2ecc71;
				border-bottom:2px solid #27ae60;
				margin-bottom:5px;
		    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        position:relative;
		   }
</style>
</head>

<body style=" background-image: url(img/backgr.jpg);">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background:#213e4a; font-family:impact; font-size:20px; ">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href=
                " <?php
                    session_start();
                    if(isset($_SESSION['email']))
                    {  
                     if($_SESSION['email'] == 'kiran' )
                        echo 'admin.php';
                    else
                        echo 'customer.php';
                    }
                    else 
                      echo 'index.php';

                    ?>" 
                style="background: linear-gradient(black,darkgreen);
                 font-family:abril fatface; font-size: 26px; color: white; border:1px solid skyblue; border-radius: 15px; align-items:center;">
                    &raquo; Baneshwor Futsal &laquo;</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li class="active">
                        <a href="contact_us.php">Contact</a>
                    </li>
                    <li>
                        <a href="tournament.php">MyTiesheet</a>
                    </li>
                    <li>
                        <a href="futsal_def.php">About Futsal</a>
                    </li>
                
                    <li>
                        <a href="booking.php">Book Now</a>
                    </li>
                    <?php
                    if(!isset($_SESSION['email']))
                      echo '
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="signup.html">Register</a>
                            </li>
                        </ul>
                      </li>';
                    else
                      echo '
                      <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"> '.$_SESSION['user'].'<b class="caret"></b> </a>
                        <ul class="dropdown-menu">
                      <li>
                        <a href="destroy.php"> &nbsp;Logout <span class="glyphicon glyphicon-log-out"></a>
                      </li>';

                    ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<div id="container" style= "position: relative; left: 10%; font-size:20px;">
<div class="contact">
  <br>
  Please Fill Out This Form And We Will Get In Touch With You Shortly.   <!--<p id="msg"><?php echo $msg;?></p>-->
  <form name="contact" method="POST" action="?" >
  <table cellspacing=0 cellpadding=1 border="0" align=center>
  <tr>
  <td width="40%">
  <div class="subject">
  <label >Subject</label><br/>
  <select name="Subject" id="Subject" class="subject_class" required>
  <option value="">---</option>
  <option value="Bookings">Bookings</option>
  <option value="League">League</option>
  <option value="Tournaments">Tournaments</option>
  </select>
  </div>
<div class="name">
  <label for="name"><p>Your Name (required)</label><br />
  <span class="your_name"><input type="text" name="name" value="" size="40"  placeholder="Full name" required/></span> 
</div>
<div class="email">
  <label for="email"><p>Your Email (required)</label><br />
  <span class="your_email"><input type="email" name="email" value="" size="40"  placeholder="Eg: myname@example.com" required /></span> 
</div>
<div class="contact_number">
  <b><p>Your contact number (required)<br />
  <span class="Contact_num"><input type="tel" name="Contactnumber" value="" size="40" class="cnum_class" placeholder="Mobile or Phone"required/></span> </p><!--Input type="tel"--></b>
</div>
<div class="message">
  <label for="message"><p>Your Message</label><br />
  <span class="message"><textarea name="message" cols="80" rows="10"  placeholder="Message"></textarea></span> 
</div>
    <p><input type="submit" value="Send" class="form_submit" name="btnsend"/></p>
</td>
<td valign=top>
<div class="office_info" style="position:absolute; left:25%;float: right;border-color: black; border-radius: 10px; background-color: #9697bb; color:#222; width:50%; padding-left: 10%;" >
<h2><u>Head Office</u></h2>
<p>Phone: 9864750623<br/>
Baneshwor, Nepal
    </div></td></tr>
<!--<div class="video"><iframe width="560" height="315" src="https://www.youtube.com/embed/AFlt0JB0dUc" frameborder="0" allowfullscreen></iframe></div>-->
    <tr><td colspan=2>
  </table> 
</form>
</div>
</div>
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
<?php
include"footer.php";
?>