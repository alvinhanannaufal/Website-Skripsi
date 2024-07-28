<?php
require 'function.php';
require 'cek.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Data Hasil Kuis</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark" style="background-color: #4e73df;">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.php"><b>Augmented Reality</b></a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #4e73df;">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link" href="index.php" style="color: #ffffff;">
                                <div class="sb-nav-link-icon"><i class="fas fa-pencil-alt" style="color: #ffffff;"></i></div>
                                Data Soal
                            </a>
                            <a class="nav-link" href="materi.php" style="color: #ffffff;">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-reader" style="color: #ffffff;"></i></div>
                                Data Materi
                            </a>
                            <a class="nav-link" href="hasilkuis.php" style="color: #ffffff;">
                                <div class="sb-nav-link-icon"><i class="fas fa-file-alt" style="color: #ffffff;"></i></div>
                                Data Hasil Kuis
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Hasil Kuis</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Sistem Pernapasan pada Hewan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <a href="export.php" class="btn btn-success">Export Data</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tanggal</th>
                                            <th>Nama Siswa</th>
                                            <th>Skor</th>
                                            <th>Kelas</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $ambilsemuadatakuis = mysqli_query($conn,"select * from tb_hasil_kuis");
                                        $i = 1;
                                        while($data=mysqli_fetch_array($ambilsemuadatakuis)){
                                            $nama_siswa = $data['nama_siswa'];
                                            $skor = $data['skor'];
                                            $waktu_submit = $data['waktu_submit'];
                                            $idh = $data['id_hasil'];

                                            $timestamp = strtotime($waktu_submit);

                                            $tanggalKonversi = date('d-m-Y H:i:s', $timestamp);
                                        ?>

                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$waktu_submit;?></td>
                                            <td><?=$nama_siswa;?></td>
                                            <td><?=$skor;?></td>
                                            <td>(V)</td>
                                        </tr>
                                        
                                        <?php
                                        };
                                        ?>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
        <!-- The Modal -->
        <div class="modal fade" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Tambah Materi</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="post">
            <div class="modal-body">
                <label>Judul Materi :</label>
                <input type="text" name="judul_materi" placeholder="Masukkan Judul Materi" class="form-control" required>
                <br>
                <label>Isi Materi :</label>
                <textarea class="form-control" rows="5" name="isi_materi" placeholder="Masukkan Isi Materi" required></textarea>
                <br>
                <button type="submit" class="btn btn-primary" name="addmateri">Submit</button>
            </div>
            </form>

            </div>
        </div>
        </div>
</html>
