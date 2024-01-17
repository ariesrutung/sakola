<style>
    .panel-body p {
        display: flex;
    }

    hr {
        margin: 5px 0;
        color: inherit;
        border: 0;
        border-top: 2px solid #909090 !important;
        opacity: 0.25;
    }

    #header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card mb-4">
                <?php foreach ($identitas as $key) : ?>
                    <div class="card-header pb-0 d-flex align-items-center">
                        <h5 class="mb-0 text-capitalize">Data Identitas Sekolah</h5>
                    </div>
                    <div class="card-body">
                        <div class="row mt-4">
                            <div class="col-md-4">
                                <div id="header">
                                    <h5 class="opacity-7 m-0">Identitas Sekolah</h5>
                                    <a href="<?= base_url() ?>admin/identitas/edit_data_identitas/<?= $key->id; ?>" class="btn bg-gradient-info btn-sm ms-auto mb-0"><i class="fas fa-edit me-2"></i>Edit Data</a>
                                </div>
                                <hr class="mb-4">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">NPSN</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->npsn; ?> </strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Status</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->status; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Bentuk Pendidikan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->bentuk_pendidikan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Status Kepemilikan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->status_kepemilikan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">SK Pendirian Sekolah</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->sk_pendirian; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Tanggal SK Pendirian</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->tgl_sk_pendirian; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">SK Izin Operasional</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->sk_izin_operasional; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Tanggal SK Izin Operasional</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->tgl_sk_izin_operasional; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Alamat</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->alamat; ?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="header">
                                    <h5 class="opacity-7 m-0">Kontak Utama</h5>
                                    <a href="<?= base_url() ?>admin/identitas/edit_data_identitas/<?= $key->id; ?>" class="btn bg-gradient-info btn-sm ms-auto mb-0"><i class="fas fa-edit me-2"></i>Edit Data</a>
                                </div>
                                <hr class="mb-4">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">RT/RW</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->rt_rw; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Dusun</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->dusun; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Desa/Kelurahan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->desa_kelurahan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Kecamatan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->kecamatan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Kabupaten</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->kabupaten; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Provinsi</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->provinsi; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Kode POS</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->kode_pos; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Lintang</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->lintang; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Bujur</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->bujur; ?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div id="header">
                                    <h5 class="opacity-7 m-0">Data Pelengkap</h5>
                                    <a href="<?= base_url() ?>admin/identitas/edit_data_identitas/<?= $key->id; ?>" class="btn bg-gradient-info btn-sm ms-auto mb-0"><i class="fas fa-edit me-2"></i>Edit Data</a>
                                </div>
                                <hr class="mb-4">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">RT/RW</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->rt_rw; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Dusun</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->dusun; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Desa/Kelurahan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->desa_kelurahan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Kecamatan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->kecamatan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Kabupaten</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->kabupaten; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Provinsi</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->provinsi; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Kode POS</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->kode_pos; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Lintang</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->lintang; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Bujur</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->bujur; ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div id="header">
                                    <h5 class="opacity-7 m-0">Data PTK dan PD</h5>
                                    <a href="<?= base_url() ?>admin/identitas/edit_data_identitas/<?= $key->id; ?>" class="btn bg-gradient-info btn-sm ms-auto mb-0"><i class="fas fa-edit me-2"></i>Edit Data</a>
                                </div>
                                <hr class="mb-4">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">NPSN</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->npsn; ?> </strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Status</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->status; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Bentuk Pendidikan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->bentuk_pendidikan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Status Kepemilikan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->status_kepemilikan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">SK Pendirian Sekolah</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->sk_pendirian; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Tanggal SK Pendirian</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->tgl_sk_pendirian; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">SK Izin Operasional</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->sk_izin_operasional; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Tanggal SK Izin Operasional</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->tgl_sk_izin_operasional; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Alamat</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->alamat; ?></strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id="header">
                                    <h5 class="opacity-7 m-0">Data Sarpras</h5>
                                    <a href="<?= base_url() ?>admin/identitas/edit_data_identitas/<?= $key->id; ?>" class="btn bg-gradient-info btn-sm ms-auto mb-0"><i class="fas fa-edit me-2"></i>Edit Data</a>
                                </div>
                                <hr class="mb-4">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">RT/RW</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->rt_rw; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Dusun</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->dusun; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Desa/Kelurahan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->desa_kelurahan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Kecamatan</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->kecamatan; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Kabupaten</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->kabupaten; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Provinsi</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->provinsi; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Kode POS</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->kode_pos; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Lintang</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->lintang; ?></strong></p>
                                        <p><span class="w-35 text-secondary font-weight-normal text-sm">Bujur</span><strong class="text-secondary font-weight-bold text-sm">: <?php echo $key->bujur; ?></strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>