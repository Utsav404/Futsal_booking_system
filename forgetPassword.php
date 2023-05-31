<html>
<head>
  <title>Forget Password</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body>
  <div class="container">
    <form class="form-signin" action="#" method="POST">
      <h2 class="form-signin-heading">Forgot Password</h2>
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">Email/Username</span>
        <input type="text" name="email" class="form-control" placeholder="example@abc.com" required>
      </div>
      <br>
      <button class="btn btn-lg btn-primary" type="submit">Forgot Password</button>
      <a class="btn btn-lg btn-primary" href="login.html">Login</a>
    </form>
    
    <?php
    $con = mysqli_connect("localhost", "root", "", "fms");
    if (mysqli_connect_errno()) {
      die("Failed to connect to MySQL: " . mysqli_connect_error());
    }
    
    if (isset($_POST) && !empty($_POST)) {
      $username = mysqli_real_escape_string($con, $_POST['email']);
      $sql = "SELECT * FROM `register` WHERE email = '$username'";
      $res = mysqli_query($con, $sql);
      $count = mysqli_num_rows($res);
      if ($count == 1) {
        $r = mysqli_fetch_assoc($res);
        $password = $r['password'];
        $to = $r['email'];
        $subject = "Your Recovered Password!";
        $message = <<<EMAIL
Please use this password to login: $password;
EMAIL;
        $headers = "From: $to";
        if (mail($to, $subject, $message, $headers)) {
          echo "Your Password has been sent to your email id";
        } else {
          echo "<br><br>Failed to recover your password, try again<br>Check your internet connection!";
        }
      } else {
        echo "Username does not exist in the database";
      }
    }
    ?>
  </div>
</body>
</html>
