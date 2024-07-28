<?php
session_start();

//membuat koneksi ke database
$conn = mysqli_connect("localhost","root","","db_augmentedreality_app");

//menambah data soal
if(isset($_POST['addsoal'])){
    $soal = $_POST['soal'];
    $jawaban = $_POST['jawaban'];
    $pilihan_a = $_POST['pilihan_a'];
    $pilihan_b = $_POST['pilihan_b'];
    $pilihan_c = $_POST['pilihan_c'];
    $pilihan_d = $_POST['pilihan_d'];
    $index_opsi_jawaban = $_POST['index_opsi_jawaban'];

    $addtotablesoal = mysqli_query($conn,"insert into tb_soal (soal, jawaban, pilihan_a, pilihan_b, pilihan_c, pilihan_d, index_opsi_jawaban) values ('$soal','$jawaban','$pilihan_a','$pilihan_b','$pilihan_c','$pilihan_d','$index_opsi_jawaban')");
    if($addtotablesoal){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//uodate data soal
if(isset($_POST['updatesoal'])){
    $ids = $_POST['id_soal'];
    $soal = $_POST['soal'];
    $jawaban = $_POST['jawaban'];
    $pilihan_a = $_POST['pilihan_a'];
    $pilihan_b = $_POST['pilihan_b'];
    $pilihan_c = $_POST['pilihan_c'];
    $pilihan_d = $_POST['pilihan_d'];
    $index_opsi_jawaban = $_POST['index_opsi_jawaban'];

    $update = mysqli_query($conn,"update tb_soal set soal='$soal', jawaban='$jawaban', pilihan_a='$pilihan_a', pilihan_b='$pilihan_b', pilihan_c='$pilihan_c', pilihan_d='$pilihan_d', index_opsi_jawaban='$index_opsi_jawaban' where id_soal='$ids'");
    if($update){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//delete data soal
if(isset($_POST['deletesoal'])){
    $ids = $_POST['id_soal'];

    $delete = mysqli_query($conn,"delete from tb_soal where id_soal='$ids'");
    if($delete){
        header('location:index.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}

//menambah data materi
if(isset($_POST['addmateri'])){
    $judul_materi = $_POST['judul_materi'];
    $isi_materi = $_POST['isi_materi'];

    $addtotablemateri = mysqli_query($conn,"insert into tb_materi (judul_materi, isi_materi) values ('$judul_materi','$isi_materi')");
    if($addtotablemateri){
        header('location:materi.php');
    } else {
        echo 'Gagal';
        header('location:materi.php');
    }
}

//uodate data materi
if(isset($_POST['updatemateri'])){
    $idm = $_POST['id_materi'];
    $judul_materi = $_POST['judul_materi'];
    $isi_materi = $_POST['isi_materi'];

    $updatemateri = mysqli_query($conn,"update tb_materi set judul_materi='$judul_materi', isi_materi='$isi_materi' where id_materi='$idm'");
    if($updatemateri){
        header('location:materi.php');
    } else {
        echo 'Gagal';
        header('location:materi.php');
    }
}

//delete data materi
if(isset($_POST['deletemateri'])){
    $idm = $_POST['id_materi'];

    $deletemateri = mysqli_query($conn,"delete from tb_materi where id_materi='$idm'");
    if($deletemateri){
        header('location:materi.php');
    } else {
        echo 'Gagal';
        header('location:materi.php');
    }
}

?>