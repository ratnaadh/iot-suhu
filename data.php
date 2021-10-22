<?php 
	$konek=mysqli_connect("localhost", "root", "", "websensor");
	$sql=mysqli_query($konek, "select * from sensor");
	$GetKelas=mysqli_fetch_array($sql);
 ?>

 <?php 
 				//decision validasi variabel
 				if (isset($GetKelas)) {
 					$no = 1;
 					foreach ($GetKelas as $Get) {
 						?>

 						<td><?php echo $no++; ?></td>
 							<td><?php echo $Get['id']; ?></td>


 							<?php 
 					}
 				}
 			 ?>