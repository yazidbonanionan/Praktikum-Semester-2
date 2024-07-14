<?php
session_start();

include_once 'header.php';
include_once 'sidebar.php';

$title = 'Form Nilai';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?= $title ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                            <li class="breadcrumb-item active"><?= $title ?></li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><?= $title ?></h3>
                                <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                        <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                            <div class="card-body">
                                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
                                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

                                <form action="nilai_siswa.php" method="post">
                                    <div class="form-group row">
                                        <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
                                        <div class="col-8">
                                            <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label>
                                        <div class="col-8">
                                            <select id="matkul" name="matkul" class="custom-select">
                                                <option value="DDP">Dasar-Dasar Pemrograman</option>
                                                <option value="BDI">Basis Data I</option>
                                                <option value="WEB1">Pemrograman Web</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
                                        <div class="col-8">
                                            <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
                                        <div class="col-8">
                                            <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
                                        <div class="col-8">
                                            <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-4 col-8">
                                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include_once 'footer.php'; ?>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>
