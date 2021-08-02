<?php 
    include 'db.php';
    include 'header.php';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM `sanpham` WHERE `id` = $id";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()){
                $name = $row['ten_sp'];
                $mota = $row['mo_ta'];
                $image = $row['images'];
                $price = $row['price'];
                $soluong = $row['soluong'];
                $ram = $row['ram'];
                $cpu = $row['cpu'];
                $o_cung = $row['o_cung'];
                $card = $row['card'];
            }
        }
    }
?>

<form method="post" action="" class="m-4" enctype="multipart/form-data">
  <a href="product.php?q=product" class="btn btn-primary mb-3">Trở lại</a>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">tên sản phẩm</label>
    <input type="text" value="<?php echo $name; ?>" name="name" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">mô tả</label>
    <input type="text" value="<?php echo $mota; ?>" name="mota" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Số lượng</label>
    <input type="text" value="<?php echo $soluong; ?>" name="soluong" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CPU</label>
    <input type="text" value="<?php echo $cpu; ?>" name="cpu" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">RAM</label>
    <input type="text" value="<?php echo $ram; ?>" name="ram" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ổ cứng</label>
    <input type="text" value="<?php echo $o_cung; ?>" name="o_cung" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CARD</label>
    <input type="text" value="<?php echo $card; ?>" name="card" class="form-control" id="exampleInputexampleInputPassword1">
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
    <input type="number" value="<?php echo $price; ?>" name="product_price" class="form-control" id="exampleInputexampleInputPassword1">
  </div>
  <div class="mb-3">
  <?php 
    echo '<img width="100px" height="100px" style="object-fit: cover" src="../../../img/'.$image.'" alt="">
    <img class="mx-3" width="150px" height="100px" style="object-fit: cover" src="https://cdn.pixabay.com/photo/2012/04/05/01/58/arrow-25864_640.png" alt=""> 
    ';
  ?>
    <label for="imgInp">
      <img class="" width="100px" src="https://png.pngtree.com/png-clipart/20190614/original/pngtree-add-vector-icon-png-image_3723582.jpg" alt="" id="blah">
    </label>
    <input type="file" name="image_product" id="imgInp" hidden>
  </div>
  <button type="submit" class="btn btn-primary" name="submit_edit_product">Sửa Sản Phẩm</button>
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
  if (isset($_POST["submit_edit_product"])) {
    $name = $_POST['name'];
    $mota = $_POST['mota'];
    $loai = $_POST['loai'];
    $ram = $_POST['ram'];
    $cpu = $_POST['cpu'];
    $o_cung = $_POST['o_cung'];
    $card = $_POST['card'];
    $soluong = $_POST['soluong'];
    $product_price = $_POST['product_price'];
    
    $image = $_FILES['image_product']['name'];
    // Lấy ra tên ảnh
    $tmp = $_FILES['image_product']['tmp_name'];
    // Khai báo biến lưu trữ đường dẫn
    move_uploaded_file($tmp, "../../../img/" . $image);
    
    $sql = "UPDATE sanpham SET id_loai=$loai,ten_sp = '$name',mo_ta = '$mota', soluong = '$soluong',cpu = '$cpu', ram = '$ram', o_cung = '$o_cung', card = '$o_cung',price=$product_price,images='$image '  WHERE id=$id ";
    $result = $conn->query($sql);
    if($result){
      echo "<script>location.href='product.php?q=product'</script>";
    }
    
  }

?>