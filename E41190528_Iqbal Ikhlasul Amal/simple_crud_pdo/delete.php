<?php

include "database.php";

$query = $koneksi->prepare("DELETE FROM user WHERE id='$_GET[id]'");
$query->execute();

header("location: index.php");
