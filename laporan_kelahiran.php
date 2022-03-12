<?php
require_once "koneksi.php";
$dari = $_POST['dari'];
$sampai = $_POST['sampai'];
const BULAN_DALAM_INDONESIA = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "July",
    "Agustus",
    "September",
    "Oktober",
    "November",
    "Desember"
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan Kelahiran</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        #kop {
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <div id="kop" class="d-flex justify-content-center gap-5">
            <img src="https://upload.wikimedia.org/wikipedia/commons/2/28/Lambang_Badan_Pusat_Statistik_%28BPS%29_Indonesia.svg" height="100" alt="">
            <div class="text-center" style="flex: 1;">
                <h2>
                    BADAN PUSAT STATISTIK
                    <br>
                    HULU SUNGAI UTARA
                </h2>
                <p>
                    Jl. H. Saberan Effendi RT 3 Amuntai
                </p>
            </div>
        </div>
        <div class="my-3" style="border-top: 2px solid black; margin-top:12px;"></div>
        <h2 class="text-center">Laporan Kelahiran tanggal <?= $dari; ?> - <?= $sampai; ?></h2>
        <table>
            <thead>
                <tr>
                    <th class="text-center">No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Nama Ibu</th>
                    <th>Nik Ibu</th>
                    <th>Nama Ayah</th>
                    <th>Nik Ayah</th>
                    <th>Tanggal</th>
                    <th>Tempat</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                $result = $mysqli->query("SELECT * FROM kelahiran WHERE tanggal BETWEEN '$dari' AND '$sampai'");
                ?>
                <?php if ($result->num_rows) : ?>
                    <?php while ($row = $result->fetch_assoc()) : ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td class="text-center"><?= $row['nama']; ?></td>
                            <td class="text-center"><?= $row['jenis_kelamin']; ?></td>
                            <td class="text-center"><?= $row['nama_ibu']; ?></td>
                            <td class="text-center"><?= $row['nik_ibu']; ?></td>
                            <td class="text-center"><?= $row['nama_ayah']; ?></td>
                            <td class="text-center"><?= $row['nik_ayah']; ?></td>
                            <td class="text-center"><?= $row['tanggal']; ?></td>
                            <td class="text-center"><?= $row['tempat']; ?></td>
                            <td class="text-center"><?= $row['alamat']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php endif; ?>
                <?php $result->free_result(); ?>
            </tbody>
        </table>
        <div style="display: flex; justify-content: end;">
            <div style="text-align: center; margin-top: 20px; padding: 10px; width: 200px;">
                <span>Amuntai, <?= Date('d') ?> <?= BULAN_DALAM_INDONESIA[Date('m') - 1] ?> <?= Date('Y') ?></span>
                <br>
                <span>Mengetahui</span>
                <br><br><br><br><br>
                <span>Sukma Handayani, M.Si</span>
                <span>(197503111996122000)</span>
            </div>
        </div>
    </div>
    <script>
        window.print();
    </script>
</body>

</html>