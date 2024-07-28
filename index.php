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
        <title>Data Soal</title>
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
                        <h1 class="mt-4">Data Soal</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Sistem Pernapasan pada Hewan</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                                    Tambah Data
                                </button>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Soal</th>
                                            <th>Jawaban</th>
                                            <th>Opsi A</th>
                                            <th>Opsi B</th>
                                            <th>Opsi C</th>
                                            <th>Opsi D</th>
                                            <th>Index</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        $ambilsemuadatasoal = mysqli_query($conn,"select * from tb_soal");
                                        $i = 1;
                                        while($data=mysqli_fetch_array($ambilsemuadatasoal)){
                                            $soal = $data['soal'];
                                            $jawaban = $data['jawaban'];
                                            $pilihan_a = $data['pilihan_a'];
                                            $pilihan_b = $data['pilihan_b'];
                                            $pilihan_c = $data['pilihan_c'];
                                            $pilihan_d = $data['pilihan_d'];
                                            $index_opsi_jawaban = $data['index_opsi_jawaban'];
                                            $ids = $data['id_soal'];
                                        ?>

                                        <tr>
                                            <td><?=$i++;?></td>
                                            <td><?=$soal;?></td>
                                            <td><?=$jawaban;?></td>
                                            <td><?=$pilihan_a;?></td>
                                            <td><?=$pilihan_b;?></td>
                                            <td><?=$pilihan_c;?></td>
                                            <td><?=$pilihan_d;?></td>
                                            <td><?=$index_opsi_jawaban;?></td>
                                            <td>
                                                <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#edit<?=$ids;?>">
                                                    Edit
                                                </button>
                                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#delete<?=$ids;?>">
                                                    Hapus
                                                </button></td>
                                        </tr>

                                                <!-- Edit Modal -->
                                                <div class="modal fade" id="edit<?=$ids;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Edit Data Soal</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form method="post">
                                                    <div class="modal-body">
                                                        <label>Soal :</label>
                                                        <textarea class="form-control" rows="5" name="soal" required><?=$soal;?></textarea>
                                                        <br>
                                                        <label>Jawaban :</label>
                                                            <select class="form-select" name="jawaban" required>
                                                                <option value="A" <?= ($jawaban == 'A') ? 'selected' : ''; ?>>A</option>
                                                                <option value="B" <?= ($jawaban == 'B') ? 'selected' : ''; ?>>B</option>
                                                                <option value="C" <?= ($jawaban == 'C') ? 'selected' : ''; ?>>C</option>
                                                                <option value="D" <?= ($jawaban == 'D') ? 'selected' : ''; ?>>D</option>
                                                            </select>
                                                        <br>
                                                        <label>Opsi A :</label>
                                                        <textarea class="form-control" rows="5" name="pilihan_a" required><?=$pilihan_a;?></textarea>
                                                        <br>
                                                        <label>Opsi B :</label>
                                                        <textarea class="form-control" rows="5" name="pilihan_b" required><?=$pilihan_b;?></textarea>
                                                        <br>
                                                        <label>Opsi C :</label>
                                                        <textarea class="form-control" rows="5" name="pilihan_c" required><?=$pilihan_c;?></textarea>
                                                        <br>
                                                        <label>Opsi D :</label>
                                                        <textarea class="form-control" rows="5" name="pilihan_d" required><?=$pilihan_d;?></textarea>
                                                        <br>
                                                        <label>Index Opsi Jawaban :</label>
                                                        <input type="number" name="index_opsi_jawaban" value="<?=$index_opsi_jawaban;?>" class="form-control" required>
                                                        <br>
                                                        <input type="hidden" name="id_soal" value="<?=$ids;?>">
                                                        <button type="submit" class="btn btn-warning" name="updatesoal">Edit</button>
                                                    </div>
                                                    </form>
                                                    </div>
                                                </div>
                                                </div>

                                                <!-- Delete Modal -->
                                                <div class="modal fade" id="delete<?=$ids;?>">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Hapus Data Soal</h4>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <form method="post">
                                                    <div class="modal-body">
                                                        Apakah Anda yakin ingin menghapus?
                                                        <br>
                                                        <br>
                                                        <input type="hidden" name="id_soal" value="<?=$ids;?>">
                                                        <button type="submit" class="btn btn-danger" name="deletesoal">Hapus</button>
                                                    </div>
                                                    </form>

                                                    </div>
                                                </div>
                                                </div>

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
                <h4 class="modal-title">Tambah Data Soal</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <form method="post">
            <div class="modal-body">
                <label>Soal :</label>
                <textarea class="form-control" rows="5" name="soal" placeholder="Masukkan Soal" required></textarea>
                <br>
                <label>Jawaban :</label>
                    <select class="form-select" name="jawaban" required>
                        <option disabled selected> Pilih Jawaban </option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                    </select>
                <br>
                <label>Opsi A :</label>
                <textarea class="form-control" rows="5" name="pilihan_a" placeholder="Pilihan A" required></textarea>
                <br>
                <label>Opsi B :</label>
                <textarea class="form-control" rows="5" name="pilihan_b" placeholder="Pilihan B" required></textarea>
                <br>
                <label>Opsi C :</label>
                <textarea class="form-control" rows="5" name="pilihan_c" placeholder="Pilihan C" required></textarea>
                <br>
                <label>Opsi D :</label>
                <textarea class="form-control" rows="5" name="pilihan_d" placeholder="Pilihan D" required></textarea>
                <br>
                <label>Index Opsi Jawaban :</label>
                <input type="number" name="index_opsi_jawaban" placeholder="Masukkan Opsi" class="form-control" required>
                <br>
                <button type="submit" class="btn btn-primary" name="addsoal">Submit</button>
            </div>
            </form>

            </div>
        </div>
        </div>
</html>
