<style>
.nowrap {
  white-space: nowrap;
}

.center {
  text-align: center;
}

div.scrollmenu {
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: white;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: #777;
}

::-webkit-scrollbar {
  width: 0px;
  background: transparent;
  /* make scrollbar transparent */
}
</style>
<?php echo view('./partials/_subheader/subheader-v1.php'); ?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">

  <!--[html-partial:begin:{"id":"demo4/dist/inc/view/demos/pages/index","page":"index"}]/-->

  <!--[html-partial:begin:{"id":"demo4/dist/inc/view/partials/content/dashboards/dashboard-5","page":"index"}]/-->

  <!--begin::Dashboard 5-->

  <!--begin::Row-->
  <div class="row">
    <div class="col-lg-12 col-xl-8 order-lg-2 order-xl-1">
      <!--begin::Portlet-->
      <div class="kt-portlet kt-portlet--height-fluid">
        <div class="kt-portlet__head">
          <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">Asset Mapping</h3>
          </div>
          <div class="kt-portlet__head-toolbar">
            <div class="kt-portlet__head-wrapper">
              <div class="">
                <!-- <button type="button" class="btn btn-label-brand btn-sm btn-bold dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																	Export
																</button> -->
                <!-- <div class="kt-slider__nav">
																	<a class="kt-slider__nav-prev carousel-control-prev" href="#kt-widget-slider-13-1" role="button" data-slide="prev">
																		<i class="fa fa-angle-left"></i>
																	</a>
																	<a class="kt-slider__nav-next carousel-control-next" href="#kt-widget-slider-13-1" role="button" data-slide="next">
																		<i class="fa fa-angle-right"></i>
																	</a>
																</div> -->
              </div>
            </div>
          </div>
        </div>
        <div class="kt-portlet__body kt-portlet__body--fluid">
          <div class="kt-widget-9">
            <div class="kt-widget-9__panel">
              <div class="kt-widget-9__legends">
                <div class="kt-widget-9__legend">
                  <div class="kt-widget-9__legend-label">
                    <h5>Region 1</h5>
                  </div>
                </div>
              </div>

            </div>
            <div class="kt-widget-9__chart">

              <!--Doc: For the chart initialization refer to "widgetSalesStatisticsChart" function in "src\theme\app\scripts\custom\dashboard.js" -->
              <canvas id="kt_chart_sales_statistics" height="250"></canvas>
            </div>
          </div>
        </div>
      </div>

      <!--end::Portlet-->
    </div>

    <div class="col-lg-6 col-xl-6 order-lg-2 order-xl-1">

      <!--begin::Portlet-->
      <div class="kt-portlet kt-portlet--height-fluid kt-widget ">
        <div class="kt-portlet__body">
          <div id="kt-widget-slider-13-1" class="kt-slider carousel slide" data-ride="carousel" data-interval="8000">
            <div class="text-center kt-slider__head">
              <div class="text-dark kt-slider__label">Status Sertifikat Tanah</div>

              <!-- button detail -->
              <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-toolbar-wrapper">
                  <div class="dropdown dropdown-inline">
                    <div class="kt-slider__nav">
                      <a class="kt-slider__nav-next carousel-control-next" href="#" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-inner">
              <div class=" active kt-slider__body">
                <div class="kt-widget-13">
                  <div class="text-center kt-widget-13__body">
                    <h5>HGB</h5>
                    <h5>HGB Jatuh Tempo</h5>
                    <h5>Hak Pakai</h5>
                    <h5>Hak Milik</h5>
                    <h5>Tidak Bersertifikat</h5>

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
              <div class="kt-portlet__head-toolbar">
                <div class="kt-portlet__head-toolbar-wrapper">
                  <div class="dropdown dropdown-inline">
                    <div class="kt-slider__nav">
                      <a class="kt-slider__nav-next carousel-control-next" href="#" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-inner">
              <div class=" active kt-slider__body">
                <div class="kt-widget-13">
                  <div class="kt-widget-13__body">
                    <h5>Litigasi : 11</h5>
                    <h5>Non Litigasi : 10</h5>

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

  <!--end::Row-->

  <!--end::Dashboard 5-->

  <!--[html-partial:end:{"id":"demo4/dist/inc/view/partials/content/dashboards/dashboard-5","page":"index"}]/-->

  <!--[html-partial:end:{"id":"demo4/dist/inc/view/demos/pages/index","page":"index"}]/-->
</div>

<!-- end:: Content -->