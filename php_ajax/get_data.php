<?php
    include 'connection.php';

    $nama_siswa = '%'.htmlspecialchars($_POST['nama']).'%';
    $i = 1;
    $query = "SELECT * FROM `tbl_siswa` WHERE `nama` LIKE ? ORDER BY `nama_siswa` ASC LIMIT 10";
    $starbhak = $db1->prepare($query);
    $starbhak->bind_param("s", $nama_siswa);
    $starbhak->execute();
    $res1 = $starbhak->get_result();
    while ($row = $res1->fetch_assoc()) {
        $data[$i]['id'] = $row['id'];
        $data[$i]['nama_siswa'] = $row['nama'];
        $data[$i]['alamat'] = $row['alamat'];
        $data[$i]['avatar'] = $row['avatar'];

        $i++;
    }

    $out = array_values($data);
    echo json_encode($out);