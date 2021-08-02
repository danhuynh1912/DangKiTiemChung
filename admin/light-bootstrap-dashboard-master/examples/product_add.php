<?php 
    include 'db.php';
    include 'header.php';
?>

<form method="post" action="" class="m-4" enctype="multipart/form-data">
  <a href="product.php?q=product" class="btn btn-primary mb-3">Trở lại</a>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">tên sản phẩm</label>
    <input type="text" name="name" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">mô tả</label>
    <input type="text" name="mota" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Số lượng</label>
    <input type="text" name="soluong" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CPU</label>
    <input type="text" name="cpu" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">RAM</label>
    <input type="text" name="ram" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ổ cứng</label>
    <input type="text" name="o_cung" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CARD</label>
    <input type="text" name="card" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">loại sản phẩm</label>
    <select class="form-control" name="loai" id="">
        <?php 
            $sql = "SELECT * FROM `loaisp`";
            $result = $conn->query($sql);
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    $loai = $row['tenloai'];
                    $id_loai = $row['id'];
                    echo '<option value="'.$id_loai.'">'.$loai.'</option>';
                }
            }
        ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">product_price</label>
    <input type="number" name="product_price" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image_product</label>
    <label for="imgInp">
      <img class="" width="100px" src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-add-vector-icon-png-image_3723582.jpg" alt="" id="blah">
    </label>
    <input type="file" name="image_product" id="imgInp" hidden>
  </div>
  <button type="submit" class="btn btn-primary" name="submit_add_product">Thêm Product</button>
</form>
<script>
  imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      blah.src = URL.createObjectURL(file)
    }
  }
</script>
<?php 
  include 'db.php';
  if (isset($_POST["submit_add_product"])) {
    $name = $_POST['name'];
    $mota = $_POST['mota'];
    $loai = $_POST['loai'];
    $ram = $_POST['ram'];
    $cpu = $_POST['cpu'];
    $o_cung = $_POST['o_cung'];
    $card = $_POST['card'];
    $soluong = $_POST['soluong'];
    $product_price = $_POST['product_price'];
    if($_FILES['image_product']['type'] == "image/jpeg" || $_FILES['image_product']['type'] == "image/png" || $_FILES['image_product']['type'] == "image/gif" || $_FILES['image_product']['type'] == "image/webp")
    {
      $image = $_FILES['image_product']['name'];
      // Lấy ra tên ảnh
      $tmp = $_FILES['image_product']['tmp_name'];
      // Khai báo biến lưu trữ đường dẫn
      move_uploaded_file($tmp, "../../../img/" . $image);
      $sql = "INSERT INTO sanpham VALUES (null,$loai,'$name','$soluong','$mota',$product_price,'$image','$today','$cpu', '$ram','$o_cung','$card')";
      $result = $conn->query($sql);
      if($result){
        echo "<script>location.href='product.php?q=product'</script>";
      }
    }
    else{
      echo '<div class="alert alert-danger" role="alert">
          Vui lòng chọn đúng định dạng ảnh jpg/jpeg/png/webp/gif
        </div>';
    }
  }

?>