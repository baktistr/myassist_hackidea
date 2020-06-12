<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MyAssists: Repository</title>
  <link href="<?php base_url() ?>assets/bulma/css/bulma.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
    type="text/css" />
  <link rel="stylesheet" href="<?php base_url() ?>assets/owlcarousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php base_url() ?>assets/owlcarousel/dist/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?php base_url();?>assets/css/mystyles.css">
  <link rel="icon" type="image/png" href="/favicon.png" />
  <link rel="icon" type="image/png" href="<?php base_url();?>assets/media/logos/brand-logo-crop.png" />
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="<?= base_url('home'); ?>">
        <img src="<?php base_url() ?>assets/media/logos/brand-logo-crop.png" class="kt-header__brand-logo-default" />
      </a>

      <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false"
        data-target="navbarBasicExample">
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
        <span aria-hidden="true"></span>
      </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item" href="#documentation">
          Documentation
        </a>
        <a class="navbar-item" href="#screenshot">
          Guide
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary" href="<?= base_url('/login');?>" target="_blank">
              <span class="material-icons">
                login
              </span>
              Dashboard
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <section class="hero is-medium is-primary"
      style="background-image: url(https://static.dezeen.com/uploads/2019/01/citic-tower-beijing-ctbuh-skyscraper-report-2018-hero_a-1704x959.jpg);background-position: center;background-size: cover;">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            MyAssists: Repository
          </h1>
          <h2 class="subtitle">
            Documentation page
          </h2>
        </div>
      </div>
    </section>

    <section class="section" style="background-color: white;" id="documentation">
      <div class="container has-text-centered">
        <h1 class="title">API Documentation</h1>
        <h2 class="subtitle">
          To go to API Documentation, please click button below
        </h2>
        <a href="https://app.swaggerhub.com/apis-docs/mohsulthana/myAssets/1.0.0" target="_blank"
          class="button is-primary is-rounded is">OPEN API</a>
      </div>
    </section>

    <section class="section screenshot" id="screenshot" style="background-color: #800000;">
      <div class="container-fluid has-text-centered">
        <h1 class="title has-text-white">Guide</h1>
        <h2 class="subtitle has-text-white">
          Here's some snapshot from the app
        </h2>
        <div class="owl-carousel has-text-white">
          <div>
            <img src="<?= base_url('assets/img/dashboard-1.png');?>" alt="">
            <p>Dashboard</p>
          </div>
          <div>
            <img src="<?= base_url('assets/img/dashboard-2.png');?>" alt="">
            <p>Table Lahan</p>
          </div>
          <div>
            <img src="<?= base_url('assets/img/dashboard-3.png');?>" alt="">
            <p>Table Bangunan</p>
          </div>
          <div>
            <img src="<?= base_url('assets/img/user-control.png');?>" alt="">
            <p>User Control</p>
          </div>
        </div>
      </div>
    </section>

    <section id="footer">
      <footer class="footer">
        <div class="content has-text-centered">
          <p>
            Built with Bulma, modified by <strong>MyAssists: Repository team</strong>
          </p>
        </div>
      </footer>
    </section>
  </main>
</body>

</html>

<style>
.navbar-item img {
  max-height: 3.75rem;
}

.owl-item img {
  max-height: 180px;
}

.owl-next span,
.owl-prev span {
  font-size: 3rem;
  margin: 0 .5rem;
}
</style>

<script src="<?php base_url() ?>assets/owlcarousel/dist/owl.carousel.min.js"></script>
<script>
$(document).ready(function() {
  $(".owl-carousel").owlCarousel({
    margin: 10,
    nav: true
  });
});
</script>