<?php include_once("header.php"); ?>
<?php include_once("sidebar.php"); ?>
<?php include_once("koneksi.php"); ?>
<main class="app-content">
    <div class="row">
        
        <div class="col-md-4">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h2 class="mb-3" id="buttons">Laporan Kelahiran</h2>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-3">
                        <form action="laporan_kelahiran.php" method="POST">
                            <label for="">Tanggal Lahir</label>
                            <div class="d-flex">
                                <input type="date" value="<?= Date('Y-m-d') ?>" name="dari" class="form-control mr-2">
                                <label for="">_</label>
                                <input type="date" value="<?= Date('Y-m-d') ?>" name="sampai" class="form-control ml-2">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Cetak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h2 class="mb-3" id="buttons">Laporan Kematian</h2>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-3">
                        <form action="laporan_kematian.php" method="POST">
                            <label for="">Tanggal Kematian</label>
                            <div class="d-flex">
                                <input type="date" value="<?= Date('Y-m-d') ?>" name="dari" class="form-control mr-2">
                                <label for="">_</label>
                                <input type="date" value="<?= Date('Y-m-d') ?>" name="sampai" class="form-control ml-2">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Cetak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h2 class="mb-3" id="buttons">Laporan Penduduk</h2>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-3">
                        <form action="laporan_penduduk.php" method="POST">
                            <label for="">Tanggal Lahir</label>
                            <div class="d-flex">
                                <input type="date" name="dari" value="<?= Date('Y-m-d') ?>" class="form-control mr-2">
                                <label for="">_</label>
                                <input type="date" name="sampai" value="<?= Date('Y-m-d') ?>" class="form-control ml-2">
                            </div>
                            <button class="btn btn-primary mt-3" type="submit">Cetak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h2 class="mb-3" id="buttons">Laporan Kepindahan</h2>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-3">
                        <form action="">
                            <label for="">Tanggal Pindah</label>
                            <div class="d-flex">
                                <input type="date" value="<?= Date('Y-m-d') ?>" class="form-control mr-2">
                                <label for="">_</label>
                                <input type="date" value="<?= Date('Y-m-d') ?>" class="form-control ml-2">
                            </div>
                            <button class="btn btn-primary mt-3">Cetak</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="tile">
                <div class="tile-body">
                    <div class="page-header">
                        <div class="row">
                            <div class="col">
                                <h2 class="mb-3" id="buttons">Laporan Kedatangan</h2>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row p-3">
                        <form action="">
                            <label for="">Tanggal Datang</label>
                            <div class="d-flex">
                                <input type="date" value="<?= Date('Y-m-d') ?>" class="form-control mr-2">
                                <label for="">_</label>
                                <input type="date" value="<?= Date('Y-m-d') ?>" class="form-control ml-2">
                            </div>
                            <button class="btn btn-primary mt-3">Cetak</button>
                        </form>
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