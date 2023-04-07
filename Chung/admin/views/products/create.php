                    <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                        <div class="d-flex flex-column flex-column-fluid">
                            <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
                                <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                                    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Đăng Sản Phẩm</h1>
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1 pb-1">
                                            <li class="breadcrumb-item text-muted">Sản Phẩm</li>
                                            <li class="breadcrumb-item">
                                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                                            </li>
                                            <li class="breadcrumb-item text-muted">Đăng Sản Phẩm</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div id="kt_app_content" class="app-content flex-column-fluid">
                                <div id="kt_app_content_container" class="app-container container-fluid">
                                    <form id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo1/dist/apps/ecommerce/catalog/products.html">
                                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                            <div class="card card-flush">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Ảnh Đại Diện</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body text-center">
                                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                                        <div class="image-input-wrapper w-250px h-150px"></div>
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Đổi Ảnh">
                                                            <i class="bi bi-pencil-fill fs-7"></i>
                                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                                            <input type="hidden" name="avatar_remove" />
                                                        </label>
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Hủy Ảnh">
															<i class="bi bi-x fs-2"></i>
														</span>
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Xóa Ảnh">
															<i class="bi bi-x fs-2"></i>
														</span>
                                                    </div>
                                                    <div class="text-muted fs-7">Đặt hình ảnh thu nhỏ của sản phẩm. Chỉ các tệp hình ảnh *.png, *.jpg và *.jpeg được chấp nhận</div>
                                                </div>
                                            </div>
                                            <div class="card card-flush">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Trang Thái</h2>
                                                    </div>
                                                    <div class="card-toolbar">
                                                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                                        <option></option>
                                                        <option value="published" selected="selected">Đăng Bán</option>
                                                        <option value="draft">Hủy Đăng</option>
                                                        <option value="scheduled">Sắp Ra Mắt</option>
                                                        <option value="inactive">Bản Thử Nghiệm</option>
                                                    </select>
                                                    <div class="text-muted fs-7">Đặt trạng thái sản phẩm.</div>
                                                    <div class="d-none mt-10">
                                                        <label for="kt_ecommerce_add_product_status_datepicker" class="form-label">Select publishing date and time</label>
                                                        <input class="form-control" id="kt_ecommerce_add_product_status_datepicker" placeholder="Pick date & time" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card card-flush">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Chi Tiết</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <label class="form-label">Danh Mục</label>
                                                    <select class="form-select mb-2" data-control="select2" data-placeholder="Chọn Danh Mục" data-allow-clear="true" multiple="multiple">
                                                        <option></option>
                                                        <option value="Computers">Computers</option>
                                                        <option value="Watches">Watches</option>
                                                        <option value="Headphones">Headphones</option>
                                                        <option value="Footwear">Footwear</option>
                                                        <option value="Cameras">Cameras</option>
                                                        <option value="Shirts">Shirts</option>
                                                        <option value="Household">Household</option>
                                                        <option value="Handbags">Handbags</option>
                                                        <option value="Wines">Wines</option>
                                                        <option value="Sandals">Sandals</option>
                                                    </select>
                                                    <div class="text-muted fs-7 mb-7">Thêm sản phẩm vào danh mục.</div>
                                                    <a href="../../demo1/dist/apps/ecommerce/catalog/add-category.html" class="btn btn-light-primary btn-sm mb-10">
                                                        <span class="svg-icon svg-icon-2">
    														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    															<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
    															<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
    														</svg>
    													</span> Tạo Danh Mục Mới</a>
                                                    <label class="form-label d-block">Tags</label>
                                                    <input id="kt_ecommerce_add_product_tags" name="product_tags" class="form-control mb-2" value="" />
                                                    <div class="text-muted fs-7">Thêm thẻ vào sản phẩm.</div>
                                                </div>
                                            </div>
                                            <div class="card card-flush">
                                                <div class="card-header">
                                                    <div class="card-title">
                                                        <h2>Mẫu Sản Phẩm</h2>
                                                    </div>
                                                </div>
                                                <div class="card-body pt-0">
                                                    <label for="kt_ecommerce_add_product_store_template" class="form-label">Chọn thể loại</label>
                                                    <select class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_store_template">
                                                        <option></option>
                                                        <option value="default" selected="selected">Default template</option>
                                                        <option value="electronics">Electronics</option>
                                                        <option value="office">Office stationary</option>
                                                        <option value="fashion">Fashion</option>
                                                    </select>
                                                    <div class="text-muted fs-7">Gán một mẫu từ chủ đề hiện tại của bạn để xác định cách hiển thị một sản phẩm.</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2">
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general">Thông Tin Chung</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced">Nâng Cao</a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                                        <div class="card card-flush">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    <h2>Chung</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="mb-10 fv-row">
                                                                    <label class="required form-label">Tên Sản Phẩm</label>
                                                                    <input type="text" name="product_name" class="form-control mb-2" placeholder="Tên sản phẩm" value="" />
                                                                    <div class="text-muted fs-7">Tên sản phẩm là bắt buộc và được đề xuất là duy nhất.</div>
                                                                </div>
                                                                <div>
                                                                    <label class="form-label">Mô Tả</label>
                                                                    <div id="kt_ecommerce_add_product_description" name="product_description" class="min-h-200px mb-2"></div>
                                                                    <div class="text-muted fs-7">Đặt mô tả cho sản phẩm để hiển thị tốt hơn.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-flush">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    <h2>Tệp</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="fv-row mb-2">
                                                                    <div class="dropzone" id="kt_ecommerce_add_product_media">
                                                                        <div class="dz-message needsclick">
                                                                            <i class="bi bi-file-earmark-arrow-up text-primary fs-3x"></i>
                                                                            <div class="ms-4">
                                                                                <h3 class="fs-5 fw-bold text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                                                                <span class="fs-7 fw-semibold text-gray-400">Upload up to 10 files</span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="text-muted fs-7">Set the product media gallery.</div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-flush">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    <h2>Giá Sản Phẩm</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="mb-10 fv-row">
                                                                    <label class="required form-label">Giá Cơ Bản</label>
                                                                    <input type="text" name="price" class="form-control mb-2" placeholder="Giá sản phẩm" value="" />
                                                                    <div class="text-muted fs-7">Đặt giá sản phẩm.</div>
                                                                </div>
                                                                <div class="fv-row mb-10">
                                                                    <label class="fs-6 fw-semibold mb-2">Loại Giảm Giá
                                                                        <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="Chọn loại giảm giá sẽ được áp dụng cho sản phẩm này"></i>
                                                                    </label>
                                                                    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-1 row-cols-xl-3 g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                                                                        <div class="col">
                                                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                                                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
    																				<input class="form-check-input" type="radio" name="discount_option" value="1" checked="checked" />
    																			</span>
                                                                                <span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">Không Giảm Giá</span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col">
                                                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="2" />
																				</span>
                                                                                <span class="ms-5">
																					<span class="fs-4 fw-bold text-gray-800 d-block">Phần Trăm %</span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                        <div class="col">
                                                                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                                                                                <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
																					<input class="form-check-input" type="radio" name="discount_option" value="3" />
																				</span>
                                                                                <span class="ms-5">
																				    <span class="fs-4 fw-bold text-gray-800 d-block">Giá Cố Định</span>
                                                                                </span>
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_percentage">
                                                                    <label class="form-label">Đặt Phần Trăm Chiết Khấu</label>
                                                                    <div class="d-flex flex-column text-center mb-5">
                                                                        <div class="d-flex align-items-start justify-content-center mb-7">
                                                                            <span class="fw-bold fs-3x" id="kt_ecommerce_add_product_discount_label">0</span>
                                                                            <span class="fw-bold fs-4 mt-1 ms-2">%</span>
                                                                        </div>
                                                                        <div id="kt_ecommerce_add_product_discount_slider" class="noUi-sm"></div>
                                                                    </div>
                                                                    <div class="text-muted fs-7">Đặt phần trăm chiết khấu sẽ được áp dụng cho sản phẩm này.</div>
                                                                </div>
                                                                <div class="d-none mb-10 fv-row" id="kt_ecommerce_add_product_discount_fixed">
                                                                    <label class="form-label">Giá Chiết Khấu Cố Định</label>
                                                                    <input type="text" name="dicsounted_price" class="form-control mb-2" placeholder="Giá chiết khấu" />
                                                                    <div class="text-muted fs-7">Đặt giá sản phẩm đã chiết khấu. Sản phẩm sẽ được giảm theo giá cố định đã xác định</div>
                                                                </div>
                                                                <div class="d-flex flex-wrap gap-5">
                                                                    <div class="fv-row w-100 flex-md-root">
                                                                        <label class="required form-label">Loại Thuế</label>
                                                                        <select class="form-select mb-2" name="tax" data-control="select2" data-hide-search="true" data-placeholder="Chọn Loại Thuế">
                                                                            <option></option>
                                                                            <option value="0">Miễn Thuế</option>
                                                                            <option value="2">Sản Phẩm Có Thể Tải Xuống</option>
                                                                        </select>
                                                                        <div class="text-muted fs-7">Đặt loại thuế sản phẩm.</div>
                                                                    </div>
                                                                    <div class="fv-row w-100 flex-md-root">
                                                                        <label class="form-label">Phí VAT (%)</label>
                                                                        <input type="text" class="form-control mb-2" value="0" />
                                                                        <div class="text-muted fs-7">Đặt VAT cho sản phẩm.</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                                    <div class="d-flex flex-column gap-7 gap-lg-10">
                                                        <div class="card card-flush">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    <h2>Thông Tin</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="mb-10 fv-row">
                                                                    <label class="required form-label">SKU</label>
                                                                    <input type="text" name="sku" class="form-control mb-2" placeholder="Mã SKU" value="" />
                                                                    <div class="text-muted fs-7">Nhập Mã SKU Sản Phẩm.</div>
                                                                </div>
                                                                <div class="fv-row">
                                                                    <label class="form-label">Cho Phép Tải Xuống Nhiều Lần</label>
                                                                    <div class="form-check form-check-custom form-check-solid mb-2">
                                                                        <input class="form-check-input" type="checkbox" value="" />
                                                                        <label class="form-check-label">Có</label>
                                                                    </div>
                                                                    <div class="text-muted fs-7">Cho phép khách hàng tải xuống sản phẩm nhiều lần.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-flush">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    <h2>Các Biến Thể</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="" data-kt-ecommerce-catalog-add-product="auto-options">
                                                                    <label class="form-label">Thêm các biến thể sản phẩm</label>
                                                                    <div id="kt_ecommerce_add_product_options">
                                                                        <div class="form-group">
                                                                            <div data-repeater-list="kt_ecommerce_add_product_options" class="d-flex flex-column gap-3">
                                                                                <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                                    <div class="w-100 w-md-200px">
                                                                                        <select class="form-select" name="product_option" data-placeholder="Chọn một biến thể" data-kt-ecommerce-catalog-add-product="product_option">
                                                                                            <option></option>
                                                                                            <option value="color">Màu</option>
                                                                                            <option value="size">Kích Thước</option>
                                                                                            <option value="style">Phong Cách</option>
                                                                                        </select>
                                                                                    </div>
                                                                                    <input type="text" class="form-control mw-100 w-200px" name="product_option_value" placeholder="Giá trị" />
                                                                                    <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                                                                        <span class="svg-icon svg-icon-1">
    																						<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    																							<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
    																							<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
    																						</svg>
    																					</span>
                                                                                    </button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group mt-5">
                                                                            <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                                                                <span class="svg-icon svg-icon-2">
    																				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
    																					<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
    																					<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
    																				</svg>
    																			</span> Thêm một biến thể khác
    																	    </button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="card card-flush">
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    <h2>Tùy Chọn Meta</h2>
                                                                </div>
                                                            </div>
                                                            <div class="card-body pt-0">
                                                                <div class="mb-10">
                                                                    <label class="form-label">Meta Tag Title</label>
                                                                    <input type="text" class="form-control mb-2" name="product_meta_title" placeholder="Tên thẻ meta" />
                                                                    <div class="text-muted fs-7">Đặt tiêu đề thẻ meta. Được đề xuất là các từ khóa đơn giản và chính xác.</div>
                                                                </div>
                                                                <div class="mb-10">
                                                                    <label class="form-label">Meta Tag Description</label>
                                                                    <div id="kt_ecommerce_add_product_meta_description" name="product_meta_description" class="min-h-100px mb-2"></div>
                                                                    <div class="text-muted fs-7">Đặt mô tả thẻ meta cho sản phẩm để tăng xếp hạng SEO.</div>
                                                                </div>
                                                                <div>
                                                                    <label class="form-label">Meta Tag Keywords</label>
                                                                    <input id="kt_ecommerce_add_product_meta_keywords" name="product_meta_keywords" class="form-control mb-2" />
                                                                    <div class="text-muted fs-7">Đặt danh sách các từ khóa liên quan đến sản phẩm. Tách các từ khóa bằng cách thêm dấu phẩy
                                                                        <code>,</code>giữa mỗi từ khóa.</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary">
                                                    <span class="indicator-label">Đăng Sản Phẩm</span>
                                                    <span class="indicator-progress">Đang đăng...<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>