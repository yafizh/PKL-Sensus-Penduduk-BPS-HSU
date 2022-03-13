<?php include_once("header.php"); ?>
<?php include_once("koneksi.php"); ?>
<?php
if (isset($_GET['id'])) {
  $sql = "SELECT * FROM kematian WHERE id=" . $_GET['id'];
  $result = $mysqli->query($sql);
  $row = $result->fetch_assoc();
} else
  echo "<script>" .
    "window.location.href='kematian.php';" .
    "</script>";

if (isset($_POST['submit'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $jenis_kelamin = $_POST['jenis_kelamin'];
  $tempat_lahir = $_POST['tempat_lahir'];
  $tanggal_lahir = $_POST['tanggal_lahir'];
  $status_nikah = $_POST['status_nikah'];
  $agama = $_POST['agama'];
  $alamat = $_POST['alamat'];
  $tanggal = $_POST['tanggal'];
  $tempat = $_POST['tempat'];
  $sebab = $_POST['sebab'];

  $sql = "
        UPDATE kematian SET 
          nik='$nik',
          nama='$nama',
          jenis_kelamin='$jenis_kelamin',
          tempat_lahir='$tempat_lahir',
          tanggal_lahir='$tanggal_lahir',
          status_nikah='$status_nikah',
          agama='$agama',
          alamat='$alamat',
          tanggal='$tanggal',
          tempat='$tempat',
          sebab='$sebab' WHERE id=" . $_GET['id'];

  if ($mysqli->query($sql) === TRUE) echo "<script>alert('Kematian berhasil diedit.');window.location.href='kematian.php';</script>";
  else echo "Error: " . $sql . "<br>" . $mysqli->error;
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
                <h2 class="mb-3" id="buttons">Edit Data Kematian</h2>
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
            <fieldset class="form-group">
              <label>Jenis Kelamin</label>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" id="optionsRadios1" type="radio" name="jenis_kelamin" value="Laki-Laki" <?= $row['jenis_kelamin'] == 'Laki-Laki' ? "checked" : ""; ?>>Laki - Laki
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" id="optionsRadios2" type="radio" name="jenis_kelamin" value="Perempuan" <?= $row['jenis_kelamin'] == 'Perempuan' ? "checked" : ""; ?>>Perempuan
                </label>
              </div>
            </fieldset>
            <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input class="form-control" value="<?= $row['tempat_lahir']; ?>" name="tempat_lahir" id="tempat_lahir" type="text">
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input class="form-control" value="<?= $row['tanggal_lahir']; ?>" name="tanggal_lahir" id="tanggal_lahir" type="date">
            </div>
            <div class="form-group">
              <label for="agama">Agama</label>
              <select class="form-control" name="agama" id="agama">
                <option <?= $row['agama'] == 'Protestan' ? "selected" : ""; ?> value="Protestan">Protestan</option>
                <option <?= $row['agama'] == 'Islam' ? "selected" : ""; ?> value="Islam">Protestan</option>
                <option <?= $row['agama'] == 'Katolik' ? "selected" : ""; ?> value="Katolik">Katolik</option>
                <option <?= $row['agama'] == 'Hindu' ? "selected" : ""; ?> value="Hindu">Hindu</option>
                <option <?= $row['agama'] == 'Buddha' ? "selected" : ""; ?> value="Buddha">Buddha</option>
                <option <?= $row['agama'] == 'Khonghucu' ? "selected" : ""; ?> value="Khonghucu">Khonghucu</option>
              </select>
            </div>
            <div class="form-group">
              <label for="status_nikah">Status Nikah</label>
              <select class="form-control" name="status_nikah" id="status_nikah">
                <option <?= $row['status_nikah'] == 'Belum Kawin' ? "selected" : ""; ?> value="Belum Kawin">Belum Kawin</option>
                <option <?= $row['status_nikah'] == 'Kawin' ? "selected" : ""; ?> value="Kawin">Kawin</option>
                <option <?= $row['status_nikah'] == 'Cerai Hidup' ? "selected" : ""; ?> value="Cerai Hidup">Cerai Hidup</option>
                <option <?= $row['status_nikah'] == 'Cerai Mati' ? "selected" : ""; ?> value="Cerai Mati">Cerai Mati</option>
              </select>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input class="form-control" value="<?= $row['alamat']; ?>" name="alamat" id="alamat" type="text">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input class="form-control" value="<?= $row['tanggal']; ?>" name="tanggal" id="tanggal" type="date">
            </div>
            <div class="form-group">
              <label for="tempat">Tempat</label>
              <input class="form-control" value="<?= $row['tempat']; ?>" name="tempat" id="tempat" type="text">
            </div>
            <div class="form-group">
              <label for="sebab">Sebab</label>
              <input class="form-control" value="<?= $row['sebab']; ?>" name="sebab" id="sebab" type="text">
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