<?php
    $ns1 = ["id" => 1, "nim" => "1234", "uts" => 90, "uas" => 93, "tugas" => 97];
    $ns2 = ["id" => 2, "nim" => "1235", "uts" => 80, "uas" => 98, "tugas" => 80];
    $ns3 = ["id" => 3, "nim" => "1236", "uts" => 95, "uas" => 88, "tugas" => 92];
    $ns4 = ["id" => 4, "nim" => "1237", "uts" => 85, "uas" => 80, "tugas" => 97];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4 ];

    echo $ar_nilai[0]["nim"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NILAI MAHASISWA</title>
</head>
<body>
    <h3>Daftar Nilai Mahasiswa</h3>
    <table border="1" width="100%">
    <thead>
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>uts</th>
            <th>uas</th>
            <th>tugas</th>
            <th>Nilai </th>
        </tr>
    </thead>
    <tbody>
        <?php
            $nomor = 1;
            foreach ($ar_nilai as $ns){
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'.$ns['nim'].'</td>';
                echo '<td>'.$ns['uts'].'</td>';
                echo '<td>'.$ns['uas'].'</td>';
                echo '<td>'.$ns['tugas'].'</td>';
                $nilai_akhir = ($ns['uts'] + $ns['uas'] + $ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir, 2, ', ', '.').'</td>';
                echo '<tr/>';
                $nomor++;
                }
        ?>
    </tbody>
    </table>
    
</body>
</html>