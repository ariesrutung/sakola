<!DOCTYPE html>
<html>

<head>
    <title>Data Profil Sekolah</title>
</head>

<body>
    <h2>Data Profil Sekolah</h2>
    <table border="1">
        <tr>
            <th>NPSN</th>
            <th>Status</th>
            <th>Bentuk Pendidikan</th>
            <th>Status Kepemilikan</th>
            <th>SK Pendirian Sekolah</th>
            <th>Tanggal SK Pendirian</th>
            <th>SK Izin Operasional</th>
            <th>Tanggal SK Izin Operasional</th>
            <th>Alamat</th>
            <th>RT/RW</th>
            <th>Dusun</th>
            <th>Desa/Kelurahan</th>
            <th>Kecamatan</th>
            <th>Kabupaten</th>
            <th>Provinsi</th>
            <th>Kode POS</th>
            <th>Lintang</th>
            <th>Bujur</th>
            <!-- Tambahkan kolom sesuai dengan keterangan di atas -->
        </tr>
        <?php foreach ($identitas as $row) : ?>
            <tr>
                <td><?php echo $row->npsn; ?></td>
                <td><?php echo $row->status; ?></td>
                <td><?php echo $row->bentuk_pendidikan; ?></td>
                <td><?php echo $row->status_kepemilikan; ?></td>
                <td><?php echo $row->sk_pendirian; ?></td>
                <td><?php echo $row->tgl_sk_pendirian; ?></td>
                <td><?php echo $row->sk_izin_operasional; ?></td>
                <td><?php echo $row->tgl_sk_izin_operasional; ?></td>
                <td><?php echo $row->alamat; ?></td>
                <td><?php echo $row->rt_rw; ?></td>
                <td><?php echo $row->dusun; ?></td>
                <td><?php echo $row->desa_kelurahan; ?></td>
                <td><?php echo $row->kecamatan; ?></td>
                <td><?php echo $row->kabupaten; ?></td>
                <td><?php echo $row->provinsi; ?></td>
                <td><?php echo $row->kode_pos; ?></td>
                <td><?php echo $row->lintang; ?></td>
                <td><?php echo $row->bujur; ?></td>
                <!-- Tambahkan kolom sesuai dengan keterangan di atas -->
            </tr>
        <?php endforeach; ?>
    </table>
</body>

</html>