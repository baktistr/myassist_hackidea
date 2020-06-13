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
                        <canvas id="aset_mapping" height="150"></canvas>
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
    
    var json_mapping = <?= json_encode($asset_mapping) ?>;
    
    var label_mapping = [];
    var data_q1 = [];
    var data_q2 = [];
    var data_q3 = [];
    var data_q4 = [];
    json_mapping.forEach(function(item, index){
      label_mapping.push('Regional '+item.area_regional)
      data_q1.push(item.q1)
      data_q2.push(item.q2)
      data_q3.push(item.q3)
      data_q4.push(item.q4)
    });
    
    var ctx = document.getElementById('aset_mapping').getContext('2d');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: label_mapping,
          datasets: [{
              label: "q1",
              backgroundColor: "#6e4ff5",
              borderColor: "#6e4ff5",
              borderWidth: 1,
              data: data_q1
          }, {
              label: "q2",
              backgroundColor: "#f6aa33",
              borderColor: "#f6aa33",
              borderWidth: 1,
              data: data_q2
          }, {
              label: "q3",
              backgroundColor: "#6bff33",
              borderColor: "#6bff33",
              borderWidth: 1,
              data: data_q3
          }, {
              label: "q4",
              backgroundColor: "#fc33ff",
              borderColor: "#fc33ff",
              borderWidth: 1,
              data: data_q4
          }]
        },
        options: {
            responsive: !0,
            legend: {
                position: "top"
            },
            title: {
                display: !0,
                text: "Aset Mapping Chart"
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