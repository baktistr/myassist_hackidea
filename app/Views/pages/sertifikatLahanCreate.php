<?php echo view('./partials/_subheader/subheader-v1.php'); ?>

<!-- begin:: Content -->
<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
<!--begin::Portlet-->
<div class="kt-portlet">
												<div class="kt-portlet__head">
													<div class="kt-portlet__head-label">
														<h3 class="kt-portlet__head-title">Data Sertifikat</h3>
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
															<label>No Sertifikat</label>
															<input type="text" class="form-control" placeholder="Enter no sertifikat">
															
														</div>
                                                        <div class="form-group">
															<label>ID Areal CPY</label>
															<input type="text" class="form-control" placeholder="Enter id areal cpy">
															
                                                        </div>
                                                        <div class="form-group">
															<label>Lokasi Aset</label>
															<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
                                                        </div>
														<div class="form-row">
															<div class="form-group col-md-6">
																<label>Provinsi</label>
																<input type="text" class="form-control" placeholder="Enter provinsi">
															</div>
															<div class="form-group col-md-6">
																<label>Kodya</label>
																<input type="text" class="form-control" placeholder="Enter nama kodya">
															</div>
														</div>
														<div class="form-row">
															<div class="form-group col-md-6">
																<label>Kecamatan</label>
																<input type="text" class="form-control" placeholder="Enter nama kecamatan">
															</div>
															<div class="form-group col-md-6">
																<label>kelurahan</label>
																<input type="text" class="form-control" placeholder="Enter nama kelurahan">
															</div>
														</div>
														<div class="form-group">
															<label for="exampleSelect1">Divisi Regional</label>
															<select class="form-control" id="exampleSelect1">
                                                                <option>DIVISI REGIONAL 1</option>
                                                                <option>DIVISI REGIONAL 2</option>
                                                                <option>DIVISI REGIONAL 3</option>
                                                                <option>DIVISI REGIONAL 4</option>
                                                                <option>DIVISI REGIONAL 5</option>
                                                                <option>DIVISI REGIONAL 6</option>
                                                                <option>DIVISI REGIONAL 7</option>
															</select>
														</div>
														<div class="form-group">
															<label>WITEL</label>
															<input type="text" class="form-control" placeholder="Enter WITEL">
															
														</div>
														<div class="form-group">
															<label>Luas</label>
															<input type="number" class="form-control" value="1000" placeholder="enter luas">
                                                        </div>
                                                        <div class="form-group">
															<label>SK HAK</label>
															<input type="text" class="form-control" placeholder="Enter SK HAK">
															
														</div>
														<div class="form-group">
															<label>Jenis Sertifikat</label>
															<input type="text" class="form-control" placeholder="Enter jenis sertifikat">
															
                                                        </div>
                                                        <div class="form-group">
															<label for="example-date-input">Akhir</label>
															<input class="form-control" type="date" value="2037-01-18" id="example-date-input">
														</div>
														<div class="form-group">
															<label for="exampleSelect2">Status HGB</label>
															<select class="form-control" id="exampleSelect2">
																<option>Active</option>
																<option></option>
															</select>
														</div>
														<div class="form-group">
															<label>Loker</label>
															<input type="number" class="form-control" value="2144">
														</div>
														<div class="form-group">
															<label>Kode WITEL</label>
															<input type="number" class="form-control" value="16">
														</div>
														<div class="form-group">
															<label>Bundel</label>
															<input type="text" class="form-control" placeholder="Enter bundel">
															
                                                        </div>
                                                        <div class="form-group">
															<label>Halaman</label>
															<input type="text" class="form-control" placeholder="Enter halaman">
															
                                                        </div>
                                                        <div class="form-group">
															<label for="exampleSelect3">Status Penyimpanan</label>
															<select class="form-control" id="exampleSelect3">
																<option>Ada</option>
																<option>Tidak Ada</option>
															</select>
                                                        </div>
                                                        <div class="form-group">
															<label for="exampleSelect4">Final Status</label>
															<select class="form-control" id="exampleSelect4">
																<option>Aktif</option>
																<option>Tidak Aktif</option>
															</select>
                                                        </div>
                                                        <div class="form-group">
															<label>Keterangan</label>
															<textarea class="form-control" id="exampleTextarea2" rows="2"></textarea>
															
                                                        </div>
                                                        <div class="form-group">
															<label>Scan Sertifikat</label>
															<div></div>
															<div class="custom-file">
																<input type="file" class="custom-file-input" id="customFile">
																<label class="custom-file-label" for="customFile">Choose file</label>
															</div>
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