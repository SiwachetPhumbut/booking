<?php

        include('connection.php');

        $sql = "SELECT * FROM  name_car";
        $query = mysqli_query($conn, $sql);
       

        ?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dc3545;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #0dcaf0;
}
</style>
</head>
<body>
  <header>
  <div class="container ">
    <div class="col-auto bg-primary">
      <div class="alert alert-Warning" role="alert">
      <center><h2>ระบบจองรถ</h2></center >
      </div>
    </div>
  </div>
  <table>
  <tr>
  <center><th>รหัสรถ</th></center>
  <center> <th>ชื่อยี่ห้อรถ</th></center>
 
  </tr>
  <?php foreach ($query as $data){?>
    <tr>
    <center> <th><?=$data['id_car']?></th></center>
    <center><th><?=$data['name_car']?></th></center>
    

    <center><h2><a href="editname_car.php?id=<?=$data['id']?>">แก้ไข and เพิ่ม</a></h2></center>
    <center> <a href="deletename_car.php?id=<?=$data['id']?>">ลบข้อมูล</a></center>
    </th>
  </tr> 
    <?php } ?>
</table>
<center><h3><p><a href="header.php">หน้าหลัก</a></p</h3></center>
</body>
</html>
