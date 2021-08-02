<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./login.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="wrapper">
      <form method="post" action="">
        <div class="form-signin">       
          <h2 class="form-signin-heading">Sign in</h2>
          <input type="email" class="form-control" name="username" placeholder="Email Address" required autofocus="" />
          <input type="password" class="form-control" name="password" placeholder="Password" required/>      
          <label class="checkbox">
            <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
          </label>
          <a href="/manguonmo/index.php">
            <button class="btn btn-lg btn-primary btn-block btn-1" type="submit" name="submit">Login</button>
          </a>
          <div class="signuplink">
              <p>Not a member? <a href="./register.php">Sign up</a></p>
          </div>
        </div>
      </form>
    </div>
    <?php
      include './admin/light-bootstrap-dashboard-master/examples/db.php';
        if (isset($_POST['submit'])) {
         $username = $_POST['username'];
         $password = $_POST['password'];
         $sql = "SELECT * FROM user WHERE email='$username' and matKhau='$password'";
         $result = $conn->query($sql);
         if ($result->num_rows >0) {
           while ($row=$result->fetch_assoc()) {
            $pq = $row['phanquyen'] ;
           }
           if ($pq==1) {
             echo '<script>
              location.href=\'./admin/light-bootstrap-dashboard-master/examples/product.php\'
             </script>';
           }
           else {
            echo '<script>
            location.href=\'index.php\'
           </script>';
           }
         }
        }
    ?>
</body>
</html>