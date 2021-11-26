<html>

<head>
    <title>Tampil Data Matakuliah</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/form.css') ?>">
</head>

<body>
    <center>
        <div class="formoutput">
            <tr>
                <th colspan="3">
                    <h1>Tampil Data Matakuliah</h1>
                </th>
            </tr>
            <tr>
                <td colspan="3">
                    <hr>
                </td>
            </tr>
            <tr>
                <th>Kode MTK</th>
                <th>:</th>
                <td>
                    <?= $kode; ?>
                </td>
            </tr>
            <br>
            <tr>
                <td>Nama MTK</td>
                <td>:</td>
                <td>
                    <?= $nama; ?>
                </td>
            </tr>
            <br>
            <tr>
                <td>SKS</td>
                <td>:</td>
                <td>
                    <?= $sks; ?>
                </td>
            </tr>
            <br>
            <br>
            <tr>
                <td colspan="3" align="center">
                    <button><a href="<?= base_url("Matakuliah"); ?>">Kembali</a></button>
                </td>
            </tr>
        </div>
    </center>
</body>

</html>