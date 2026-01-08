<?php
include "koneksi.php"; 
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wanda Lathifa</title>
    <link 
      rel="stylesheet" 
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css"
    >
    <link  
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" 
      rel="stylesheet" 
      integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" 
      crossorigin="anonymous"
    >
    <style>
      body.dark-theme{ 
        background-color: #121212;
        color: #f1f1f1;
      }
      body.dark-theme .navbar,
      body.dark-theme .card,
      body.dark-theme footer{
        background-color: #1f1f1f !important;
        color: #f1f1f1;
      }
      body.dark-theme .card-text,
      body.dark-theme .card-title {
        color: #e0e0e0;
      }
    </style>

  <style>
    @media (max-width: 768px) 
    {
      .profil-table 
      {
        display: block;
        margin: 0 auto;
        width: 90%;
        max-width: 600px;
        border: none !important;
        background-color: #f8f9fa !important;
      }

      .profil-table tr,
      .profil-table td 
      {
        display: block;
        width: 100% !important;
        border: none !important;
      }

      .foto-cell 
      {
        background-color: #e3f2fd !important;
        text-align: center !important;
        padding: 30px 0 !important;
      }

      .nama-mobile 
      {
        display: block !important;
        margin-top: 15px;
      }

      .nama-desktop 
      {
        display: none !important;
      }

      .data-cell 
      {
        background-color: #ffffff !important;
        padding: 20px 25px !important;
      }

      .data-table 
      {
        width: 100% !important;
        font-size: 15px;
      }

      .data-table tr 
      {
        display: flex;
        justify-content: space-between;
        border-bottom: 1px solid #e5e5e5;
        padding: 8px 0;
      }

      .data-table th 
      {
        width: 45%;
        font-weight: 600;
        text-align: left;
      }

      .data-table td {
        width: 55%;
        text-align: left;
      }
    }
  </style>
  </head>
  
  <body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
  <div class="container">
    <a class="navbar-brand" href="#">Adlathifa space</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 text-dark">
        <li class="nav-item">
            <li class="nav-item">
                <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Article">Article</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#Galeri">Galeri</a>
            </li>  
            <li class="nav-item">
              <a class="nav-link" href="#Profil">Profil</a>
            </li>     
            <li class="nav-item">
              <a class="nav-link" href="#Jadwal">Jadwal</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php" target="_blank">Login</a>
            </li>   
        </li>
      </ul>
      <div class="d-flex ms-3">
        <button id="darkBtn" class="btn btn-dark me-2">
          <i class="bi bi-moon-fill"></i>
        </button>
        <button id="lightBtn" class="btn btn-light">
          <i class="bi bi-sun-fill text-warning"></i>
        </button>
      </div>
    </div>
  </div>
</nav>

    <section id="Hero" class="text-center p-5 bg-info-subtle">
        <div class="container">
            <div class="d-sm-flex flex-sm-row-reverse align-items-center">
                <img src="imgg/Wandaaa.jpg" class="img-fluid" width="360" style="max-width: none;">
                <div>
                  <h1 class="fw-bold display-5"> 
                    Wanda Lathifa Adahwiyah
                  </h1>
                  <p class="h5">
                  Seorang mahasiswi berusia 19 tahun yang berasal dari Pekalongan. Saat ini, ia menempuh pendidikan di Universitas Dian Nuswantoro dan mengambil program studi Teknik Informatika saat ini telah semester 3.
                  </p>
                  <h6>
                    <span id="tanggal"></span>
                    <span id="jam"></span>
                  </h6>
                </div>
            </div>
        </div>
    </section>

    <!-- article begin -->
<section id="Article" class="text-center p-5">
  <div class="container">
    <h1 class="fw-bold display-4 pb-3">Article</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
      <?php
      $sql = "SELECT * FROM article ORDER BY tanggal DESC";
      $hasil = $conn->query($sql); 

      while($row = $hasil->fetch_assoc()){
      ?>
        <div class="col">
          <div class="card h-100">
            <img src="imgg/<?= $row["gambar"]?>" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title"><?= $row["judul"]?></h5>
              <p class="card-text">
                <?= $row["isi"]?>
              </p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <?= $row["tanggal"]?>
              </small>
            </div>
          </div>
        </div>
        <?php
      }
      ?> 
    </div>
  </div>
