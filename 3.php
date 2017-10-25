<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>biodata</title>
    

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
     
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background="images.jpg">
    <marquee><h1>" B I O D A T A"</h1></marquee>
    <br>
  <ul class="nav nav-tabs nav-justified">
  <li role="belajar_bootstrap" class="active"><a href="tugas.php">MENU</a></li>
  <li role="belajar_bootstrap"><a href="2.php">GALLERY</a></li>
  <li role="belajar_bootstrap"><a href="3.php">BIODATA</a></li>
</ul>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama :</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Anda">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Tanggal Lahir :</label>
    <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
     <label for="exampleInputEmail1">Jenis Kelamin :</label>
  <div class="radio">
  <label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Laki-Laki
    <br>
     <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Perempuan
  </label>
</div>
<label for="exampleInputEmail1">Alamat :</label>
<textarea class="form-control" rows="3"></textarea>

<label for="exampleInputEmail1">Hobby :</label>
<div class="checkbox">
  <label>
    <input type="checkbox" value="">Mengaji
  </label>
</div>

  <div class="checkbox">
    <label>
      <input type="checkbox"> Membaca
    </label>
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox"> Menari
    </label>
  </div>

  <div class="checkbox">
    <label>
      <input type="checkbox"> Makan
  </div>
   <div class="checkbox">
    <label>
      <input type="checkbox"> </label>Jalan-Jalan
      </div>
  <button type="submit" class="btn btn-default">Save</button>
</form>
<br>
<br>
<table class="table" border="5">
      <th bgcolor="deepskyblue">No</th>
      <th bgcolor="deepskyblue">Nama</th>
      <th bgcolor="deepskyblue">Tanggal Lahir</th>
      <th bgcolor="deepskyblue">Jenis Kelamin</th>
      <th bgcolor="deepskyblue">Alamat</th>
      <th bgcolor="deepskyblue">Hobby</th>
      <tr>
          <td>1</td>
          <td>Halimah</td>
          <td>01-09-2000</td>
          <td>Perempuan</td>
          <td>sukamenak</td>
          <td>Mengaji</td>
          <tr>

         <td>2</td>
          <td>Penti</td>
          <td>23-06-2000</td>
          <td>Perempuan</td>
          <td>Rancamanyar</td>
          <td>Menari</td>
          <tr>

            <td>3</td>
          <td>Diandra</td>
          <td>25-02-2000</td>
          <td>Perempuan</td>
          <td>Cibolerang</td>
          <td>Membaca</td>
          <tr>

          <td>4</td>
          <td>Diah</td>
          <td>11-10-2000</td>
          <td>Perempuan</td>
          <td>Moh.Hatta</td>
          <td>Jalan-jalan</td>
          <tr>

          <td>5</td>
          <td>Fitri</td>
          <td>21-07-2000</td>
          <td>Perempuan</td>
          <td>Bahuan</td>
          <td>Makan</td>
          </tr>



</table>
<script src="dist/js/bootstrap.min.js"></script>
     
  </body>
</html>