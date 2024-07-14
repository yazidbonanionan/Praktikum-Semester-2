<?php 
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    header("Location: login.php");
    exit();
}

$home = 'login.php';

if (isset($_SESSION['role'])) {
    if ($_SESSION['role'] === 'Admin') {
        $home = 'index.php';
    } elseif ($_SESSION['role'] === 'Teknik Informatika') {
        $home = 'ti.php';
    } elseif ($_SESSION['role'] === 'Sistem Informasi') {
        $home = 'si.php';
    } elseif ($_SESSION['role'] === 'Bisnis Digital') {
        $home = 'bd.php';
    }
}
?>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="<?= $home ?>" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">SIMPEG-NF</span>
    </a>
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block"><?= isset($_SESSION['name']) ? $_SESSION['name'] : ''; ?></a>
            </div>
        </div>
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                        <i class="right fas fa-angle-left"></i>   
                        Dashboard
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <?php if (isset($_SESSION['role']) && ($_SESSION['role'] === 'Admin' || $_SESSION['role'] === 'Teknik Informatika' || $_SESSION['role'] === 'Sistem Informasi' || $_SESSION['role'] === 'Bisnis Digital')) { ?>
                            <li class="nav-item">
                                <a href="index.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Admin</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="ti.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Teknik Informatika</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="si.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sistem Informasi</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="bd.php" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Bisnis Digital</p>
                                </a>
                            </li>
                        <?php } ?>
                        <li class="nav-item">
                            <a href="form_nilai.php" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Form Nilai</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-header">AUTENTIKASI</li>
                <li class="nav-item">
                    <a href="?logout" class="nav-link">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>Logout</p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside>
