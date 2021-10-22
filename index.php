<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- css online bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

	

	<title>Home</title>
	  <link rel="shortcut icon" href="../iot-suhu/logoSMKN4.png"/>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='../assets/css/bootstrap.css' rel='stylesheet' type='text/css'/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>

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
	
	<h1 style="text-align: center; margin-top: 60px;">SELAMAT DATANG DI WEB SUHU</h1>
		<h1 style="text-align: center; margin-top: 20px;">SMK NEGERI 4 KOTA BOGOR</h1>


	<div class="container border border-success border-3" style="text-align: center; padding: 20px;margin-top: 5%; width: 500px; height: 150px;">
		<h2>Nilai Sensor Suhu</h2>
		<div class="panel panel-default">
			<div class="panel-body">
				<h2><span id="ceksensor"></span></h2>
				
			</div>
		</div>

	</div>
	<script type="text/javascript" src="jquery/jquery.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			setInterval(function(){
				$("#ceksensor").load('ceksensor.php');
			},500);
		});
	</script>
</body>
</html>