                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid">
                            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Quản Lý Thể Loại</h1>
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                            <li class="breadcrumb-item text-muted">Quản Lý</li>
                                            <li class="breadcrumb-item">
                                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                            </li>
                                            <li class="breadcrumb-item text-muted">Quản Lý Thể Loại</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 gap-lg-3">
										<button class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kn_modal_new_type">Tạo Thể Loại Mới</button>
									</div>
                                </div>
                            </div>
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-fluid">
                                    <div class="row">
    									<div class="col-md-12 col-lg-12 col-xl-12 col-xxl-12">
    									    <div class="card card-flush h-xl-100">
												<div class="card-header">
													<h3 class="card-title align-items-start flex-column">
														<span class="card-label fw-bold text-gray-600 fs-3">Thể Loại Sản Phẩm</span>
													</h3>
													<div class="card-title align-items-end flex-column" style="margin: 0rem !important;">
														<div class="d-flex align-items-center position-relative my-1">
															<span class="svg-icon svg-icon-1 position-absolute ms-4">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
																	<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
																</svg>
															</span>
															<input type="text" data-kt-filter="search" class="form-control form-control-solid w-250px ps-14" placeholder="Tìm kiếm" />
														</div>
													</div>
												</div>
												<div class="card-body pt-1 pb-1">
												    <div class="row">
												        <div class="col-md-12">
												            <table class="table align-middle border rounded table-row-dashed fs-6 g-5" id="datatable">
    															<thead>
    																<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase">
    																	<th class="min-w-100px">Customer Name</th>
    																	<th class="min-w-100px">Email</th>
    																	<th class="min-w-100px">Status</th>
    																	<th class="min-w-100px">Date Joined</th>
    																	<th class="text-end min-w-75px">No. Orders</th>
    																	<th class="text-end min-w-75px">No. Products</th>
    																	<th class="text-end min-w-100px pe-5">Total</th>
    																</tr>
    															</thead>
    															<tbody class="fw-semibold text-gray-600">
    																<tr>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">Emma Smith</a>
    																	</td>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">smith@kpmg.com</a>
    																	</td>
    																	<td>
    																		<div class="badge badge-light-success">Active</div>
    																	</td>
    																	<td>20 Dec 2022, 11:30 am</td>
    																	<td class="text-end pe-0">37</td>
    																	<td class="text-end pe-0">46</td>
    																	<td class="text-end">$2391.00</td>
    																</tr>
    																<tr>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">Melody Macy</a>
    																	</td>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">melody@altbox.com</a>
    																	</td>
    																	<td>
    																		<div class="badge badge-light-success">Active</div>
    																	</td>
    																	<td>05 May 2022, 6:05 pm</td>
    																	<td class="text-end pe-0">73</td>
    																	<td class="text-end pe-0">85</td>
    																	<td class="text-end">$1324.00</td>
    																</tr>
    																<tr>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">Mikaela Collins</a>
    																	</td>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">mik@pex.com</a>
    																	</td>
    																	<td>
    																		<div class="badge badge-light-success">Active</div>
    																	</td>
    																	<td>05 May 2022, 11:30 am</td>
    																	<td class="text-end pe-0">98</td>
    																	<td class="text-end pe-0">111</td>
    																	<td class="text-end">$3990.00</td>
    																</tr>
    																<tr>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">Francis Mitcham</a>
    																	</td>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">f.mit@kpmg.com</a>
    																	</td>
    																	<td>
    																		<div class="badge badge-light-success">Active</div>
    																	</td>
    																	<td>20 Dec 2022, 5:30 pm</td>
    																	<td class="text-end pe-0">68</td>
    																	<td class="text-end pe-0">76</td>
    																	<td class="text-end">$2584.00</td>
    																</tr>
    																<tr>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">Olivia Wild</a>
    																	</td>
    																	<td>
    																		<a href="#" class="text-dark text-hover-primary">olivia@corpmail.com</a>
    																	</td>
    																	<td>
    																		<div class="badge badge-light-success">Active</div>
    																	</td>
    																	<td>15 Apr 2022, 2:40 pm</td>
    																	<td class="text-end pe-0">48</td>
    																	<td class="text-end pe-0">58</td>
    																	<td class="text-end">$4107.00</td>
    																</tr>
    															</tbody>
    														</table>
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
                    
                    <div class="modal fade" id="kn_modal_new_type" tabindex="-1" aria-hidden="true">
            			<div class="modal-dialog modal-dialog-centered mw-650px">
            				<div class="modal-content rounded">
            					<div class="modal-header pb-0 border-0 justify-content-end">
            						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            							<span class="svg-icon svg-icon-1">
            								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
            									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
            								</svg>
            							</span>
            						</div>
            					</div>
            					<div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
            						<form id="kn_add_type" class="form" action="#">
            							<div class="mb-13 text-center">
            								<h1 class="mb-3">Thông Tin Thể Loại</h1>
            								<div class="text-muted fw-semibold fs-5">Vui lòng nhập đầy đủ  thông tin Thể Loại mới</div>
            							</div>
            							<div class="d-flex flex-column mb-8 fv-row">
            								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            									<span class="required">Tên Thể Loại</span>
            									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Tên Thể Loại vui lòng không nhập ký tự đặc biệt và trùng khớp với Thể Loại khác"></i>
            								</label>
            								<input type="text" class="form-control form-control-solid" placeholder="Nhập tên Thể Loại" name="category_name" />
            							</div>
            							<div class="d-flex flex-column mb-8">
            								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            									<span class="required">Đường Dẫn</span>
            									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Đường dẫn tĩnh để xem trang của Thể Loại"></i>
            								</label>
            								<input type="text" class="form-control form-control-solid" placeholder="Đường dẫn của Thể Loại" name="category_slug" />
            							</div>
            							<div class="d-flex flex-stack mb-8">
            								<div class="me-5">
            									<label class="fs-6 fw-semibold">Chế Độ Hiển Thị</label>
            									<div class="fs-7 fw-semibold text-muted">Nếu Bật Thì Hiển Thị, Nếu Tắt Thì Không Hiển Thị</div>
            								</div>
            								<label class="form-check form-switch form-check-custom form-check-solid">
            									<input class="form-check-input" name="category_display" type="checkbox" value="1" checked="checked" />
            									<span class="form-check-label fw-semibold text-muted">Hiển Thị</span>
            								</label>
            							</div>
            							<div class="text-center">
            								<button type="reset" data-bs-dismiss="modal" class="btn btn-light me-3">Hủy</button>
            								<button type="submit" class="btn btn-primary">
            									<span class="indicator-label">Tạo Thể Loại</span>
            									<span class="indicator-progress">Đang tạo...
            									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            								</button>
            							</div>
            						</form>
            					</div>
            				</div>
            			</div>
            		</div>