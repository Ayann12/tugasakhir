<!DOCTYPE html>

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <style>
        #judul {
            text-align: center;
        }

        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            padding-top: 30px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }
    </style>

</head>

<body>
    <font face="Arial" color="black">
        <p align="center"> PEMERINTAH KABUPATEN SERANG </p>
    </font>
    <font face="Arial" color="black">
        <p align="center"> KECAMATAN PULOAMPEL </p>
    </font>
    <font face="Arial" color="black">
        <p align="center"> DESA SUMURANJA</p>
    </font>
    <font face="Arial" color="black" size="3">
        <p align="center"> Jl Ki Moehammad Idris No 02. Kode Pos, : 42455. Desa/Kelurahan, : Sumuranja. Kec. Pulo Ampel. Kab. Serang</p>
    </font>
    <hr>
    <div id=halaman>
        <table>
            <h3 id=judul><u>SURAT KETERANGAN TIDAK MAMPU</u></h3>
            <h4 class="mt-0" id=judul>No Surat :<?= $mampu['no_surat']; ?></h4>
        </table>
        <p>Yang bertanda tangan dibawah ini Kepala Desa Sumuranja Kecamatan Puloampel menerangkan bahwa :</p>

        <table>
            <tr>
                <td style="width: 30%;">Nama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?= $mampu['nama']; ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat, tanggal lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?= $mampu['tempat_lahir']; ?>,<?= $mampu['tgllahir']; ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Jenis Kelamin</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?= $mampu['jenis_kelamin']; ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Agama</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?= $mampu['agama']; ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Pekerjaan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?= $mampu['pekerjaan']; ?></td>
            </tr>
            <tr>
                <td style="width: 30%;">Status</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;"><?= $mampu['status']; ?></td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Alamat</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;"><?= $mampu['alamat']; ?></td>
            </tr>
        </table>

        <table>
            <p>Orang dengan identitas yang telah disebutkan di atas benar-benar penduduk asli Desa Sumuranja, Kec. Puloampel, Kab. Serang. Berdasarkan keadaan serta fakta yang ada, benar bahwa orang yang bersangkutan termasuk dalam golongan keluarga kurang mampu.</p>
            <p>Demikian surat ini dibuat dengan sebenar-benarnya, untuk dipergunakan sebagai mestinya.</p>

            <div style="width: 50%; text-align: left; float: right;">Sumuranja,<?= $mampu['tglsurat']; ?></div><br>
            <div style="width: 50%; text-align: left; float: right;">Yang bertanda tangan,</div><br><br><br><br><br>
            <div style="width: 50%; text-align: left; float: right;">Idris Nawawi</div>
        </table>
    </div>
</body>

</html>

<script type="text/javascript">
    window.print();
</script>