<?php
include('css.php');
//1. เชื่อมต่อ database:
include('../condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
//2. query ข้อมูลจากตาราง tb_admin:
$query = "SELECT * FROM department ORDER BY dept_id ASC" or die("Error:" . mysqli_error($con));
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
$result = mysqli_query($con, $query);
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
echo ' <table id="example1" class="table table-bordered  table-hover table-striped">';
  //หัวข้อตาราง
  echo "
  <tr class='danger'>
    <th>ลำดับที่</th>
    <th>หน่วยงาน/สาขา</th>
    <th>สถานะ</th>
    <th>แก้ไข</th>
  </tr>
</thead>
<tbody> ";
  
  $count=0;
  while($row = mysqli_fetch_array($result)) {
    $count++;
  echo "<tr>";
    echo "<td>" .$count .  "</td> ";
    echo "<td>" .$row["dept_name"] .  "</td> ";
    echo "<td><a href='form.php?p=editdept1&ID=$row[0]' <button type='button' class='btn btn-warning btn-xs'>แก้ไขข้อมูล</button></a></td> ";
  echo "</tr>";
  }
echo "</table>";
//5. close connection
mysqli_close($con);
?>