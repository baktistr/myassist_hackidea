<?php echo view('./partials/_subheader/subheader-v1.php'); ?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<!--begin::Portlet-->
<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Data Asset Lahan</h3>
													</div>
												</div>

												<!--begin::Form-->
												<form class="kt-form">
													<div class="kt-portlet__body">
													
														<div class="form-group">
															<label>ID Areal</label>
															<input type="text" class="form-control" placeholder="Enter id areal">
															
														</div>
														<div class="form-group">
															<label>Nama Lahan</label>
															<input type="text" class="form-control" placeholder="Enter nama lahan">
															
														</div>
														<div class="form-group">
															<label>Alamat</label>
															<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
														</div>
														<div class="form-row">
															<div class="form-group col-md-6">
																<label>Provinsi</label>
																<input type="text" class="form-control" placeholder="Enter provinsi">
															</div>
															<div class="form-group col-md-6">
																<label>Kota</label>
																<input type="text" class="form-control" placeholder="Enter nama kota">
															</div>
														</div>
														<div class="form-row">
															<div class="form-group col-md-6">
																<label>Kecamatan</label>
																<input type="text" class="form-control" placeholder="Enter nama kecamatan">
															</div>
															<div class="form-group col-md-6">
																<label>Desa</label>
																<input type="text" class="form-control" placeholder="Enter nama desa">
															</div>
														</div>
														<div class="form-row">
															<div class="form-group col-md-6">
																<label>Lat</label>
																<input type="number" class="form-control" placeholder="Enter lat">
															</div>
															<div class="form-group col-md-6">
																<label>Long</label>
																<input type="number" class="form-control" placeholder="Enter long">
															</div>
														</div>
														
														<div class="form-group">
															<label for="exampleSelect1">Urutan Gedung</label>
															<select class="form-control" id="exampleSelect1">
																<option>TRUE</option>
																<option>FALSE</option>
															</select>
														</div>
														<div class="form-group">
															<label>Luas Tanah</label>
															<input type="number" class="form-control" value="1000">
														</div>
														<div class="form-group">
															<label>Luas Gedung</label>
															<input type="number" class="form-control" value="1000">
														</div>
														<div class="form-group">
															<label>Penggunaan</label>
															<input type="text" class="form-control" placeholder="Enter penggunaan">
															
														</div>
														<div class="form-group">
															<label for="exampleSelect2">Urutan Gedung</label>
															<select class="form-control" id="exampleSelect2">
																<option>ADA</option>
																<option>TIDAK ADA</option>
															</select>
														</div>
														<div class="form-group">
															<label for="exampleSelect1">Penyimpanan Sertifikat</label>
															<select class="form-control" id="exampleSelect1">
																<option>TERSIMPAN</option>
																<option>TIDAK TERSIMPAN</option>
															</select>
														</div>
														<div class="form-group">
															<label for="exampleSelect1">Area Regional</label>
															<select class="form-control" id="exampleSelect1">
																<option>1</option>
																<option>2</option>
																<option>3</option>
																<option>4</option>
																<option>5</option>
																<option>6</option>
																<option>7</option>
															</select>
														</div>
														<div class="form-group">
															<label>Kode Provinsi</label>
															<input type="number" class="form-control" value="12">
														</div>
														<div class="form-group">
															<label>WITEL</label>
															<input type="text" class="form-control" placeholder="Enter penggunaan">
															
														</div>
														<div class="form-group">
															<label>Kode WITEL</label>
															<input type="number" class="form-control" value="16">
														</div>
														<div class="form-group">
															<label>Kode Lokasi</label>
															<input type="text" class="form-control" placeholder="Enter kode lokasi (x-xx-xx-xx)">
															
														</div>
													</div>
													<div class="kt-portlet__foot">
														<div class="kt-form__actions">
															<button class="btn btn-primary">Submit</button>
															<button type="reset" class="btn btn-secondary">Cancel</button>
														</div>
													</div>
												</form>

												<!--end::Form-->
											</div>
</div>

<!-- end:: Content -->