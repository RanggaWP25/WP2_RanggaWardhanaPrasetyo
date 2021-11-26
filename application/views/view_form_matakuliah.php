<html>

<head>
    <title>FORM INPUT MATAKULIAH</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/form.css') ?>">
</head>

<body>
    <center>
        <div class="forminput">
            <form action="<?= base_url("Matakuliah/cetak"); ?>" method="POST">
                <table>
                    <tr>
                        <th colspan="3">
                            <h3>Form Input Data Mata Kuliah</h3>
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
                            <input type="text" name="kode" id="kode">
                            <p><?= form_error("kode"); ?></p>
                        </td>
                    </tr>
                    <tr>
                        <th>Nama MTK</th>
                        <td>:</td>
                        <td>
                            <input type="text" name="nama" id="nama">
                            <p><?= form_error("nama"); ?></p>
                        </td>
                    </tr>
                    <tr>
                        <th>SKS</th>
                        <td>:</td>
                        <td>
                            <select name="sks" id="sks">
                                <option value="">Pilih SKS</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select><?= form_error("sks"); ?>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            <p><input type="submit" value="Submit"></p>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
        <footer>19200729_Rangga Wardhana Prasetyo_19.3A.11</footer>
    </center>
</body>

</html>