<?php
include "database.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil Data</title>
</head>

<body>
  <a href="insert.php">Tambah data</a>
  <hr>
  <table border="1">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Nomor HP</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $query = $koneksi->prepare("SELECT * FROM user");
      $query->execute();
      $no = 1;
      // FETCH_OBJ = data dijadikan dalam bentuk objek
      while ($data = $query->fetch(PDO::FETCH_OBJ)) {
      ?>
        <tr>
          <td><?= $no++; ?></td>
          <td><?= $data->nama; ?></td>
          <td><?= $data->email; ?></td>
          <td><?= $data->no_hp; ?></td>
          <td>
            <a href="update.php?id=<?= $data->id; ?>">edit</a>
            <a href="delete.php?id=<?= $data->id; ?>">hapus</a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</body>

</html>