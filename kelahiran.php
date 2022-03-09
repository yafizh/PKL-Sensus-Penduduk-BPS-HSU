<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ?>
<?php include_once("koneksi.php"); ?>
<main class="app-content">
  <div class="row">
    <div class="col-md-12">
      <div class="tile">
        <div class="tile-body">
          <div class="page-header">
            <div class="row">
              <div class="col">
                <h2 class="mb-3" id="buttons">Data Kelahiran</h2>
              </div>
              <div class="col-auto justify-content-end">
                <a href="tambah_kelahiran.php" class="btn btn-primary">Tambah</a>
              </div>
            </div>
          </div>
          <hr>
          <div class="table-responsive">
            <table class="table table-hover table-bordered" id="sampleTable">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>Jenis Kelamin</th>
                  <th>Nama Ibu</th>
                  <th>NIK Ibu</th>
                  <th>Nama Ayah</th>
                  <th>NIK Ayah</th>
                  <th>Tanggal</th>
                  <th>Tempat</th>
                  <th>Alamat</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                $data = $mysqli->query("SELECT * FROM kelahiran");
                ?>
                <?php while ($datum = $data->fetch_assoc()) : ?>
                  <tr>
                    <td><?= $datum['nama']; ?></td>
                    <td><?= $datum['jenis_kelamin']; ?></td>
                    <td><?= $datum['nama_ibu']; ?></td>
                    <td><?= $datum['nik_ibu']; ?></td>
                    <td><?= $datum['nama_ayah']; ?></td>
                    <td><?= $datum['nik_ayah']; ?></td>
                    <td><?= $datum['tanggal']; ?></td>
                    <td><?= $datum['tempat']; ?></td>
                    <td><?= $datum['alamat']; ?></td>
                  </tr>
                <?php endwhile; ?>
              </tbody>
            </table>
          </div>
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