
<html>
<head>
  <title>Analisis Penjualan</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.css">
  <style>
    #chart-container {
      width: 800px;
      height: 350px;
      margin-right: 30px;
    }

    #line-chart-container {
      width: 800px;
      height: 350px;
    }

    .charts-container {
      display: flex;
      justify-content: center;
    }

    h1 {
      font-size: 24px;
      text-align: center;
      margin-top: 30px;
    }

    .judul {
      text-align: center;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand" href="#footer">
    <img src="../bahan1/jualhape store (3).png" alt="Marketplace Logo" height="60" class="mr-2" />
    GADGETGALAXY
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="homeadmin.php">Home</a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
      </li>
    </ul>
  </div>
</nav>

<div class="tengah">
  <h1 class="judul">Analisis Penjualan dan Rincian Penghasilan</h1>
  <div class="charts-container">
    <div id="chart-container"></div>
    <div id="line-chart-container"></div>
  </div>
</div>
<br><br>
<footer class="bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <a href="#">
          <img src="../bahan1/jualhape store (2).png" alt="Marketplace Logo" height="200">
        </a>
        <p class="mt-3">"GADGETGALAXY adalah destinasi utama bagi pecinta teknologi untuk menjelajahi dan menemukan dunia smartphone terkini. Dengan koleksi terlengkap dari merek terkemuka dan inovasi terbaru, kami hadir untuk memberikan pengalaman belanja yang mengesankan dan memenuhi kebutuhan digital Anda. Dengan komitmen kami pada kualitas, layanan pelanggan yang unggul, dan ketertarikan terhadap perkembangan teknologi terbaru, GADGETGALAXY menjadi rekan setia Anda dalam menjelajahi galaksi smartphone. Selamat datang di GADGETGALAXY, tempat dimana teknologi bertemu dengan gaya!"</p>
        <p>Jika Anda ingin bantuan atau memiliki masukan, silahkan hubungi kami:</p>
        <ul>
          <li>Jam 9:30 - 17:30 (Senin s.d. Jumat)</li>
          <li>Jam 9:30 - 15:00 (Sabtu)</li>
          <li>Email : <a href="mailto:adiazzax@gmail.com">customercare@ggglx.com</a></li>
          <li>Phone : 150098</li>
          <li>WA : 0812 3456 7890</li>
        </ul>
      </div>
      <div class="col-md-6">
        <div class="row">
          <div class="col-md-6">
            <h5 class="mb-4">INFORMASI</h5>
            <ul class="list-unstyled">
              <li><a href="#">Tentang Kami</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">Privasi</a></li>
            </ul>
          </div>
          <div class="col-md-6">
            <h5 class="mb-4">LAYANAN PENJUAL</h5>
            <ul class="list-unstyled">
              <li><a href="#">Manajemen Produk</a></li>
              <li><a href="#">Kelola Stok</a></li>
              <li><a href="#">Pesanan Masuk</a></li>
              <li><a href="#">Pengaturan Akun</a></li>
            </ul>
          </div>
        </div>
        <div class="row mt-5">
          <div class="col-md-6">
            <h5 class="mb-4">KAMI MENERIMA</h5>
            <img src="../bahan1/Footer-payment_25-jan-23_.png"height="150">
          </div>
          <div class="col-md-6">
            <h5 class="mb-4">JASA PENGIRIMAN</h5>
            <img src="../bahan1/shipping-footer.png"height="80">
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/apexcharts@3.28.3/dist/apexcharts.min.js"></script>
<script>
  var salesData = [
    { year: '2018', amount: 500 },
    { year: '2019', amount: 800 },
    { year: '2020', amount: 1200 },
    { year: '2021', amount: 1500 },
    { year: '2022', amount: 2000 },
    { year: '2023', amount: 2500 }
  ];
  var chartData = salesData.map(function(item) {
    return { x: item.year, y: item.amount };
  });
  var chartOptions = {
    series: [{ name: 'Penjualan', data: chartData }],
    chart: { type: 'line', height: 350 },
    xaxis: { type: 'category' },
    yaxis: { title: { text: 'Jumlah Penjualan' } },
    title: { text: 'Analisis Penjualan' }
  };
  var chart = new ApexCharts(document.querySelector("#chart-container"), chartOptions);
  chart.render();

  var incomeData = [
    { month: 'Januari', income: 5000 },
    { month: 'Februari', income: 7000 },
    { month: 'Maret', income: 6000 },
    { month: 'April', income: 8000 },
    { month: 'Mei', income: 9000 },
    { month: 'Juni', income: 10000 },
    { month: 'Juli', income: 12000 },
    { month: 'Agustus', income: 11000 },
    { month: 'September', income: 9000 },
    { month: 'Oktober', income: 8000 },
    { month: 'November', income: 10000 },
    { month: 'Desember', income: 15000 }
  ];
  var lineChartData = incomeData.map(function(item) {
    return { x: item.month, y: item.income };
  });
  var lineChartOptions = {
    series: [{ name: 'Penghasilan', data: lineChartData }],
    chart: { type: 'line', height: 350 },
    xaxis: { type: 'category' },
    yaxis: { title: { text: 'Jumlah Penghasilan' } },
    title: { text: 'Rincian Penghasilan' }
  };
  var lineChart = new ApexCharts(document.querySelector("#line-chart-container"), lineChartOptions);
  lineChart.render();
</script>

</body>
</html>
