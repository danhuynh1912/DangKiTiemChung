<?php 
    include 'header.php';
  ?>
      <div class="d-flex justify-content-between">
      <div class="m-4">
          <a class="btn btn-primary" href="product_add.php">Add Product</a>
      </div>
      <div class="search m-4">
        <form method="post" action="" class="d-flex">
          <div class="me-2">
            <input type="text" required placeholder="Tìm kiếm" name="search" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          </div>
          <button type="submit" name="submit_search" class="btn mx-2 btn-primary">Search</button>
        </form>
      </div>
    </div>
    <table class="table mx-4">
      <thead>
        <tr class="update">
          <th style="text-align: center !important;">STT</th>
          <th style="text-align: center !important;">Tên sản phẩm</th>
          <th style="text-align: center !important;">Loại Sản Phẩm</th>
          <th style="text-align: center !important;">Số lượng</th>
          <th style="text-align: center !important;">Mô tả</th>
          <th style="text-align: center !important;">Giá</th>
          <th style="text-align: center !important;">Ảnh</th>
          <th style="text-align: center !important;">CPU</th>
          <th style="text-align: center !important;">RAM</th>
          <th style="text-align: center !important;">Ổ cứng</th>
          <th style="text-align: center !important;">Card</th>
          <th style="text-align: center !important;">Time Update</th>
          <th style="text-align: center !important;">Update/Delete</th>
        </tr>
      </thead>
      <tbody>
      <?php 
        $sql = "SELECT * FROM `sanpham`";
        $result = $conn -> query($sql);
        if($result->num_rows>0){
            $dem = 0;
            while($row = $result->fetch_assoc()){
                $dem ++;
                $id = $row['id'];
                $name = $row['ten_sp'];
                $soluong = $row['soluong'];
                $mota = $row['mo_ta'];
                $price = $row['price'];
                $image = $row['images'];
                $ram = $row['ram'];
                $cpu = $row['cpu'];
                $o_cung = $row['o_cung'];
                $card = $row['card'];
                $time = $row['time'];
                $id_loai = $row['id_loai'];
                $sql_loai = "SELECT * FROM loaisp where id=$id_loai";
                $result_loai  =$conn-> query($sql_loai);
                if($result_loai->num_rows > 0 ){
                    while($row_loai = $result_loai->fetch_assoc()){
                        $ten_loai = $row_loai['tenloai'];
                    }
                }
                echo '
                    <tr>
                        <td>'.$dem.'</td>
                        <td>'.$name.'</td>
                        <td>'.$ten_loai.'</td>
                        <td>'.$soluong.'</td>
                        <td>'.$mota.'</td>
                        <td>'.number_format($price).'đ</td>
                        <td>
                            <img width="100px" height="100px" style="object-fit: cover" src="../../../img/'.$image.'" alt="">
                        </td>
                        <td>'.$cpu.'</td>
                        <td>'.$ram.' GB</td>
                        <td>'.$o_cung.'</td>
                        <td>'.$card.'</td>
                        <td>'.$time.'</td>
                        <td>
                            <a class="btn btn-primary" href="product_update.php?id='.$id.'">Sửa</a>
                            <a class="btn btn-danger" onclick="return confirm(\'Bạn có muốn xóa không ?\')" href="product_delete.php?id='.$id.'">Xóa</a>
                        </td>
                    </tr>
                ';
            }
        }
      ?>
    </tbody>
</table>