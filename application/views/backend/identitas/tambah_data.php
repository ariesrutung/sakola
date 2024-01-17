<!DOCTYPE html>
<html>

<head>
    <title>Profil Sekolah</title>
</head>

<body>
    <h2>Form Profil Sekolah</h2>
    <?php echo form_open('profil/simpan_data'); ?>

    <label for="npsn">NPSN:</label>
    <input type="text" name="npsn" required><br>

    <label for="status">Status:</label>
    <input type="text" name="status" required><br>

    <label for="bentuk_pendidikan">Bentuk Pendidikan:</label>
    <input type="text" name="bentuk_pendidikan" required><br>

    <label for="status_kepemilikan">Status Kepemilikan:</label>
    <input type="text" name="status_kepemilikan" required><br>

    <label for="sk_pendirian">SK Pendirian Sekolah:</label>
    <input type="text" name="sk_pendirian" required><br>

    <label for="tgl_sk_pendirian">Tanggal SK Pendirian:</label>
    <input type="date" name="tgl_sk_pendirian" required><br>

    <label for="sk_izin_operasional">SK Izin Operasional:</label>
    <input type="text" name="sk_izin_operasional" required><br>

    <label for="tgl_sk_izin_operasional">Tanggal SK Izin Operasional:</label>
    <input type="date" name="tgl_sk_izin_operasional" required><br>

    <label for="alamat">Alamat:</label>
    <textarea name="alamat" required></textarea><br>

    <label for="rt_rw">RT/RW:</label>
    <input type="text" name="rt_rw" required><br>

    <label for="dusun">Dusun:</label>
    <input type="text" name="dusun" required><br>

    <label for="desa_kelurahan">Desa/Kelurahan:</label>
    <input type="text" name="desa_kelurahan" required><br>

    <label for="kecamatan">Kecamatan:</label>
    <input type="text" name="kecamatan" required><br>

    <label for="kabupaten">Kabupaten:</label>
    <input type="text" name="kabupaten" required><br>

    <label for="provinsi">Provinsi:</label>
    <input type="text" name="provinsi" required><br>

    <label for="kode_pos">Kode POS:</label>
    <input type="text" name="kode_pos" required><br>

    <label for="lintang">Lintang:</label>
    <input type="text" name="lintang" required><br>

    <label for="bujur">Bujur:</label>
    <input type="text" name="bujur" required><br>

    <input type="submit" value="Simpan">
    <?php echo form_close(); ?>
</body>

</html>