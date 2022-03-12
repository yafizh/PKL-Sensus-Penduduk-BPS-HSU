<?php include_once("header.php"); ?>
<?php include_once("koneksi.php"); ?>
<?php

if (isset($_GET['id'])) {
  $sql = "SELECT * FROM pindahan WHERE id=" . $_GET['id'];
  $result = $mysqli->query($sql);
  $row = $result->fetch_assoc();
} else
  echo "<script>" .
    "window.location.href='pindahan.php';" .
    "</script>";

if (isset($_POST['submit'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $rt = $_POST['rt'];
  $rw = $_POST['rw'];
  $desa = $_POST['desa'];
  $kabupaten = $_POST['kabupaten'];
  $kecamatan = $_POST['kecamatan'];
  $provinsi = $_POST['provinsi'];
  $tanggal = $_POST['tanggal'];

  $sql = "
        UPDATE pindahan SET nik='$nik', 
            nama='$nama', 
            alamat='$alamat', 
            rt='$rt', 
            rw='$rw', 
            desa='$desa', 
            kabupaten='$kabupaten', 
            kecamatan='$kecamatan',
            provinsi='$provinsi',
            tanggal='$tanggal' WHERE id=" . $_GET['id'];

  if ($mysqli->query($sql) === TRUE) {
    echo "<script>alert('Data Pindahan berhasil diedit.');window.location.href='pindahan.php';</script>";
  } else echo "Error: " . $sql . "<br>" . $mysqli->error;
}
?>
<?php include_once("sidebar.php"); ?>
<main class="app-content">
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="page-header">
            <div class="row">
              <div class="col">
                <h2 class="mb-3" id="buttons">Edit Data Pindahan</h2>
              </div>
            </div>
          </div>
          <hr>
          <form action="" method="POST">
            <div class="form-group">
              <label for="nik">NIK</label>
              <input class="form-control" value="<?= $row['nik']; ?>" name="nik" id="nik" type="text">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input class="form-control" value="<?= $row['nama']; ?>" name="nama" id="nama" type="text">
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input class="form-control" value="<?= $row['alamat']; ?>" name="alamat" id="alamat" type="text">
            </div>
            <div class="form-group">
              <label for="rt">RT</label>
              <input class="form-control" value="<?= $row['rt']; ?>" name="rt" id="rt" type="text">
            </div>
            <div class="form-group">
              <label for="rw">RW</label>
              <input class="form-control" value="<?= $row['rw']; ?>" name="rw" id="rw" type="text">
            </div>
            <div class="form-group">
              <label for="desa">Desa</label>
              <input class="form-control" value="<?= $row['desa']; ?>" name="desa" id="desa" type="text">
            </div>
            <div class="form-group">
              <label for="kabupaten">Kabupaten</label>
              <input class="form-control" value="<?= $row['kabupaten']; ?>" name="kabupaten" id="kabupaten" type="text">
            </div>
            <div class="form-group">
              <label for="kecamatan">Kecamatan</label>
              <input class="form-control" value="<?= $row['kecamatan']; ?>" name="kecamatan" id="kecamatan" type="text">
            </div>
            <div class="form-group">
              <label for="provinsi">Provinsi</label>
              <input class="form-control" value="<?= $row['provinsi']; ?>" name="provinsi" id="provinsi" type="text">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input class="form-control" value="<?= $row['tanggal']; ?>" name="tanggal" id="tanggal" type="date">
            </div>
            <button class="btn btn-primary" name="submit" type="submit">Edit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</main>
<!-- Essential javascripts for application to work-->
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<!-- The javascript plugin to display page loading on top-->
<script src="js/plugins/pace.min.js"></script>
<!-- Page specific javascripts-->
<!-- Data table plugin-->
<script type="text/javascript" src="js/plugins/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="js/plugins/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
  $('#sampleTable').DataTable();
</script>
<!-- Google analytics script-->
<script type="text/javascript">
  if (document.location.hostname == 'pratikborsadiya.in') {
    (function(i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r;
      i[r] = i[r] || function() {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date();
      a = s.createElement(o),
        m = s.getElementsByTagName(o)[0];
      a.async = 1;
      a.src = g;
      m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
    ga('create', 'UA-72504830-1', 'auto');
    ga('send', 'pageview');
  }
</script>
</body>

</html>