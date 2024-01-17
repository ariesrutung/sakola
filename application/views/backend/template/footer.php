<script src="<?= base_url() ?>assets/argon/assets/js/core/popper.min.js"></script>
<script src="<?= base_url() ?>assets/argon/assets/js/core/bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/argon/assets/js/plugins/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/argon/assets/js/plugins/smooth-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/argon/assets/js/plugins/chartjs.min.js"></script>
<script>
    var jeniskelaminData = <?php echo json_encode($gender_data); ?>;

    var labels = [];
    var data = [];
    var backgroundColors = [];

    // Warna-warna yang dihasilkan secara dinamis
    var dynamicColors = function() {
        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        return "rgba(" + r + "," + g + "," + b + ", 0.7)";
    };

    for (var i = 0; i < jeniskelaminData.length; i++) {
        labels.push(jeniskelaminData[i].jeniskelamin);
        data.push(jeniskelaminData[i].total);
        backgroundColors.push(dynamicColors());
    }

    var ctx = document.getElementById('genderChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: backgroundColors,
            }]
        },
        options: {}
    });
</script>

<script>
    var sukuData = <?php echo json_encode($suku); ?>;

    var labels = [];
    var data = [];
    var backgroundColors = [];

    // Warna-warna yang dihasilkan secara dinamis
    var dynamicColors = function() {
        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        return "rgba(" + r + "," + g + "," + b + ", 0.7)";
    };

    for (var i = 0; i < sukuData.length; i++) {
        labels.push(sukuData[i].suku);
        data.push(sukuData[i].total);
        backgroundColors.push(dynamicColors());
    }

    var ctx = document.getElementById('sukuChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: backgroundColors,
            }]
        },
        options: {}
    });
</script>

<script>
    var jurusanData = <?php echo json_encode($jurusan); ?>;

    var labels = [];
    var data = [];
    var backgroundColors = [];

    // Warna-warna yang dihasilkan secara dinamis
    var dynamicColors = function() {
        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        return "rgba(" + r + "," + g + "," + b + ", 0.7)";
    };

    for (var i = 0; i < jurusanData.length; i++) {
        labels.push(jurusanData[i].jurusan);
        data.push(jurusanData[i].total);
        backgroundColors.push(dynamicColors());
    }

    var ctx = document.getElementById('jurusanChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: backgroundColors,
            }]
        },
        options: {}
    });
</script>

<script>
    var jenissmtaData = <?php echo json_encode($jenissmta); ?>;

    var labels = [];
    var data = [];
    var backgroundColors = [];

    // Warna-warna yang dihasilkan secara dinamis
    var dynamicColors = function() {
        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        return "rgba(" + r + "," + g + "," + b + ", 0.7)";
    };

    for (var i = 0; i < jenissmtaData.length; i++) {
        labels.push(jenissmtaData[i].jenissmta);
        data.push(jenissmtaData[i].total);
        backgroundColors.push(dynamicColors());
    }

    var ctx = document.getElementById('jenissmtaChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: backgroundColors,
            }]
        },
        options: {}
    });
</script>

<script>
    var prodiData = <?php echo json_encode($prodi); ?>;

    var labels = [];
    var data = [];
    var backgroundColors = [];

    // Warna-warna yang dihasilkan secara dinamis
    var dynamicColors = function() {
        var r = Math.floor(Math.random() * 255);
        var g = Math.floor(Math.random() * 255);
        var b = Math.floor(Math.random() * 255);
        return "rgba(" + r + "," + g + "," + b + ", 0.7)";
    };

    for (var i = 0; i < prodiData.length; i++) {
        labels.push(prodiData[i].prodi);
        data.push(prodiData[i].total);
        backgroundColors.push(dynamicColors());
    }

    var ctx = document.getElementById('pilihanprodiChart').getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                data: data,
                backgroundColor: backgroundColors,
            }]
        },
        options: {}
    });
</script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="<?= base_url() ?>assets/argon/assets/js/argon-dashboard.min.js?v=2.0.4"></script>
</body>

</html>