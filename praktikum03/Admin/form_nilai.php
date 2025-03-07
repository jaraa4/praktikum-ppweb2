<!DOCTYPE html>
<html>
    <head>
        <title>Form Nilai</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        .bg-pink {
            background-color:pink
        }
    </style>
    </head>
    <body>
        <h3>Form Nilai</h3>
        <hr>
        <?php
            $ar_matkul =[
                "DDP" => "Dasar Dasar Pemrograman",
                "WEB1" => "Pemrograman Web 1",
                "BD" => "Basis Data",
                "WEB2" => "Pemrograman Web 2",
                "AI" => "Algoritma dan Pemrograman",
                "Kalkulus" => "Kalkulus",
                "MK" => "Matematika",
                "Fisika" => "Fisika",
            ]
        ?>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama Lengkap</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
                </div> 
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
            <div class="col-8">
            <select id="matkul" name="matkul" class="custom-select">
                <option value="">-- Pilih Mata Kuliah --</option>

            <?php
                foreach ($ar_matkul as $kode => $nama) {
                    echo "<option value='$kode'>$nama</option>";
                }
            ?>

            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
            <div class="col-8">
            <input id="nilai_uts" name="nilai_uts" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label> 
            <div class="col-8">
            <input id="nilai_uas" name="nilai_uas" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label> 
            <div class="col-8">
            <input id="nilai_tugas" name="nilai_tugas" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
        <hr>
        
        Hasil Input Data Nilai Mahasiswa :
        
        <?php
            
            $_nama = $_POST['nama'];
            $_matkul = $_POST['matkul'];
            $_nilai_uts = $_POST["nilai_uts"];
            $_nilai_uas = $_POST["nilai_uas"];
            $_nilai_tugas = $_POST["nilai_tugas"];
            $_rata_rata = ($_nilai_uts * 0.3) + ($_nilai_uas * 0.3) + ($_nilai_tugas * 0.4);
            $_keterangan = keterangan ($_rata_rata);
            $_grade = grade ($_rata_rata);

            echo "Nama : $_nama <br>";
            echo "Matkul : $ar_matkul[$_matkul] <br>";
            echo "UTS : $_nilai_uts <br>";
            echo "UAS : $_nilai_uas <br>";
            echo "Tugas : $_nilai_tugas <br>";
            echo "Rata-Rata : $_rata_rata <br>";
            echo "Keterangan : $_keterangan <br>";
            echo "Grade : $_grade <br>";

            function keterangan ($_rata_rata){
                if ($_rata_rata >= 80) {
                    return "Lulus";
                }
                else {
                    return "Tidak Lulus";
                }
            }

            function grade($_rata_rata)
            {
                if ($_rata_rata >= 85 && $_rata_rata <= 100) {
                    return "A (Sangat Baik)";
                } elseif ($_rata_rata >= 60 && $_rata_rata <= 84) {
                    return "B (Baik)";
                } elseif ($_rata_rata >= 40 && $_rata_rata <= 59) {
                    return "C (Cukup)";
                } elseif ($_rata_rata >= 20 && $_rata_rata <= 39) {
                    return "D (Kurang)";
                } elseif ($_rata_rata >= 10 && $_rata_rata <= 19) {
                    return "E (Sangat Kurang)";
                } else {
                    return "Tidak Lulus";
                }
            }
        
        ?>

    </body>
</html>