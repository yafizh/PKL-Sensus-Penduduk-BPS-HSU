<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="images/user.png" width="50" alt="User Image">
        <div>
            <p class="app-sidebar__user-name"><?= $_SESSION['nama']; ?></p>
            <p class="app-sidebar__user-designation"><?= $_SESSION['status']; ?></p>
        </div>
    </div>
    <ul class="app-menu">
        <li><a class="app-menu__item" href="index.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
        <li><a class="app-menu__item" href="penduduk.php"><i class="app-menu__icon fa fa-users"></i><span class="app-menu__label">Penduduk</span></a></li>
        <li><a class="app-menu__item" href="kelahiran.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Kelahiran</span></a></li>
        <li><a class="app-menu__item" href="kematian.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Kematian</span></a></li>
        <?php if ($_SESSION['status'] == 'ADMIN') : ?>
            <li><a class="app-menu__item" href="laporan.php"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Laporan</span></a></li>
        <?php endif; ?>
    </ul>
</aside>