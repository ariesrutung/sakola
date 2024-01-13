<section id="tabs" class="tabs">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row d-flex">
            <li class="nav-item col-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <i class="ri-gps-line"></i>
                    <h4 class="d-none d-lg-block">Visi</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <i class="ri-body-scan-line"></i>
                    <h4 class="d-none d-lg-block">Misi</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                    <i class="ri-sun-line"></i>
                    <h4 class="d-none d-lg-block">Tujuan</h4>
                </a>
            </li>
            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <i class="ri-store-line"></i>
                    <h4 class="d-none d-lg-block">Budaya</h4>
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
                        <div class="row">
                            <div class="col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <h3><?= $visi['judul']; ?></h3>
                                <p><?= $visi['isi']; ?></p>
                            </div>
                            <div class="col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <img class="w-100" src="<?= base_url('uploads/profil/' . $visi['gambar']); ?>" alt="Gambar Berita">
                                <p class="text-sm text-muted text-center"><?= $visi['ket_gambar']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
                        <div class="row">
                            <div class="col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <h3><?= $misi['judul']; ?></h3>
                                <p><?= $misi['isi']; ?></p>
                            </div>
                            <div class="col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <img class="w-100" src="<?= base_url('uploads/profil/' . $misi['gambar']); ?>" alt="Gambar Berita">
                                <p class="text-sm text-muted text-center"><?= $misi['ket_gambar']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="tab-3">
                <div class="row">
                    <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
                        <div class="row">
                            <div class="col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <h3><?= $tujuan['judul']; ?></h3>
                                <p><?= $tujuan['isi']; ?></p>
                            </div>
                            <div class="col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <img class="w-100" src="<?= base_url('uploads/profil/' . $tujuan['gambar']); ?>" alt="Gambar Berita">
                                <p class="text-sm text-muted text-center"><?= $tujuan['ket_gambar']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane" id="tab-4">
                <div class="row">
                    <div class="col-lg-12 order-2 order-lg-1 mt-3 mt-lg-0">
                        <div class="row">
                            <div class="col-lg-8 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <h3><?= $budaya['judul']; ?></h3>
                                <p><?= $budaya['isi']; ?></p>
                            </div>
                            <div class="col-lg-4 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                                <img class="w-100" src="<?= base_url('uploads/profil/' . $budaya['gambar']); ?>" alt="Gambar Berita">
                                <p class="text-sm text-muted text-center"><?= $budaya['ket_gambar']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section><!-- End Tabs Section -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        var myListItems = document.querySelectorAll("#tabs .tab-content ul>li");

        myListItems.forEach(function(item) {
            var iconElement = document.createElement("i");
            iconElement.className = "ri-check-double-line";
            item.insertBefore(iconElement, item.firstChild);
        });
    });
</script>