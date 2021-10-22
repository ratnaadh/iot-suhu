<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


	<title>Setting Mode</title>
	  <link rel="shortcut icon" href="../iot-suhu/logoSMKN4.png"/>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='../assets/css/bootstrap.css' rel='stylesheet' type='text/css'/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<?php 
include "konek.php";
$db = new konek();
$con = $db->connect();
if(isset($_POST['btn']))
{
		$mode=$_POST['status'];
		mysqli_query($con, "update mode set mode='$mode' where id=1");
}

$konek=mysqli_connect("localhost", "root", "", "websensor");
$data=mysqli_query($konek,"select * from mode");
$sql=mysqli_fetch_array($data);
$mode=$sql['mode'];
//echo $mode;
if ($mode==1)
	$ket="Save Data";
if ($mode==0)
	$ket="Realtime";
 ?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">WEB SUHU SMKN 4</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><button class="btn btn-outline-success" type="submit">HOME</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mode.php"><button class="btn btn-outline-secondary" type="submit">SETTING MODE</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="datasuhu.php"><button class="btn btn-outline-secondary" type="submit">DATA SUHU</button></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="info.php"><button class="btn btn-outline-primary" type="submit">INFORMASI</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<h1 style="text-align: center; margin-top: 60px;">SETTING MODE</h1>

<div class="container border border-primary border-3" style="text-align: center; margin-top: 60px; padding: 20px; width: 500px">
	<h2><b>	Pilih Mode </b></h2>
	<div class="panel panel-default"  >
		<div class="panel-body" >

			<form action="" method="POST">
				<h1><?php echo $ket; ?> </h1>
					<div class="form-check form-check-inline">
				<h3>
  				<input class="form-check-input" type="radio" name="status" id="status" value="1" style="text-align: center; margin-left: 0px;">
  				<label class="form-check-label" for="inlineRadio1">SAVE DATA</label></h3>
			</div>
			<div class="form-check form-check-inline" >
				<h3>
  				<input class="form-check-input" type="radio" name="status" id="status" value="0" style="text-align: center; margin-right: 10px; margin-left: 7px;">
  				<label class="form-check-label" for="inlineRadio2">REALTIME</label></h3>
			</div>
			<div class="d-grid gap-2">
			<button class="btn btn-primary form-check" name="btn" id="btn">Save</button>	
			</div>
			</form>
		</div>
	</div>
</div>

	<script type="text/javascript" src="jquery/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>