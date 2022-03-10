<?php include_once("header.php"); ?>
<?php include_once("koneksi.php"); ?>
<?php
if (isset($_POST['submit'])) {
  $password_lama = $_POST['password_lama'];
  $password_baru = $_POST['password_baru'];
  $konfirmasi_password_baru = $_POST['konfirmasi_password_baru'];
  $sql = "SELECT * FROM user WHERE id=" . $_SESSION['id'] . " AND password='$password_lama'";
  if ($result = $mysqli->query($sql)) {
    if (mysqli_num_rows($result) > 0) {
      if ($password_baru === $konfirmasi_password_baru) {
        $sql = "UPDATE user SET password='$password_baru' WHERE id=" . $_SESSION['id'];
        if ($mysqli->query($sql) === TRUE) {
          echo "<script>alert('Password Berhasil Diperbaharui, Silakan login ulang!')</script>";
          echo "<script>window.location.href ='login.php'</script>";
        } else echo "Error: " . $sql . "<br>" . $mysqli->error;
      } else echo "<script>alert('Password Baru Tidak Cocok!')</script>";
    } else echo "<script>alert('Password Lama Salah!')</script>";
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
                <h2 class="mb-3" id="buttons">Ganti Password</h2>
              </div>
            </div>
          </div>
          <hr>
          <form action="" method="POST">
            <div class="form-group">
              <label for="password_lama">Password Lama</label>
              <input class="form-control" name="password_lama" id="password_lama" type="password">
            </div>
            <div class="form-group">
              <label for="password_baru">Password Baru</label>
              <input class="form-control" name="password_baru" id="password_baru" type="password">
            </div>
            <div class="form-group">
              <label for="konfirmasi_password_baru">Konfirmasi Password Baru</label>
              <input class="form-control" name="konfirmasi_password_baru" id="konfirmasi_password_baru" type="password">
            </div>
            <button class="btn btn-primary" name="submit" type="submit">Ganti Password</button>
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