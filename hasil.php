
<!DOCTYPE html>
<html>
<head>
    <title>Hasil Pemeriksaan</title>
</head>
<body>
    <h1>Hasil Pemeriksaan</h1>

    <?php
    // Memeriksa apakah form telah disubmit
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Mengambil nilai input dari form
        $nama = $_POST['nama'];
        $tanggal_pemeriksaan = $_POST['tanggal_pemeriksaan'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $tekanan_darah = $_POST['tekanan_darah'];
        $asam_urat = $_POST['asam_urat'];
        $kolesterol_total = $_POST['kolesterol_total'];
        $gula_darah_puasa = $_POST['gula_darah_puasa'];
        $gula_darah_2_jam = $_POST['gula_darah_2_jam'];
        $gula_darah_sewaktu = $_POST['gula_darah_sewaktu'];

        // Menampilkan hasil pemeriksaan
        echo "<h2>Data Pemeriksaan:</h2>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Tanggal Pemeriksaan: $tanggal_pemeriksaan</p>";
        echo "<p>Tanggal Lahir/Usia: $tanggal_lahir</p>";
        echo "<p>Jenis Kelamin: $jenis_kelamin</p>";

        echo "<h2>Hasil Pemeriksaan:</h2>";
        echo "<table>
                <tr>
                    <th>Jenis Tes</th>
                    <th>Hasil Pemeriksaan</th>
                    <th>Normal</th>
                </tr>
                <tr>
                    <td>Tekanan Darah</td>
                    <td>$tekanan_darah mmHg</td>
                    <td>120/80 mmHg</td>
                </tr>
                <tr>
                    <td>Asam Urat</td>
                    <td>$asam_urat mg/dL</td>
                    <td>Pria: < 7 mg/dL | Wanita: < 6 mg/dL</td>
                </tr>
                <tr>
                    <td>Kolesterol Total</td>
                    <td>$kolesterol_total mg/dL</td>
                    <td>< 200 mg/dL</td>
                </tr>
                <tr>
                    <td>Gula Darah Puasa</td>
                    <td>$gula_darah_puasa mg/dL</td>
                    <td>70-110 mg/dL</td>
                </tr>
                <tr>
                    <td>Gula Darah 2 Jam Setelah Makan</td>
                    <td>$gula_darah_2_jam mg/dL</td>
                    <td>100-150 mg/dL</td>
                </tr>
                <tr>
                    <td>Gula Darah Sewaktu/Acak</td>
                    <td>$gula_darah_sewaktu mg/dL</td>
                    <td>70-125 mg/dL</td>
                </tr>
            </table>";
    }
    ?>

</body>
</html>
