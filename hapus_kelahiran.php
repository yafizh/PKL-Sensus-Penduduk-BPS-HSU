<?php
if (isset($_GET['id'])) {
  require_once "koneksi.php";

  $sql = "DELETE FROM kelahiran WHERE id=" . $_GET['id'];
  if ($mysqli->query($sql) === TRUE) {
    echo "<script>alert('Data Kelahiran Berhasil Dihapus.')</script>";
    echo "<script>" .
      "window.location.href='kelahiran.php';" .
      "</script>";
  } else echo "Error: " . $sql . "<br>" . $mysqli->error;
} else
  echo "<script>" .
    "window.location.href='kelahiran.php';" .
    "</script>";
