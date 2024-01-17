<style>
    .panel-body p {
        display: flex;
    }
</style>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <div class="card-header pb-0 d-flex align-items-center">
                    <h5 class="mb-0 text-capitalize">Data Identitas Sekolah</h5>
                </div>
                <div class="card-body">
                    <?php echo form_open_multipart(); ?>
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="npsn">NPSN:</label>
                                <input class="form-control" type="text" name="npsn" value="<?php echo $identitas['npsn']; ?>" required><br>
                                <?= form_error('npsn', '<div class="text-danger text-sm">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="status">Status:</label>
                                <input class="form-control" type="text" name="status" value="<?php echo $identitas['status']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="bentuk_pendidikan">Bentuk Pendidikan:</label>
                                <input class="form-control" type="text" name="bentuk_pendidikan" value="<?php echo $identitas['bentuk_pendidikan']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="status_kepemilikan">Status Kepemilikan:</label>
                                <input class="form-control" type="text" name="status_kepemilikan" value="<?php echo $identitas['status_kepemilikan']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="sk_pendirian">SK Pendirian Sekolah:</label>
                                <input class="form-control" type="text" name="sk_pendirian" value="<?php echo $identitas['sk_pendirian']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="tgl_sk_pendirian">Tanggal SK Pendirian:</label>
                                <input class="form-control" type="date" name="tgl_sk_pendirian" value="<?php echo $identitas['tgl_sk_pendirian']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="sk_izin_operasional">SK Izin Operasional:</label>
                                <input class="form-control" type="text" name="sk_izin_operasional" value="<?php echo $identitas['sk_izin_operasional']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="tgl_sk_izin_operasional">Tanggal SK Izin Operasional:</label>
                                <input class="form-control" type="date" name="tgl_sk_izin_operasional" value="<?php echo $identitas['tgl_sk_izin_operasional']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="alamat">Alamat:</label>
                                <input class="form-control" name="alamat" value="<?php echo $identitas['alamat']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="rt_rw">RT/RW:</label>
                                <input class="form-control" type="text" name="rt_rw" value="<?php echo $identitas['rt_rw']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="dusun">Dusun:</label>
                                <input class="form-control" type="text" name="dusun" value="<?php echo $identitas['dusun']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="desa_kelurahan">Desa/Kelurahan:</label>
                                <input class="form-control" type="text" name="desa_kelurahan" value="<?php echo $identitas['desa_kelurahan']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="kecamatan">Kecamatan:</label>
                                <input class="form-control" type="text" name="kecamatan" value="<?php echo $identitas['kecamatan']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="kabupaten">Kabupaten:</label>
                                <input class="form-control" type="text" name="kabupaten" value="<?php echo $identitas['kabupaten']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="provinsi">Provinsi:</label>
                                <input class="form-control" type="text" name="provinsi" value="<?php echo $identitas['provinsi']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="kode_pos">Kode POS:</label>
                                <input class="form-control" type="text" name="kode_pos" value="<?php echo $identitas['kode_pos']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="lintang">Lintang:</label>
                                <input class="form-control" type="text" name="lintang" value="<?php echo $identitas['lintang']; ?>" required>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="form-group">
                                <label for="bujur">Bujur:</label>
                                <input class="form-control" type="text" name="bujur" value="<?php echo $identitas['bujur']; ?>" required>
                            </div>
                        </div>

                    </div>
                    <input class="btn bg-gradient-info btn-sm ms-auto mb-0" type="submit" value="Simpan">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>