<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Crud Mahasiswa</title>
    <style media="screen">
      *{
        margin: 0;
        padding: 0;
        font-family: "segoe UI";
      }
      .table-wrapper{
        width: 90%;
        margin: 100px auto;
      }
      .form-wrapper{
        padding : 20px 0;
      }
      label{
        display: block;
        padding: 5px 0;
      }
      input, select{
        padding: 5px 10px;
      }
    </style>
  </head>
  <body>

    <div class="table-wrapper">
      <div class="form-wrapper">
        <?php
          include 'conn.php';
          $id = $_GET['id'];
          $query = mysqli_query($conn, "select * from mahasiswa where id_mahasiswa = '$id'");
          while ($data = mysqli_fetch_object($query)) {

         ?>
        <form class="" action="update.php?id=<?= $id ?>" method="post">
          <label for="">Nim</label>
          <input type="text" name="nim" value="<?= $data->nim ?>">
          <label for="">Nama</label>
           <input type="text" name="nama" value="<?= $data->nama ?>">
          <label for="">Jurusan</label>
        <select name="jurusan">
          <option value="Teknik Informatika" value="<?php if($data->jurusan == 'Teknik
          Informatika'){echo 'selected'; }?>">Teknik Informatika</option>
          <option value="Sistem Informasi" value="<?php if($data->jurusan == 'Sistem
          Informasi'){echo 'selected'; }?>">Sistem Informasi</option>
        </select>
        <br>
        <button type="submit" name="button">Simpan</button>
        </form>
      <?php } ?>
      </div>



   </div>
  </body>
</html>
