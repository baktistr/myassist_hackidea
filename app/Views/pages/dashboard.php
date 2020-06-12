<?php echo view('./partials/_subheader/subheader-v1.php'); ?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

  <!--[html-partial:begin:{"id":"demo4/dist/inc/view/demos/pages/index","page":"index"}]/-->

  <!--[html-partial:begin:{"id":"demo4/dist/inc/view/partials/content/dashboards/dashboard-5","page":"index"}]/-->

  <!--begin::Dashboard 5-->

  <!--begin::Row-->
  <?= session()->getFlashdata('msg') ? $_SESSION['msg'] : ''; ?>
  <div class="row">
    <div class="col-lg-4 col-xl-4">
      <div class="row">
        <div class="kt-portlet kt-portlet--height-fluid kt-widget ">
          <div class="kt-portlet__body">
            <div id="kt-widget-slider-13-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
              <div class="text-center kt-slider__head">
                <div class="text-dark kt-slider__label">Aset Lahan</div>

                <!-- button detail -->
                <div class="kt-portlet__head-toolbar">
                  <div class="kt-portlet__head-toolbar-wrapper">
                    <div class="dropdown dropdown-inline">
                      <div class="kt-slider__nav">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-inner">
                <div class=" active kt-slider__body">
                  <div class="kt-widget-13">
                    <div class="text-center kt-widget-13__body">
                      <h5>Luas: <?= $asset_lahan; ?> m2</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="kt-portlet kt-portlet--height-fluid kt-widget-13">
          <div class="kt-portlet__body">
            <div id="kt-widget-slider-13-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
              <div class="text-center kt-slider__head">
                <div class="text-dark kt-slider__label">Aset Bangunan</div>

                <!-- button detail -->
                <div class="kt-portlet__head-toolbar">
                  <div class="kt-portlet__head-toolbar-wrapper">
                    <div class="dropdown dropdown-inline">
                      <div class="kt-slider__nav">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-inner">
                <div class=" active kt-slider__body">
                  <div class="kt-widget-13">
                    <div class="text-center kt-widget-13__body">
                      <h5>Luas: <?= $asset_bangunan; ?> m2</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-xl-8">
      <div class="kt-portlet kt-portlet--height-fluid kt-widget-13">
        <div class="kt-portlet__body">
          <div id="kt-widget-slider-13-2" class="kt-slider carousel slide" data-ride="carousel" data-interval="6000">
            <div class="kt-slider__head">
              <div class="kt-slider__label">Aset Mapping</div>
              <div class="kt-slider__nav">
                <a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-2" role="button"
                  data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                </a>
                <a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-2" role="button"
                  data-slide="next">
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active kt-slider__body">
                <div class="kt-widget-13">
                  <div class="kt-widget-13__body">
                    <h5 class="text-dark mb-4">Regional</h5>
                    <div class="kt-widget-13__desc">
                      <div class="kt-widget-9__chart">
                        <!--Doc: For the chart initialization refer to "widgetSalesStatisticsChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
                        <canvas id="aset_mapping" height="250"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-lg-6 col-xl-6 order-lg-2 order-xl-1">

      <!--begin::Portlet-->
      <div class="kt-portlet kt-portlet--height-fluid kt-widget ">
        <div class="kt-portlet__body">
          <div id="kt-widget-slider-13-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
            <div class="text-center kt-slider__head">
              <div class="text-dark kt-slider__label">Status Sertifikat Tanah</div>

              <!-- button detail -->
 
            </div>
            <div class="carousel-inner">
              <div class=" active kt-slider__body">
                <div class="kt-widget-13">
                  <div class="text-center kt-widget-13__body">
                    <h5>HGB: <?= $status_sertifikat_lahan['hgb'];?></h5>
                    <h5>HGB Jatuh Tempo: <?= $status_sertifikat_lahan['hgbjt'];?></h5>
                    <h5>Hak Pakai: <?= $status_sertifikat_lahan['hp'];?> </h5>
                    <h5>Hak Milik: <?= $status_sertifikat_lahan['hm']; ?> </h5>
                    <h5>Tidak Bersertifikat: <?= $status_sertifikat_lahan['no_sertifikat']; ?> </h5>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!--end::Portlet-->
    </div>
    <div class="col-lg-6 col-xl-6 order-lg-2 order-xl-1">

      <!--begin::Portlet-->
      <div class="kt-portlet kt-portlet--height-fluid kt-widget-13">
        <div class="kt-portlet__body">
          <div id="kt-widget-slider-13-2" class="col-xs-1 text-center kt-slider carousel slide" data-ride="carousel"
            data-interval="4000">
            <div class="kt-slider__head">
              <div class="text-dark kt-slider__label">Status Riwayat Sengketa</div>
              <!-- button detail -->
 
            </div>
            <div class="carousel-inner">
              <div class=" active kt-slider__body">
                <div class="kt-widget-13">
                  <div class="kt-widget-13__body">
                    <h5>Litigasi: <?= $status_riwayat_sengketa['litigasi']; ?></h5>
                    <h5>Non Litigasi: <?= $status_riwayat_sengketa['non_litigasi']; ?> </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end::Portlet-->
    </div>
  </div>

  <script>
  var asetMappingChart = function() {
  if (!document.getElementById('aset_mapping')) {
    return;
  }
  var asset_mapping = <?= $asset_mapping; ?>

  var color = Chart.helpers.color;
  var barChartData = {
    labels: ['Regional 1', 'Regional 2', 'Regional 3', 'Regional 4'],
    datasets: [{
      label: 'Sales',
      backgroundColor: color(KTApp.getStateColor('brand')).alpha(1).rgbString(),
      borderWidth: 0,
      data: asset_mapping
    }]
  };

  var ctx = document.getElementById('aset_mapping').getContext('2d');
  var myBar = new Chart(ctx, {
    type: 'bar',
    data: barChartData,
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: false,
      scales: {
        xAxes: [{
          categoryPercentage: 0.35,
          barPercentage: 0.70,
          display: true,
          scaleLabel: {
            display: false,
            labelString: 'Month'
          },
          gridLines: false,
          ticks: {
            display: true,
            beginAtZero: true,
            fontColor: KTApp.getBaseColor('shape', 3),
            fontSize: 13,
            padding: 10
          }
        }],
        yAxes: [{
          categoryPercentage: 0.35,
          barPercentage: 0.70,
          display: true,
          scaleLabel: {
            display: false,
            labelString: 'Value'
          },
          gridLines: {
            color: KTApp.getBaseColor('shape', 2),
            drawBorder: false,
            offsetGridLines: false,
            drawTicks: false,
            borderDash: [3, 4],
            zeroLineWidth: 1,
            zeroLineColor: KTApp.getBaseColor('shape', 2),
            zeroLineBorderDash: [3, 4]
          },
          ticks: {
            max: 70,
            stepSize: 10,
            display: true,
            beginAtZero: true,
            fontColor: KTApp.getBaseColor('shape', 3),
            fontSize: 13,
            padding: 10
          }
        }]
      },
      title: {
        display: false
      },
      hover: {
        mode: 'index'
      },
      tooltips: {
        enabled: true,
        intersect: false,
        mode: 'nearest',
        bodySpacing: 5,
        yPadding: 10,
        xPadding: 10,
        caretPadding: 0,
        displayColors: false,
        backgroundColor: KTApp.getStateColor('brand'),
        titleFontColor: '#ffffff',
        cornerRadius: 4,
        footerSpacing: 0,
        titleSpacing: 0
      },
      layout: {
        padding: {
          left: 0,
          right: 0,
          top: 5,
          bottom: 5
        }
      }
    }
  });
  };
  // end chart 2
  </script>

  <!--end::Row-->

  <!--end::Dashboard 5-->

  <!--[html-partial:end:{"id":"demo4/dist/inc/view/partials/content/dashboards/dashboard-5","page":"index"}]/-->

  <!--[html-partial:end:{"id":"demo4/dist/inc/view/demos/pages/index","page":"index"}]/-->
</div>

<!-- end:: Content -->