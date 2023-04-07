                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid">
                            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Quản Lý Danh Mục</h1>
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                                            <li class="breadcrumb-item text-muted">Quản Lý</li>
                                            <li class="breadcrumb-item">
                                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                            </li>
                                            <li class="breadcrumb-item text-muted">Quản Lý Danh Mục</li>
                                        </ul>
                                    </div>
                                    <div class="d-flex align-items-center gap-2 gap-lg-3">
										<button class="btn btn-sm fw-bold btn-primary" data-bs-toggle="modal" data-bs-target="#kn_modal_new_category">Tạo Danh Mục Mới</button>
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
														<span class="card-label fw-bold text-gray-600 fs-3">Danh Mục Sản Phẩm</span>
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
    																	<th class="min-w-100px">Tên Danh Mục</th>
    																	<th class="min-w-100px">Đường Dẫn</th>
    																	<th class="min-w-100px">Trạng Thái</th>
    																	<th class="text-end min-w-100px pe-5">Thao Tác</th>
    																</tr>
    															</thead>
    															<tbody class="fw-semibold text-gray-600">
    															    <?php
    															    $list_category = $IDatabase->get_limit('category', [""], 0, 10, "ASC");
                                                                    if ($list_category->num_rows > 0) {
                                                                    while ($info_category = $list_category->fetch_array()) {
                    											    ?>
    																<tr>
    																	<td>
    																		<span class="text-gray-800 text-hover-primary"><?php echo $info_category["name"] ;?></span>
    																	</td>
    																	<td>
    																		<span class="text-gray-800 text-hover-primary">/<?php echo $info_category["slug"] ;?>/</span>
    																	</td>
    																	<td>
    																	    <label class="form-check-solid">
    																	        <div class="form-check form-switch form-check-custom form-check-solid">
                                                                                    <input class="form-check-input" type="checkbox" <?php if ($info_category["status"] == "on") {echo 'checked="checked"';}?> disabled/>
                                                                                    <span class="form-check-label fw-semibold text-gray-900"><?php if ($info_category["status"] == "on") {echo 'Hiển Thị';} else {echo 'Ẩn';}?></span>
                                                                                </div>
                                            								</label>
    																	</td>
    																	<td class="text-end">
    																	    <button type="button" class="btn btn-icon btn-sm btn-light-primary" data-bs-toggle="modal" data-bs-target="#kn_modal_change_category" data-name="<?php echo $info_category["name"]; ?>" data-slug="<?php echo $info_category["slug"]; ?>" data-status="<?php echo $info_category["status"]; ?>" data-id="<?php echo $info_category["id"] ;?>">
    																	        <i class="fas fa-edit fs-7"></i>
    																	    </button>
                															<button type="button" class="btn btn-icon btn-sm btn-light-danger" onclick="del_category(<?php echo $info_category["id"]; ?>);">
                															    <i class="fas fa-trash fs-7"></i>
                															</button>
    																	</td>
    																</tr>
    																<?php } } else { echo '';} ?>
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
                    
                    <div class="modal fade" id="kn_modal_change_category" tabindex="-1" aria-hidden="true">
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
            						<form id="kn_change_category" class="form" novalidate="novalidate" method="POST">
            							<div class="mb-13 text-center">
            								<h1 class="mb-3">Chỉnh Sửa Danh Mục</h1>
            								<div class="text-muted fw-semibold fs-5" id="name_category">Chỉnh sửa thông tin danh mục</div>
            							</div>
            							<div class="d-flex flex-column mb-8 fv-row">
            								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            									<span class="required">Tên Danh Mục</span>
            									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Tên danh mục vui lòng không nhập ký tự đặc biệt và trùng khớp với danh mục khác"></i>
            								</label>
            								<input hidden name="id" id="id"/>
            								<input type="text" class="form-control form-control-solid" placeholder="Nhập tên danh mục" name="name" id="name"/>
            							</div>
            							<div class="d-flex flex-column mb-8">
            								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            									<span class="required">Đường Dẫn</span>
            									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Đường dẫn tĩnh để xem trang của danh mục"></i>
            								</label>
            								<input type="text" class="form-control form-control-solid" placeholder="Đường dẫn của danh mục" name="slug" id="slug"/>
            							</div>
            							<div class="d-flex flex-stack mb-8">
            								<div class="me-5">
            									<label class="fs-6 fw-semibold">Chế Độ Hiển Thị</label>
            									<div class="fs-7 fw-semibold text-muted">Nếu Bật Thì Hiển Thị, Nếu Tắt Thì Không Hiển Thị</div>
            								</div>
            								<label class="form-check form-switch form-check-custom form-check-solid">
            								    <input class="form-check-input" type="checkbox" name="status" id="status"/>
            									<span class="form-check-label fw-semibold text-muted">Hiển Thị</span>
            								</label>
            							</div>
            							<div class="text-center">
            								<button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">Hủy</button>
            								<button type="submit" class="btn btn-primary" id="kn_change_category_submit">
            									<span class="indicator-label">Cập Nhật</span>
            								</button>
            							</div>
            						</form>
            					</div>
            				</div>
            			</div>
            		</div>
                    

                    <div class="modal fade" id="kn_modal_new_category" tabindex="-1" aria-hidden="true">
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
            						<form id="kn_create_category" class="form" novalidate="novalidate" method="POST">
            							<div class="mb-13 text-center">
            								<h1 class="mb-3">Thông Tin Danh Mục</h1>
            								<div class="text-muted fw-semibold fs-5">Vui lòng nhập đầy đủ  thông tin danh mục mới</div>
            							</div>
            							<div class="d-flex flex-column mb-8 fv-row">
            								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            									<span class="required">Tên Danh Mục</span>
            									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Tên danh mục vui lòng không nhập ký tự đặc biệt và trùng khớp với danh mục khác"></i>
            								</label>
            								<input type="text" class="form-control form-control-solid" placeholder="Nhập tên danh mục" name="name" />
            							</div>
            							<div class="d-flex flex-column mb-8">
            								<label class="d-flex align-items-center fs-6 fw-semibold mb-2">
            									<span class="required">Đường Dẫn</span>
            									<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Đường dẫn tĩnh để xem trang của danh mục"></i>
            								</label>
            								<input type="text" class="form-control form-control-solid" placeholder="Đường dẫn của danh mục" name="slug" />
            							</div>
            							<div class="d-flex flex-stack mb-8">
            								<div class="me-5">
            									<label class="fs-6 fw-semibold">Chế Độ Hiển Thị</label>
            									<div class="fs-7 fw-semibold text-muted">Nếu Bật Thì Hiển Thị, Nếu Tắt Thì Không Hiển Thị</div>
            								</div>
            								<label class="form-check form-switch form-check-custom form-check-solid">
            									<input class="form-check-input" name="status" type="checkbox" value="on" checked="checked" />
            									<span class="form-check-label fw-semibold text-muted">Hiển Thị</span>
            								</label>
            							</div>
            							<div class="text-center">
            								<button type="button" data-bs-dismiss="modal" class="btn btn-light me-3">Hủy</button>
            								<button type="submit" class="btn btn-primary" id="kn_create_category_submit">
            									<span class="indicator-label">Tạo Danh Mục</span>
            									<span class="indicator-progress">Đang tạo...
            									<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            								</button>
            							</div>
            						</form>
            					</div>
            				</div>
            			</div>
            		</div>