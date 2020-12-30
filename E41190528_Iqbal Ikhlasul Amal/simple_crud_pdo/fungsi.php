<?php

include "database.php";

// TAMBAH DATA
if (isset($_POST['tambah_data'])) {
  // prepare query
  $query = $koneksi->prepare("INSERT INTO user VALUES ('','$_POST[nama]','$_POST[email]','$_POST[nomor_hp]')");
  // menjalankan query
  $query->execute();

  header("location: index.php");
};


// UPDATE DATA
if (isset($_POST['update_data'])) {
  // prepare query
  $query = $koneksi->prepare("UPDATE user SET nama='$_POST[nama]', email='$_POST[email]', no_hp='$_POST[nomor_hp]' WHERE id='$_POST[id]'");
  // menjalankan query
  $query->execute();

  header("location: index.php");
}
