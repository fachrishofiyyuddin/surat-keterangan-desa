<?php include '../konek.php'; ?>
<?php
if (isset($_GET['id_request_skd'])) {
    $id = $_GET['id_request_skd'];
    $sql = "SELECT * FROM data_request_skd natural join data_user WHERE id_request_skd='$id'";
    $query = mysqli_query($konek, $sql);
    $data = mysqli_fetch_array($query, MYSQLI_BOTH);
    $nik = $data['nik'];
    $nama = $data['nama'];
    $tempat = $data['tempat_lahir'];
    $tgl = $data['tanggal_lahir'];
    $tgl2 = $data['tanggal_request'];
    $format1 = date('Y', strtotime($tgl2));
    $format2 = date('d-m-Y', strtotime($tgl));
    $format3 = date('d F Y', strtotime($tgl2));
    $agama = $data['agama'];
    $jekel = $data['jekel'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $status_warga = $data['status_warga'];
    $request = $data['request'];
    $keperluan = $data['keperluan'];
    $acc = $data['acc'];
    $format4 = date('d F Y', strtotime($acc));

    $no_surat = $data['no_surat'];
    $format5 = date('m', strtotime($tgl2));
    if ($format5 == "1") {
        $romawi = "I";
    } elseif ($format5 == "2") {
        $romawi = "II";
    } elseif ($format5 == "2") {
        $romawi = "II";
    } elseif ($format5 == "3") {
        $romawi = "III";
    } elseif ($format5 == "4") {
        $romawi = "IV";
    } elseif ($format5 == "5") {
        $romawi = "V";
    } elseif ($format5 == "6") {
        $romawi = "VI";
    } elseif ($format5 == "7") {
        $romawi = "VII";
    } elseif ($format5 == "8") {
        $romawi = "VIII";
    } elseif ($format5 == "9") {
        $romawi = "IX";
    } elseif ($format5 == "10") {
        $romawi = "X";
    } elseif ($format5 == "11") {
        $romawi = "XII";
    } elseif ($format5 == "12") {
        $romawi = "XIII";
    }

    // cek kepalada desa /lurah
    $wuery = mysqli_query($konek, "select * from data_user where hak_akses='Lurah'");
    $data_ = mysqli_fetch_array($wuery);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CETAK SKD</title>
</head>

<body>

    <table border="0" align="center">
        <tr>
            <td><img src="../main/img/logoku2.png" width="70" height="87" alt=""></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td>
                <center>
                    <font size="4">PEMERINTAHAN KABUPATEN DELI SERDANG</font><br>
                    <font size="4">KECAMATAN PECUT SEI TUAN</font><br>
                    <font size="5"><b>DESA CINTA RAKYAT</b></font><br>
                    <font size="2"><i>MQH3+J4M, Gg. Laksana, Cinta Rakyat, Kec. Percut Sei Tuan, Kabupaten Deli Serdang, Sumatera Utara 20371</i></font><br>
                </center>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td colspan="45">
                <hr color="black">
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                <center>
                    <font size="4"><b>SURAT KETERANGAN / PENGANTAR</b></font><br>
                    <hr style="margin:0px" color="black">
                    <span>Nomor : <?= $no_surat; ?> / <?= $romawi; ?> / <?= $format1; ?></span>
                </center>
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yang bertanda tangan di bawah ini Kepala Desa Cinta <br> Rakyat, Menerangkan bahwa :
            </td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>:</td>
            <td><?php echo $tempat . ", " . $format2; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $jekel; ?></td>
        </tr>
        <tr>
            <td>Agama</td>
            <td>:</td>
            <td><?php echo $agama; ?></td>
        </tr>
        <tr>
            <td>Status Warga</td>
            <td>:</td>
            <td><?php echo $status_warga; ?></td>
        </tr>
        <tr>
            <td>No. NIK</td>
            <td>:</td>
            <td><?php echo $nik; ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?php echo $alamat; ?></td>
        </tr>
        <tr>
            <td>Keperluan</td>
            <td>:</td>
            <td><?php echo $keperluan; ?></td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:</td>
            <?php
            if ($request == "DOMISILI") {
                $request = "Surat Keterangan Domisili";
            }
            ?>
            <td><?php echo $request; ?></td>
        </tr>
    </table>
    <br>
    <table border="0" align="center">
        <tr>
            <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Demikian surat ini diberikan kepada yang bersangkutan agar dapat dipergunakan<br>&nbsp;&nbsp;&nbsp;&nbsp;untuk sebagaimana mestinya.
            </td>
        </tr>
    </table>
    <br>
    <br>
    <table border="0" align="center">
        <tr>
            <th></th>
            <th width="100px"></th>
            <th>Deli Serdang, <?php echo $format4; ?></th>
        </tr>
        <tr>
            <td>Tanda tangan <br> Yang bersangkutan </td>
            <td></td>
            <td>Kepala Desa Cinta Rakyat</td>
        </tr>
        <tr>
            <td rowspan="15"></td>
            <td></td>
            <td rowspan="15"></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td></td>
        </tr>
        <tr>
            <td><b style="text-transform:uppercase"><u>(<?php echo $nama; ?>)</u></b></td>
            <td></td>
            <td><b><u>(<?= $data_['nama']; ?>)</u></b></td>
        </tr>
    </table>




</body>

</html>
<script>
    window.print();
</script>