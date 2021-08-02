<?php 
    include './admin/light-bootstrap-dashboard-master/examples/db.php';
  ?>

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
        <div class="form-signin">       
          <h2 class="form-signin-heading">Sign in</h2>
          <form method="post">
            <input type="text" class="form-control" name="username" placeholder="Account" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>  
            <input type="text" class="form-control" name="email" placeholder="Email" required=""/>      
            <label class="checkbox">
              <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
            </label>
            <button class="btn btn-lg btn-primary btn-block btn-1" type="submit" name="submit">Register</button>
          </form>
        </div>
      </div>
      <?php 
      if(isset($_POST['submit'])) {
        $account = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $sql = "INSERT INTO user VALUES (null, '$account', '$email', '$password', '$today', 0)";
        $result = $conn->query($sql);
        if($result){
          echo "<script>alert('Đăng ký thành công')</script>";
          echo "<script>location.href='login.php?q=product'</script>";
        }
      }
    ?>
</body>
</html>