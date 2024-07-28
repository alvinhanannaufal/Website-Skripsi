<?php

//render halaman menjadi json
header('Content-Type: application/json');

require '../function.php';

$getData = mysqli_query($conn, "SELECT * FROM tb_materi");

$result = array();
while ($row = mysqli_fetch_array($getData)) {
    array_push( $result, array (
        'id' => $row['id_materi'],
        'judul' => $row['judul_materi'],
        'isi' => $row['isi_materi']
    ));
}

echo json_encode(
    array('data_materi' => $result)
);