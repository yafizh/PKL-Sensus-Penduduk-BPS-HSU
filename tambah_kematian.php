<?php include_once("header.php"); ?>
<?php include_once("koneksi.php"); ?>
<?php
if (isset($_POST['submit'])) {
  $nik = $_POST['nik'];
  $tanggal = $_POST['tanggal'];
  $tempat = $_POST['tempat'];
  $sebab = $_POST['sebab'];
  $alamat = $_POST['alamat'];

  $sql = "
        INSERT INTO kematian (
            nik, 
            tanggal, 
            tempat, 
            sebab 
        ) VALUES (
            '$nik',
            '$tanggal', 
            '$tempat',
            '$sebab' 
        )";

  if ($mysqli->query($sql) === TRUE) echo "<script>alert('Data Kematian berhasil ditambahkan.')</script>";
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