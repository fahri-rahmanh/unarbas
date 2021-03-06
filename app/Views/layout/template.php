<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Online Bootstrap, JQuery, Font Awesome 5 Kit -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://kit.fontawesome.com/3ff9f42339.js" crossorigin="anonymous"></script>

  <!-- CSS  -->
  <link rel="stylesheet" href="<?= base_url("assets/css/all.css") ?>" />
  <?php if (isset($style)) {
    $style = explode(',', $style);
    foreach ($style as $css) {
      echo link_tag("assets/css/$css.css");
    }
    unset($css, $style);
  } ?>

  <!-- JQuery based Script -->
  <script type="text/javascript" src="<?= base_url('assets/js/main.js') ?>"></script>

  <title>Web Universitas</title>
</head>

<body>

  <!-- Navbar Header -->
  <?= $this->include('layout/navbar') ?>

  <!-- Main Content -->
  <?= $this->renderSection('content') ?>

  <!-- Footer -->
  <footer class="text-light pt-2 bg-dark">

    <div class="container-md mb-2">
      <div class="row justify-content-between">

        <div class="col-md-6">
          <div class="row">

            <div class="col-12 my-3">
              <img src="<?= base_url('assets/img/logoss.png') ?>" class="d-inline align-middle" alt="Logo" width="50">
              <span class="h4 fw-bold align-middle">Universitas Aruna Baswara</span>
            </div>

            <address class="col-md-6">
              <div class="h5 fw-bold text-center mb-3">Our Contact</div>
              <ul class="address list-unstyled">
                <li class="mb-2">
                  <div class="fw-bold">Email</div>
                  <a href="mailto:center@unarbas.ac.id" class="text-white text-decoration-none">center@unarbas.ac.id</a>
                </li>
                <li class="mb-2">
                  <div class="fw-bold">Telp.</div>
                  <a href="tel:+25169696969" class="text-white text-decoration-none">+251 6969 6969</a>
                </li>
                <li class="mb-2">
                  <div class="fw-bold">Jl. Upa Celi No.1</div>
                  <div class="address">Dadaupa Gorge, Mondstadt</div>
                </li>
              </ul>
            </address>

            <div class="col-md-6">
              <div class="h5 fw-bold text-center mb-3">Campus Location</div>
              <ul class="campus">
                <li>Unarbas Mondstadt</li>
                <li>Unarbas Liyue</li>
                <li>Unarbas Inazuma</li>
                <li>Unarbas Sumeru</li>
                <li>Unarbas Fountaine</li>
                <li>Unarbas Natlan</li>
                <li>Unarbas Shneznaya</li>
                <li>Unarbas Khaen'riah</li>
              </ul>
            </div>

          </div>
        </div>

        <div class="embed-map my-2 col-md-6">
          <iframe src="https://webstatic-sea.mihoyo.com/app/ys-map-sea/index.html?lang=en-us#/map/2?shown_types=&center=925.00,796.50&zoom=0.00" frameborder="0" width="100%" height="500px"></iframe>
        </div>

      </div>
    </div>

    <div class="bg-secondary text-white text-center" style="background-color: var(--bs-gray-dark);">
      Copyright <i class="fa fa-copyright" aria-hidden="true"></i> 2021 Aruna Baswara University
    </div>

  </footer>

  <!-- Independent Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>