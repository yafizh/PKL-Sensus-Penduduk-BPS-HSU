<?php include_once("header.php"); ?>
<?php include_once("koneksi.php"); ?>
<?php
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
        INSERT INTO kematian (
          nik,
          nama,
          jenis_kelamin,
          tempat_lahir,
          tanggal_lahir,
          status_nikah,
          agama,
          alamat,
          tanggal,
          tempat,
          sebab 
        ) VALUES (
            '$nik', 
            '$nama', 
            '$jenis_kelamin', 
            '$tempat_lahir', 
            '$tanggal_lahir',
            '$status_nikah',
            '$agama', 
            '$alamat', 
            '$tanggal', 
            '$tempat', 
            '$sebab'  
        )";

  if ($mysqli->query($sql) === TRUE) echo "<script>alert('Kematian berhasil ditambahkan.')</script>";
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
                <h2 class="mb-3" id="buttons">Tambah Data Kematian</h2>
              </div>
            </div>
          </div>
          <hr>
          <form action="" method="POST">
            <div class="form-group">
              <label for="nik">NIK</label>
              <input class="form-control" name="nik" id="nik" type="text">
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input class="form-control" name="nama" id="nama" type="text">
            </div>
            <fieldset class="form-group">
              <legend>Jenis Kelamin</legend>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" id="optionsRadios1" type="radio" name="jenis_kelamin" value="Laki-Laki" checked="">Laki - Laki
                </label>
              </div>
              <div class="form-check">
                <label class="form-check-label">
                  <input class="form-check-input" id="optionsRadios2" type="radio" name="jenis_kelamin" value="Perempuan">Perempuan
                </label>
              </div>
            </fieldset>
            <div class="form-group">
              <label for="tempat_lahir">Tempat Lahir</label>
              <input class="form-control" name="tempat_lahir" id="tempat_lahir" type="text">
            </div>
            <div class="form-group">
              <label for="tanggal_lahir">Tanggal Lahir</label>
              <input class="form-control" name="tanggal_lahir" id="tanggal_lahir" type="date">
            </div>
            <div class="form-group">
              <label for="agama">Agama</label>
              <select class="form-control" name="agama" id="agama">
                <option selected value="Protestan">Protestan</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Khonghucu">Khonghucu</option>
              </select>
            </div>
            <div class="form-group">
              <label for="status_nikah">Status Nikah</label>
              <select class="form-control" name="status_nikah" id="status_nikah">
                <option selected value="Belum Kawin">Belum Kawin</option>
                <option value="Kawin">Kawin</option>
                <option value="Cerai Hidup">Cerai Hidup</option>
                <option value="Cerai Mati">Cerai Mati</option>
              </select>
            </div>
            <div class="form-group">
              <label for="alamat">Alamat</label>
              <input class="form-control" name="alamat" id="alamat" type="text">
            </div>
            <div class="form-group">
              <label for="tanggal">Tanggal</label>
              <input class="form-control" name="tanggal" id="tanggal" type="date">
            </div>
            <div class="form-group">
              <label for="tempat">Tempat</label>
              <input class="form-control" name="tempat" id="tempat" type="text">
            </div>
            <div class="form-group">
              <label for="sebab">Sebab</label>
              <input class="form-control" name="sebab" id="sebab" type="text">
            </div>
            <button class="btn btn-primary" name="submit" type="submit">Tambah</button>
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