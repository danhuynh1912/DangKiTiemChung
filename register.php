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
          <h2 class="form-signin-heading">Sign up</h2>
          <form method="post">
            <input type="text" class="form-control" name="username" placeholder="Account" required="" autofocus="" />
            <input type="password" class="form-control" name="password" placeholder="Password" required=""/>  
            <input type="text" class="form-control" name="doituonguutien" placeholder="doituonguutien" required=""/>    
            <input type="text" class="form-control" name="hovaten" placeholder="hovaten" required=""/>      
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">nơi tiêm</label>
              <select class="form-control" name="loai" id="">
                  <?php 
                      $sql = "SELECT * FROM `noitiem`";
                      $result = $conn->query($sql);
                      if($result->num_rows > 0){
                          while($row = $result->fetch_assoc()){
                              $loai = $row['noitiem'];
                              $id_loai = $row['id_noitiem'];
                              echo '<option value="'.$id_loai.'">'.$loai.'</option>';
                          }
                      }
                  ?>
              </select>
              
            </div>
           <label for="">Ngày giờ</label>
           <input type="datetime-local" name="ngaygio" id="">
            <button class="btn btn-lg btn-primary btn-block btn-1" type="submit" name="submit">Register</button>
          </form>
        </div>
      </div>
      <?php 
      if(isset($_POST['submit'])) {
        $account = $_POST['username'];
        $password = $_POST['password'];
        $loai = $_POST['loai'];
        $doituonguutien = $_POST['doituonguutien'];
        $hovaten = $_POST['hovaten'];
        $ngaygio = $_POST['ngaygio'];
        $sql2 = "SELECT * FROM nguoidung WHERE tendangnhap = '$account'";
        $row = $conn->query($sql2);
        if ($row->num_rows> 0) {
          echo '
          <script>
          alert("Tai khoan da co nguoi dung")
          </script>
          ';
        }
        else {
          $sql = "INSERT INTO nguoidung VALUES (null, '$account', '$password', '$doituonguutien', '$hovaten','$ngaygio', $loai,0)";
          $result = $conn->query($sql);
          if($result){
            echo "<script>alert('Đăng ký thành công')</script>";
            echo "<script>location.href='login.php?q=product'</script>";
          }
        }
      }
    ?>
</body>
</html>