<?php 

include 'controller_data.php';
// membuat objek dari class kelas
$data = new controller_data();
$Getdata = $data->GetData_All();

//mengecek di objek $kelas ada berapa banyak property
//echo var_dump($kelas);

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Data Suhu</title>
    <link rel="shortcut icon" href="../iot-suhu/logoSMKN4.png"/>
  <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href='../assets/css/bootstrap.css' rel='stylesheet' type='text/css'/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
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

<table class="table table-striped table-hover">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">ID</th>
      <th scope="col">Data Suhu 1</th>
      <th scope="col">Data Suhu 2</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Waktu</th>
    </tr>
  </thead>
  <tbody>
<?php 

        //decision validasi variabel
        if (isset($Getdata)) {
          $no = 1;
          foreach ($Getdata as $Get) {
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $Get['id']; ?></td>
              <td><?php echo $Get['nilai_sensor1']; ?></td>
              <td><?php echo $Get['nilai_sensor2']; ?></td>
              <td><?php echo $Get['tgl']; ?></td>
              <td><?php echo $Get['waktu']; ?></td>
            </tr>
            <?php 
          }
        }
       ?>
  </tbody>
  </table>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>