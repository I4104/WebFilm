                    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<div class="page-title d-flex flex-column me-3">
								<h1 class="d-flex text-dark fw-bold my-1 fs-3">Hồ Sơ</h1>
								<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
									<li class="breadcrumb-item text-gray-600">
										<a href="<?php echo $domain ;?>" class="text-gray-600 text-hover-primary">Trang Chủ</a>
									</li>
									<li class="breadcrumb-item text-gray-600">Tài Khoản</li>
									<li class="breadcrumb-item text-gray-500">Giới Thiệu</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<div class="content flex-row-fluid" id="kt_content">
							<div class="card mb-5 mb-xl-10">
								<div class="card-body pt-9 pb-0">
									<div class="d-flex flex-wrap flex-sm-nowrap mb-3">
										<div class="me-7 mb-4">
											<div class="symbol symbol-100px symbol-lg-160px symbol-fixed bg-light position-relative">
												<img src="<?php echo $ICrypt->parseToken($users["image_avatar"]) ;?>" alt="image">
												<div class="position-absolute translate-middle bottom-0 start-100 mb-6 bg-success rounded-circle border border-4 border-body h-20px w-20px"></div>
											</div>
										</div>
										<div class="flex-grow-1">
											<div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
												<div class="d-flex flex-column">
													<div class="d-flex align-items-center mb-2">
														<a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1"><?php echo $users["realname"] ;?></a>
														<span class="svg-icon svg-icon-1 svg-icon-primary" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Đã xác thực">
															<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
																<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"></path>
																<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
															</svg>
														</span>
														<a href="#" class="btn btn-sm btn-light-success fw-bold ms-2 fs-8 py-1 px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade to Pro</a>
													</div>
													<div class="d-flex flex-wrap fw-semibold fs-6 mb-4 pe-2">
														<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
    														<span class="svg-icon svg-icon-4 me-1">
    															<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
    																<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor"></path>
    																<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor"></path>
    																<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor"></rect>
    															</svg>
    														</span>Developer
    													</a>
														<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary me-5 mb-2">
														<span class="svg-icon svg-icon-4 me-1">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z" fill="currentColor"></path>
																<path d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z" fill="currentColor"></path>
															</svg>
														</span>
														SF, Bay Area</a>
														<a href="#" class="d-flex align-items-center text-gray-400 text-hover-primary mb-2">
    														<span class="svg-icon svg-icon-4 me-1">
    															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    																<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z" fill="currentColor"></path>
    																<path d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z" fill="currentColor"></path>
    															</svg>
    														</span><?php echo $users["email"] ;?>
														</a>
													</div>
												</div>
												<div class="d-flex">
													<a href="#" class="btn btn-sm btn-light me-2" id="kt_user_follow_button">
														<span class="svg-icon svg-icon-3 d-none">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<path opacity="0.3" d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor"></path>
																<path d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z" fill="currentColor"></path>
															</svg>
														</span>
														<span class="indicator-label">Theo Dõi</span>
														<span class="indicator-progress">Vui lòng đợi...
														<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													</a>
													<div class="me-0">
														<button class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
															<i class="bi bi-three-dots fs-3"></i>
														</button>
														<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true" style="">
															<div class="menu-item px-3">
																<div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Thông Tin</div>
															</div>
															<div class="menu-item px-3">
																<a href="#" class="menu-link px-3">Báo Cáo</a>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="d-flex flex-wrap flex-stack">
												<div class="d-flex flex-column flex-grow-1 pe-8">
													<div class="d-flex flex-wrap">
                                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="3">0</div>
                                                            </div>
                                                            <div class="fw-semibold fs-6 text-gray-600">Sản Phẩm</div>
                                                        </div>
                                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="11">0</div>
                                                            </div>
                                                            <div class="fw-semibold fs-6 text-gray-600">Tải Về</div>
                                                        </div>
                                                        <div class="border border-gray-300 border-dashed rounded min-w-125px py-3 px-4 me-6 mb-3">
                                                            <div class="d-flex align-items-center">
                                                                <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="4">0</div>
                                                            </div>
                                                            <div class="fw-semibold fs-6 text-gray-600">Bài Viết</div>
                                                        </div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<ul class="nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
										<li class="nav-item mt-2">
											<a class="nav-link text-active-success ms-0 me-10 py-5 active" href="<?php echo $domain."accounts/profile" ;?>">Trang Cá Nhân</a>
										</li>
										<li class="nav-item mt-2">
											<a class="nav-link text-active-success ms-0 me-10 py-5" href="<?php echo $domain."accounts/settings" ;?>">Cài Đặt</a>
										</li>
										<li class="nav-item mt-2">
											<a class="nav-link text-active-success ms-0 me-10 py-5" href="<?php echo $domain."accounts/security" ;?>">Bảo Mật</a>
										</li>
									</ul>
								</div>
							</div>
							<div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
								<div class="card-header cursor-pointer">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Chi Tiết Hồ Sơ</h3>
									</div>
									<a href="<?php echo $domain."accounts/settings" ;?>" class="btn btn-light-success btn-sm align-self-center">Chỉnh Sửa</a>
								</div>
								<div class="card-body p-9">
									<div class="row mb-7">
										<label class="col-lg-4 fw-semibold text-muted">Họ Và Tên</label>
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800"><?php echo $users["realname"]?></span>
										</div>
									</div>
									<div class="row mb-7">
										<label class="col-lg-4 fw-semibold text-muted">Email 
										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss-="click" title="Đã xác thực Email"></i></label>
										<div class="col-lg-8 d-flex align-items-center">
											<span class="fw-bold fs-6 text-gray-800 me-2"><?php echo $users["email"]?></span>
											<?php if ($users["email"] == true) {?>
											<span class="badge badge-success">Đã xác minh</span>
											<?php } else {?>
											<span class="badge badge-danger">Chưa xác minh</span>
											<?php }?>
										</div>
									</div>
									<div class="row mb-7">
										<label class="col-lg-4 fw-semibold text-muted">Website</label>
										<div class="col-lg-8">
											<a href="<?php echo "//".$users["website"] ;?>" target="_blank" class="fw-semibold fs-6 text-gray-800 text-hover-primary"><?php echo $users["website"] ;?></a>
										</div>
									</div>
									<div class="row mb-7">
										<label class="col-lg-4 fw-semibold text-muted">Quốc Gia 
										<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Country of origination" data-kt-initialized="1"></i></label>
										<div class="col-lg-8">
											<span class="fw-bold fs-6 text-gray-800"><?php echo $users["country"] ;?></span>
										</div>
									</div>
								</div>
							</div>
							<div class="row mb-5 gy-5 g-xl-10">
								<div class="col-xl-5">
									<div class="card card-flush h-xl-100">
										<div class="card-header pt-7">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Hoạt Động</span>
												<span class="text-gray-400 mt-1 fw-semibold fs-6">Lịch Sử Đăng Nhập</span>
											</h3>
											<div class="card-toolbar">
												<a href="<?php echo $domain."accounts/security" ;?>" class="btn btn-sm btn-light">Xem Chi Tiết</a>
											</div>
										</div>
										<div class="card-body">
											<div class="timeline-label">
											    <?php
											    $logs_login = $IDatabase->get_limit('logs_login', ["username" => $users["username"]], 0, 13, "DESC");
											    while($info_logs = $logs_login->fetch_array()){
											    ?>
												<div class="timeline-item">
													<div class="timeline-label fw-bold text-gray-800 fs-6"><?php echo date('H:i',(strtotime($info_logs["login_time"])));?></div>
													<div class="timeline-badge">
														<i class="fa fa-genderless text-primary fs-1"></i>
													</div>
													<div class="timeline-content fw-semibold text-gray-800 ps-3">
													    Đã đăng nhập vào <span class="text-success"><?php echo timeago($info_logs["login_time"]);?></span> - IP: <span class="text-danger"><?php echo $info_logs["ip"] ;?></span>
													</div>
												</div>
											    <?php } ?>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-7">
									<div class="card card-flush h-xl-100">
										<div class="card-header pt-7">
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Stock Report</span>
												<span class="text-gray-400 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
											</h3>
											<div class="card-toolbar">
												<div class="d-flex flex-stack flex-wrap gap-4">
													<div class="d-flex align-items-center fw-bold">
														<div class="text-muted fs-7 me-2">Cateogry</div>
														<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-select2-id="select2-data-10-842h" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
															<option></option>
															<option value="Show All" selected="selected" data-select2-id="select2-data-12-ako0">Show All</option>
															<option value="a">Category A</option>
															<option value="b">Category B</option>
														</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-19mk" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-gh7g-container" aria-controls="select2-gh7g-container"><span class="select2-selection__rendered" id="select2-gh7g-container" role="textbox" aria-readonly="true" title="Show All">Show All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
													</div>
													<!--end::Destination-->
													<!--begin::Status-->
													<div class="d-flex align-items-center fw-bold">
														<!--begin::Label-->
														<div class="text-muted fs-7 me-2">Status</div>
														<!--end::Label-->
														<!--begin::Select-->
														<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto select2-hidden-accessible" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status" data-select2-id="select2-data-13-pg4e" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
															<option></option>
															<option value="Show All" selected="selected" data-select2-id="select2-data-15-va2f">Show All</option>
															<option value="In Stock">In Stock</option>
															<option value="Out of Stock">Out of Stock</option>
															<option value="Low Stock">Low Stock</option>
														</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-pu6w" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-e7kv-container" aria-controls="select2-e7kv-container"><span class="select2-selection__rendered" id="select2-e7kv-container" role="textbox" aria-readonly="true" title="Show All">Show All</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
														<!--end::Select-->
													</div>
													<!--end::Status-->
													<!--begin::Search-->
													<a href="/metronic8/demo11/../demo11/apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
													<!--end::Search-->
												</div>
												<!--begin::Filters-->
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Table-->
											<div id="kt_table_widget_5_table_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="table-responsive"><table class="table align-middle table-row-dashed fs-6 gy-3 dataTable no-footer" id="kt_table_widget_5_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0"><th class="min-w-100px sorting" tabindex="0" aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1" aria-label="Item: activate to sort column ascending" style="width: 139.727px;">Item</th><th class="text-end pe-3 min-w-100px sorting_disabled" rowspan="1" colspan="1" aria-label="Product ID" style="width: 106.27px;">Product ID</th><th class="text-end pe-3 min-w-150px sorting" tabindex="0" aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1" aria-label="Date Added: activate to sort column ascending" style="width: 158.887px;">Date Added</th><th class="text-end pe-3 min-w-100px sorting" tabindex="0" aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 106.27px;">Price</th><th class="text-end pe-3 min-w-50px sorting" tabindex="0" aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 106.66px;">Status</th><th class="text-end pe-0 min-w-25px sorting" tabindex="0" aria-controls="kt_table_widget_5_table" rowspan="1" colspan="1" aria-label="Qty: activate to sort column ascending" style="width: 62.6562px;">Qty</th></tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="fw-bold text-gray-600">										<tr class="odd">
														<!--begin::Item-->
														<td>
															<a href="/metronic8/demo11/../demo11/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Macbook Air M1</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#XGY-356</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end" data-order="2022-04-20T00:00:00+07:00">02 Apr, 2022</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,230</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="58">
															<span class="text-dark fw-bold">58 PCS</span>
														</td>
														<!--end::Qty-->
													</tr><tr class="even">
														<!--begin::Item-->
														<td>
															<a href="/metronic8/demo11/../demo11/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Surface Laptop 4</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#YHD-047</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end" data-order="2022-04-20T00:00:00+07:00">01 Apr, 2022</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="0">
															<span class="text-dark fw-bold">0 PCS</span>
														</td>
														<!--end::Qty-->
													</tr><tr class="odd">
														<!--begin::Item-->
														<td>
															<a href="/metronic8/demo11/../demo11/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Logitech MX 250</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#SRR-678</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end" data-order="2022-03-20T00:00:00+07:00">24 Mar, 2022</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$64</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="290">
															<span class="text-dark fw-bold">290 PCS</span>
														</td>
														<!--end::Qty-->
													</tr><tr class="even">
														<!--begin::Item-->
														<td>
															<a href="/metronic8/demo11/../demo11/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">AudioEngine HD3</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#PXF-578</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end" data-order="2022-03-20T00:00:00+07:00">24 Mar, 2022</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="46">
															<span class="text-dark fw-bold">46 PCS</span>
														</td>
														<!--end::Qty-->
													</tr><tr class="odd">
														<!--begin::Item-->
														<td>
															<a href="/metronic8/demo11/../demo11/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">HP Hyper LTR</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#PXF-778</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end" data-order="2022-01-20T00:00:00+07:00">16 Jan, 2022</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$4500</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="78">
															<span class="text-dark fw-bold">78 PCS</span>
														</td>
														<!--end::Qty-->
													</tr><tr class="even">
														<!--begin::Item-->
														<td>
															<a href="/metronic8/demo11/../demo11/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#XGY-356</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end" data-order="2022-12-20T00:00:00+07:00">22 Dec, 2022</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="8">
															<span class="text-dark fw-bold">8 PCS</span>
														</td>
														<!--end::Qty-->
													</tr><tr class="odd">
														<!--begin::Item-->
														<td>
															<a href="/metronic8/demo11/../demo11/apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#XVR-425</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end" data-order="2022-12-20T00:00:00+07:00">27 Dec, 2022</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<td class="text-end" data-order="124">
															<span class="text-dark fw-bold">124 PCS</span>
														</td>
													</tr></tbody>
											</table></div><div class="row"><div class="col-sm-12 col-md-5 d-flex align-items-center justify-content-center justify-content-md-start"></div><div class="col-sm-12 col-md-7 d-flex align-items-center justify-content-center justify-content-md-end"></div></div></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>
			</div>