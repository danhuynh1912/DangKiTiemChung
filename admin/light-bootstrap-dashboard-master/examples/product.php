<?php 
    include 'header.php';
  ?>
      <div class="d-flex justify-content-between">
    </div>
    <table class="table mx-4">
      <thead>
        <tr class="update">
          <th style="text-align: center !important;">STT</th>
          <th style="text-align: center !important;">Họ tên</th>
          <th style="text-align: center !important;">Ngày giờ</th>
          <th style="text-align: center !important;">Nơi tiêm</th>
        </tr>
      </thead>

      <tbody>
<?php 
  $stt= 1;
  $row = $conn->query( "SELECT * FROM nguoidung");
  if ($row->num_rows > 0) {
    while ($row2 = $row->fetch_assoc()){
      ?>
      <tr>
        <td style="text-align: center !important;"><?= $stt++ ?></td>
        <td style="text-align: center !important;"><?= $row2['hovaten'] ?></td>
        <td style="text-align: center !important;"><?= $row2['ngaygio'] ?></td>
        <?php 
          $noitiem = $conn->query("SELECT * FROM noitiem WHERE id_noitiem = {$row2['id_noitiem']}");
          while ($row3 = $noitiem->fetch_assoc()){
            echo '<td style="text-align: center !important;">
              '.$row3['noitiem'].'
            </td>';
          }
        ?>
      </tr>
      <?php
    }
  }
?>    
</tbody>
</table>