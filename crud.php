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
        width: 20%;
      }
      td{
        padding: 10px;
      }
      button{
        margin-top: 10px;
        padding: 5px 10px;
      }
    </style>
  </head>
  <body>

    <div class="table-wrapper">
      <div class="form-wrapper">
        <form class="" action="simpan.php" method="post">
          <label for="">Nim</label>
          <input type="text" name="nim">
          <label for="">Nama</label>
           <input type="text" name="nama">
          <label for="">Jurusan</label>
        <select name="jurusan">
          <option value="Teknik Informatika">Teknik Informatika</option>
          <option value="Sistem Informasi">Sistem Informasi</option>
        </select>
        <br>
        <button type="submit" name="button">Simpan</button>
        </form>

      </div>


    <table width="100%" border="1" cellpadding="10" cellspacing="0">
      <thead>
        <tr>
          <th>No</th>
          <th>NIM</th>
          <th>Nama</th>
          <th>Jurusan</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
        include 'conn.php';
        $no = 1;
        $query = mysqli_query($conn, "SELECT * from mahasiswa");
        while ($data = mysqli_fetch_object($query)) {
         ?>
         <tr>
           <td><?php echo $no ?></td>
           <td><?= $data->nim ?></td>
           <td><?= $data->nama ?></td>
           <td><?= $data->jurusan ?></td>
           <td>
             <a href="edit.php?id=<?= $data->id_mahasiswa ?>">Edit</a>
             <a href="hapus.php?id=<?= $data->id_mahasiswa ?>">Hapus</a>
           </td>
         </tr>
           <?php
          $no++;
            }
           ?>
      </tbody>
    </table>
   </div>
  </body>
</html>
