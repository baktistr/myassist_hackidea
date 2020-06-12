<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Landing</title>
  <link href="<?php base_url() ?>assets/bulma/css/bulma.min.css" rel="stylesheet" type="text/css" />
  <link href="<?php base_url() ?>assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet"
    type="text/css" />
</head>

<body>
  <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="https://bulma.io">
        <img src="<?php base_url() ?>assets/media/logos/brand-logo-crop.png" class="kt-header__brand-logo-default" />
        <!-- <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28"> -->
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

        <a class="navbar-item">
          Documentation
        </a>
      </div>

      <div class="navbar-end">
        <div class="navbar-item">
          <div class="buttons">
            <a class="button is-primary" href="<?= base_url('/login');?>" target="_blank">
              Dashboard
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <main>
    <section class="hero is-medium is-primary">
      <div class="hero-body">
        <div class="container">
          <h1 class="title">
            MyAssets
          </h1>
          <h2 class="subtitle">
            Hero subtitle
          </h2>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container has-text-centered">
        <h1 class="title">API Documentation</h1>
        <h2 class="subtitle">
          A simple container to divide your page into <strong>sections</strong>, like the one you're currently reading
        </h2>
        <button class="button is-primary is-rounded is">OPEN API</button>
      </div>
    </section>
  </main>
</body>

</html>

<style>
.navbar-item img {
  max-height: 3.75rem;
}
</style>