</section>
<!-- article end -->

    <section id="Galeri" class="text-center p-5 bg-info-subtle">
        <div class="container">
            <h1 class="fw-bold display-4 pb-3">Galeri</h1>
        <div id="carouselExample" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="imgg/studytour.jpg" class="d-block w-100" alt="foto">
            </div>

            <div class="carousel-item">
              <img src="imgg/mpm24.jpg" class="d-block w-100" alt="foto">
            </div>

            <div class="carousel-item">
              <img src="imgg/bukber4104.jpg" class="d-block w-100" alt="foto">
            </div>

            <div class="carousel-item">
              <img src="imgg/solooooo.jpg" class="d-block w-100" alt="foto">
            </div>

            <div class="carousel-item">
              <img src="imgg/batik4104.jpg" class="d-block w-100" alt="foto">
            </div>
          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>

          <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>

    <section id="Profil" class="py-5">
      <div class="container">
    <h1 class="fw-bold text-center mb-5">Profil Mahasiswa</h1>
      <div class="d-flex justify-content-center">
        <div class="max-width: 850px; width:100%">
                  <table class="table table-bordered shadow-sm align-middle profil-table"
             style="max-width: 850px; background-color: #f8f9fa; border-radius: 12px; overflow: hidden;">
          <tr>
            <td class="foto-cell text-center align-middle p-4" style="width: 35%; background-color: #e3f2fd;">
              <img src="imgg/akuuu fromal.jpg"
                 alt="Foto Profil"
                 class="rounded-circle shadow"
                 style="width: 180px; height: 180px; object-fit: cover;">
            </td>
              <td class="data-cell p-4" style="background-color: #ffffff;">
                <h4 class="fw-bold mb-3 nama">Wanda Lathifa Adahwiyah</h4>
                <table class="table table-borderless mb-0 data-table">
                  <tr><th style="width: 150px;">NIM</th><td>A11.2024.15692</td></tr>
                  <tr><th>Program Studi</th><td>Teknik Informatika</td></tr>
                  <tr><th>Email</th><td>wandalathifa25@gmail.com</td></tr>
                  <tr><th>Telepon</th><td>0823-2451-3590</td></tr>
                  <tr><th>Alamat</th><td>Sragi, Pekalongan</td></tr>
                </table>
              </td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </section>

  <section id="Jadwal" class="text-center py-5 bg-light">
    <div class="container">
      <h1 class="fw-bold display-5 mb-5">Jadwal Kuliah & Kegiatan Mahasiswa</h1>
      <div class="row row-cols-1 row-cols-md-4 g-4 text-start">
     
      <div class="col">
        <div class="card h-100 border-0 shadow" style="background-color:#e3f2fd;">
          <div class="card-header bg-primary text-white fw-bold text-center">Senin</div>
          <div class="card-body">
            <p class="mb-1"><strong>10:20 - 12:00</strong><br>Basis Data<br><small>Ruang H.5.4</small></p>
            <p class="mb-0"><strong>12:30 - 15:00</strong><br>Logika Informatika<br><small>Ruang H.5.3</small></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 shadow" style="background-color:#e8f5e9;">
          <div class="card-header bg-success text-white fw-bold text-center">Selasa</div>
          <div class="card-body">
            <p class="mb-1"><strong>08:40 - 10:20</strong><br>Basis Data<br><small>Ruang D.2.K</small></p>
            <p class="mb-0"><strong>12:30 - 14:10</strong><br>Pendidikan Kewenegaraan<br><small>Kulino</small></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 shadow" style="background-color:#ffebee;">
          <div class="card-header bg-danger text-white fw-bold text-center">Rabu</div>
          <div class="card-body">
            <p class="mb-1"><strong>07:00 - 09:30</strong><br>Probabilitas dan Statistik<br><small>Ruang H.4.4</small></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 shadow" style="background-color:#fff8e1;">
          <div class="card-header bg-warning fw-bold text-center">Kamis</div>
          <div class="card-body">
            <p class="mb-1"><strong>08:40 - 10:20</strong><br>Pemrograman Berbasis Web<br><small>Ruang D.2.J</small></p>
            <p class="mb-0"><strong>12:30 - 15:00</strong><br>Rekayasa Perangkat Lunak<br><small>Ruang H.4.3</small></p>

          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 shadow" style="background-color:#e0f7fa;">
          <div class="card-header bg-info text-white fw-bold text-center">Jumat</div>
          <div class="card-body">
            <p class="mb-1"><strong>12:30 - 15:00</strong><br>Sistem Operasi<br><small>Ruang H.5.3</small></p>
            <p class="mb-0"><strong>16:00 - 19:00</strong><br>Rapat MPM-KM<br><small>Ruang G.3</small></p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 shadow" style="background-color:#eceff1;">
          <div class="card-header bg-secondary text-white fw-bold text-center">Sabtu</div>
          <div class="card-body">
            <p class="text-center mt-3 mb-0">Jadwal Kosong</p>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100 border-0 shadow" style="background-color:#f3e5f5;">
          <div class="card-header bg-dark text-white fw-bold text-center">Minggu</div>
          <div class="card-body">
            <p class="text-center mt-3 mb-0">Jadwal Kosong</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <footer class="text-center p-5">
      <div>
        <a href="https://www.instagram.com/adlathifa?utm_source=qr&igsh=MXJydDg1ZHE2MGo0bA=="> <i class="bi bi-instagram h2 p-2 text-dark"></i></a>
        <a href="https://x.com/bee_beomie?t=Fow8igSog7L4gX2j2zLyKQ&s=08"> <i class="bi bi-twitter-x h2 p-2 text-dark"></i></a>
        <a href="https://www.tiktok.com/@kyuenael?_t=ZS-90x5iuYm9WH&_r=1"><i class="bi bi-tiktok h1 p-2 text-dark"></i></a>
      </div>
      <div>
        Wanda Lathifa A &copy;2025
      </div>
    </footer class="text-center p-5">
   
      <script type="text/javascript">
        window.setTimeout("tampilWaktu()", 1000);

        function tampilWaktu() 
        {
          var waktu = new Date();
          var bulan = waktu.getMonth() + 1;

          setTimeout("tampilWaktu()", 1000);
          document.getElementById("tanggal").innerHTML =
          waktu.getDate() + "/" + bulan + "/" + waktu.getFullYear();
          document.getElementById("jam").innerHTML =
          waktu.getHours() + ":" + waktu.getMinutes() + ":" + waktu.getSeconds();
        }
    </script>
    <script>
      const darkBtn = document.getElementById('darkBtn');
      const lightBtn = document.getElementById('lightBtn');
      const body = document.body;

       darkBtn.addEventListener('click', function() {
        body.classList.add('dark-theme');
       });

      lightBtn.addEventListener('click', function() {
      body.classList.remove('dark-theme');
      });
    </script>

    <script
     src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
     crossorigin="anonymous">
    </script>
  </body>
</html>