<?php 
$konek=mysqli_connect("localhost", "root", "", "websensor");
$sql=mysqli_query($konek, "select * from sensor order by id desc limit 1");
$data=mysqli_fetch_array($sql);
$nilai1=$data["nilai_sensor1"];
$nilai2=$data["nilai_sensor2"];
echo $nilai1." C ";
echo $nilai2. " RH "; 
 ?>