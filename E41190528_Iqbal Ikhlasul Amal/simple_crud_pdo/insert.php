<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
</head>

<body>

  <form action="fungsi.php" method="POST">

    <div>
      <label for="nama">Nama</label>
      <input type="text" name="nama" id="nama">
    </div>

    <div>
      <label for="email">email</label>
      <input type="email" name="email" id="email">
    </div>

    <div>
      <label for="nomor_hp">nomor_hp</label>
      <input type="number" name="nomor_hp" id="nomor_hp">
    </div>

    <input type="submit" name="tambah_data">

  </form>

</body>

</html>