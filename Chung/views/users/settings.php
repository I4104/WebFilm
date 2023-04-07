                    <div class="toolbar py-5 py-lg-5" id="kt_toolbar">
						<div id="kt_toolbar_container" class="container-xxl d-flex flex-stack flex-wrap">
							<div class="page-title d-flex flex-column me-3">
								<h1 class="d-flex text-dark fw-bold my-1 fs-3">Cài Đặt Tài Khoản</h1>
								<ul class="breadcrumb breadcrumb-dot fw-semibold text-gray-600 fs-7 my-1">
									<li class="breadcrumb-item text-gray-600">
										<a href="<?php echo $domain ;?>" class="text-gray-600 text-hover-primary">Trang Chủ</a>
									</li>
									<li class="breadcrumb-item text-gray-600">Tài Khoản</li>
									<li class="breadcrumb-item text-gray-500">Cài Đặt</li>
								</ul>
							</div>
						</div>
					</div>
					<div id="kt_content_container" class="d-flex flex-column-fluid align-items-start container-xxl">
						<div class="content flex-row-fluid" id="kt_content">
							<div class="col-xl-4 mb-xl-10">
								<div class="card card-flush h-xl-100">
									<div class="card-header rounded bgi-no-repeat bgi-size-cover bgi-position-y-top bgi-position-x-center align-items-start h-250px" style="background-image:url('<?php echo $domain;?>assets/media/svg/shapes/top-green.png" data-theme="light">
										<h3 class="card-title align-items-start flex-column text-white pt-5">
											<span class="fw-bold fs-2x mb-3">Xin chào, <?php echo $users["realname"]?></span>
											<div class="fs-4 text-white">
												<span class="opacity-75">Thông tin</span>
												<span class="position-relative d-inline-block">
													<span class="link-white opacity-75-hover fw-bold d-block mb-1">Cơ bản</span>
													<span class="position-absolute opacity-50 bottom-0 start-0 border-2 border-body border-bottom w-100"></span>
												</span>
												<span class="opacity-75">về Bạn</span>
											</div>
										</h3>
									</div>
									<div class="card-body mt-n20">
										<div class="mt-n20 position-relative">
											<div class="row g-3 g-lg-6">
												<div class="col-6">
													<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
														<div class="symbol symbol-30px me-5 mb-2">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<img class="h-25px me-3" src="<?php echo $domain;?>assets/media/items/coin-green.png">
																</span>
															</span>
														</div>
														<div class="m-0">
															<span class="text-gray-700 fw-bolder d-block fs-2 lh-1 ls-n1 mb-1" data-kt-countup="true" data-kt-countup-value="<?php echo number_format($users["coin"]) ;?>">0</span>
															<span class="text-gray-500 fw-semibold fs-6">Số Dư Coin</span>
														</div>
													</div>
												</div>
												<div class="col-6">
													<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
														<div class="symbol symbol-30px me-5 mb-2">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path opacity="0.3" d="M18 21.6C16.3 21.6 15 20.3 15 18.6V2.50001C15 2.20001 14.6 1.99996 14.3 2.19996L13 3.59999L11.7 2.3C11.3 1.9 10.7 1.9 10.3 2.3L9 3.59999L7.70001 2.3C7.30001 1.9 6.69999 1.9 6.29999 2.3L5 3.59999L3.70001 2.3C3.50001 2.1 3 2.20001 3 3.50001V18.6C3 20.3 4.3 21.6 6 21.6H18Z" fill="currentColor"/>
                                                                        <path d="M12 12.6H11C10.4 12.6 10 12.2 10 11.6C10 11 10.4 10.6 11 10.6H12C12.6 10.6 13 11 13 11.6C13 12.2 12.6 12.6 12 12.6ZM9 11.6C9 11 8.6 10.6 8 10.6H6C5.4 10.6 5 11 5 11.6C5 12.2 5.4 12.6 6 12.6H8C8.6 12.6 9 12.2 9 11.6ZM9 7.59998C9 6.99998 8.6 6.59998 8 6.59998H6C5.4 6.59998 5 6.99998 5 7.59998C5 8.19998 5.4 8.59998 6 8.59998H8C8.6 8.59998 9 8.19998 9 7.59998ZM13 7.59998C13 6.99998 12.6 6.59998 12 6.59998H11C10.4 6.59998 10 6.99998 10 7.59998C10 8.19998 10.4 8.59998 11 8.59998H12C12.6 8.59998 13 8.19998 13 7.59998ZM13 15.6C13 15 12.6 14.6 12 14.6H10C9.4 14.6 9 15 9 15.6C9 16.2 9.4 16.6 10 16.6H12C12.6 16.6 13 16.2 13 15.6Z" fill="currentColor"/>
                                                                        <path d="M15 18.6C15 20.3 16.3 21.6 18 21.6C19.7 21.6 21 20.3 21 18.6V12.5C21 12.2 20.6 12 20.3 12.2L19 13.6L17.7 12.3C17.3 11.9 16.7 11.9 16.3 12.3L15 13.6V18.6Z" fill="currentColor"/>
                                                                    </svg>
																</span>
															</span>
														</div>
														<div class="m-0">
															<span class="text-gray-700 fw-bolder d-block fs-2 lh-1 ls-n1 mb-1" data-kt-countup="true" data-kt-countup-value="<?php echo number_format($users["point"]) ;?>">0</span>
															<span class="text-gray-500 fw-semibold fs-6">Point Hiện Có</span>
														</div>
													</div>
												</div>
												<div class="col-6">
													<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
														<div class="symbol symbol-30px me-5 mb-8">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M14 18V16H10V18L9 20H15L14 18Z" fill="currentColor"></path>
																		<path opacity="0.3" d="M20 4H17V3C17 2.4 16.6 2 16 2H8C7.4 2 7 2.4 7 3V4H4C3.4 4 3 4.4 3 5V9C3 11.2 4.8 13 7 13C8.2 14.2 8.8 14.8 10 16H14C15.2 14.8 15.8 14.2 17 13C19.2 13 21 11.2 21 9V5C21 4.4 20.6 4 20 4ZM5 9V6H7V11C5.9 11 5 10.1 5 9ZM19 9C19 10.1 18.1 11 17 11V6H19V9ZM17 21V22H7V21C7 20.4 7.4 20 8 20H16C16.6 20 17 20.4 17 21ZM10 9C9.4 9 9 8.6 9 8V5C9 4.4 9.4 4 10 4C10.6 4 11 4.4 11 5V8C11 8.6 10.6 9 10 9ZM10 13C9.4 13 9 12.6 9 12V11C9 10.4 9.4 10 10 10C10.6 10 11 10.4 11 11V12C11 12.6 10.6 13 10 13Z" fill="currentColor"></path>
																	</svg>
																</span>
															</span>
														</div>
														<div class="m-0">
															<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1">4,7</span>
															<span class="text-gray-500 fw-semibold fs-6">Thành Tích</span>
														</div>
													</div>
												</div>
												<div class="col-6">
													<div class="bg-gray-100 bg-opacity-70 rounded-2 px-6 py-5">
														<div class="symbol symbol-30px me-5 mb-8">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-1 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z" fill="currentColor"></path>
																		<path d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z" fill="currentColor"></path>
																	</svg>
																</span>
																
															</span>
														</div>
														<div class="m-0">
															<span class="text-gray-700 fw-bolder d-block fs-2qx lh-1 ls-n1 mb-1" data-kt-countup="true" data-kt-countup-value="<?php echo time_join($users["join_at"]) ;?>">0</span>
															<span class="text-gray-500 fw-semibold fs-6">Ngày Tham Gia</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="card mb-5 mb-xl-10">
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Cài Đặt Hồ Sơ</h3>
									</div>
								</div>
								<div id="kt_account_settings_profile_details" class="collapse show">
								    <form class="form form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" id="kt_account_profile_settings" method="POST">
										<div class="card-body border-top p-9">
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Ảnh Đại Diện</label>
												<div class="col-lg-8">
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('<?php echo $domain."assets/media/svg/avatars/blank.svg" ;?>')">
														<div class="image-input-wrapper w-125px h-125px" id="avata64" style="background-image: url('<?php echo $ICrypt->parseToken($users["image_avatar"]); ?>')"></div>
														<label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-kt-initialized="1">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input type="file" name="avatar" accept=".png, .jpg, .jpeg">
															<input type="hidden" name="avatar_remove">
														</label>
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-kt-initialized="1">
															<i class="bi bi-x fs-2"></i>
														</span>
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-kt-initialized="1">
															<i class="bi bi-x fs-2"></i>
														</span>
													</div>
													<div class="form-text">Các loại tệp được phép: png, jpg, jpeg.</div>
												</div>
											</div>
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Họ Và Tên</label>
												<div class="col-lg-8">
													<div class="row">
														<div class="col-lg-12 fv-row fv-plugins-icon-container">
															<input type="text" name="realname" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Tên của bạn" value="<?php echo $users["realname"]?>">
														<div class="fv-plugins-message-container invalid-feedback"></div></div>
													</div>
												</div>
											</div>
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Số Điện Thoại</span>
													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" aria-label="Số điện thoại phải đang hoạt động" data-kt-initialized="1"></i>
												</label>
												<div class="col-lg-8 fv-row fv-plugins-icon-container">
													<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Số Điện Thoại Của Bạn" value="<?php echo $users["phone"]?>">
												<div class="fv-plugins-message-container invalid-feedback"></div></div>
											</div>
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span class="required">Quốc Gia</span>
													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Country of origination"></i>
												</label>
												<div class="col-lg-8 fv-row">
													<select name="country" aria-label="Chọn Quốc Gia" data-control="select2" data-placeholder="Chọn Quốc Gia" class="form-select form-select-solid form-select-lg fw-semibold">
														<option value="">Chọn Quốc Gia</option>
														<option data-kt-flag="flags/afghanistan.svg" value="AF">Afghanistan</option>
														<option data-kt-flag="flags/aland-islands.svg" value="AX">Aland Islands</option>
														<option data-kt-flag="flags/albania.svg" value="AL">Albania</option>
														<option data-kt-flag="flags/algeria.svg" value="DZ">Algeria</option>
														<option data-kt-flag="flags/american-samoa.svg" value="AS">American Samoa</option>
														<option data-kt-flag="flags/andorra.svg" value="AD">Andorra</option>
														<option data-kt-flag="flags/angola.svg" value="AO">Angola</option>
														<option data-kt-flag="flags/anguilla.svg" value="AI">Anguilla</option>
														<option data-kt-flag="flags/antigua-and-barbuda.svg" value="AG">Antigua and Barbuda</option>
														<option data-kt-flag="flags/argentina.svg" value="AR">Argentina</option>
														<option data-kt-flag="flags/armenia.svg" value="AM">Armenia</option>
														<option data-kt-flag="flags/aruba.svg" value="AW">Aruba</option>
														<option data-kt-flag="flags/australia.svg" value="AU">Australia</option>
														<option data-kt-flag="flags/austria.svg" value="AT">Austria</option>
														<option data-kt-flag="flags/azerbaijan.svg" value="AZ">Azerbaijan</option>
														<option data-kt-flag="flags/bahamas.svg" value="BS">Bahamas</option>
														<option data-kt-flag="flags/bahrain.svg" value="BH">Bahrain</option>
														<option data-kt-flag="flags/bangladesh.svg" value="BD">Bangladesh</option>
														<option data-kt-flag="flags/barbados.svg" value="BB">Barbados</option>
														<option data-kt-flag="flags/belarus.svg" value="BY">Belarus</option>
														<option data-kt-flag="flags/belgium.svg" value="BE">Belgium</option>
														<option data-kt-flag="flags/belize.svg" value="BZ">Belize</option>
														<option data-kt-flag="flags/benin.svg" value="BJ">Benin</option>
														<option data-kt-flag="flags/bermuda.svg" value="BM">Bermuda</option>
														<option data-kt-flag="flags/bhutan.svg" value="BT">Bhutan</option>
														<option data-kt-flag="flags/bolivia.svg" value="BO">Bolivia, Plurinational State of</option>
														<option data-kt-flag="flags/bonaire.svg" value="BQ">Bonaire, Sint Eustatius and Saba</option>
														<option data-kt-flag="flags/bosnia-and-herzegovina.svg" value="BA">Bosnia and Herzegovina</option>
														<option data-kt-flag="flags/botswana.svg" value="BW">Botswana</option>
														<option data-kt-flag="flags/brazil.svg" value="BR">Brazil</option>
														<option data-kt-flag="flags/british-indian-ocean-territory.svg" value="IO">British Indian Ocean Territory</option>
														<option data-kt-flag="flags/brunei.svg" value="BN">Brunei Darussalam</option>
														<option data-kt-flag="flags/bulgaria.svg" value="BG">Bulgaria</option>
														<option data-kt-flag="flags/burkina-faso.svg" value="BF">Burkina Faso</option>
														<option data-kt-flag="flags/burundi.svg" value="BI">Burundi</option>
														<option data-kt-flag="flags/cambodia.svg" value="KH">Cambodia</option>
														<option data-kt-flag="flags/cameroon.svg" value="CM">Cameroon</option>
														<option data-kt-flag="flags/canada.svg" value="CA">Canada</option>
														<option data-kt-flag="flags/cape-verde.svg" value="CV">Cape Verde</option>
														<option data-kt-flag="flags/cayman-islands.svg" value="KY">Cayman Islands</option>
														<option data-kt-flag="flags/central-african-republic.svg" value="CF">Central African Republic</option>
														<option data-kt-flag="flags/chad.svg" value="TD">Chad</option>
														<option data-kt-flag="flags/chile.svg" value="CL">Chile</option>
														<option data-kt-flag="flags/china.svg" value="CN">China</option>
														<option data-kt-flag="flags/christmas-island.svg" value="CX">Christmas Island</option>
														<option data-kt-flag="flags/cocos-island.svg" value="CC">Cocos (Keeling) Islands</option>
														<option data-kt-flag="flags/colombia.svg" value="CO">Colombia</option>
														<option data-kt-flag="flags/comoros.svg" value="KM">Comoros</option>
														<option data-kt-flag="flags/cook-islands.svg" value="CK">Cook Islands</option>
														<option data-kt-flag="flags/costa-rica.svg" value="CR">Costa Rica</option>
														<option data-kt-flag="flags/ivory-coast.svg" value="CI">Côte d'Ivoire</option>
														<option data-kt-flag="flags/croatia.svg" value="HR">Croatia</option>
														<option data-kt-flag="flags/cuba.svg" value="CU">Cuba</option>
														<option data-kt-flag="flags/curacao.svg" value="CW">Curaçao</option>
														<option data-kt-flag="flags/czech-republic.svg" value="CZ">Czech Republic</option>
														<option data-kt-flag="flags/denmark.svg" value="DK">Denmark</option>
														<option data-kt-flag="flags/djibouti.svg" value="DJ">Djibouti</option>
														<option data-kt-flag="flags/dominica.svg" value="DM">Dominica</option>
														<option data-kt-flag="flags/dominican-republic.svg" value="DO">Dominican Republic</option>
														<option data-kt-flag="flags/ecuador.svg" value="EC">Ecuador</option>
														<option data-kt-flag="flags/egypt.svg" value="EG">Egypt</option>
														<option data-kt-flag="flags/el-salvador.svg" value="SV">El Salvador</option>
														<option data-kt-flag="flags/equatorial-guinea.svg" value="GQ">Equatorial Guinea</option>
														<option data-kt-flag="flags/eritrea.svg" value="ER">Eritrea</option>
														<option data-kt-flag="flags/estonia.svg" value="EE">Estonia</option>
														<option data-kt-flag="flags/ethiopia.svg" value="ET">Ethiopia</option>
														<option data-kt-flag="flags/falkland-islands.svg" value="FK">Falkland Islands (Malvinas)</option>
														<option data-kt-flag="flags/fiji.svg" value="FJ">Fiji</option>
														<option data-kt-flag="flags/finland.svg" value="FI">Finland</option>
														<option data-kt-flag="flags/france.svg" value="FR">France</option>
														<option data-kt-flag="flags/french-polynesia.svg" value="PF">French Polynesia</option>
														<option data-kt-flag="flags/gabon.svg" value="GA">Gabon</option>
														<option data-kt-flag="flags/gambia.svg" value="GM">Gambia</option>
														<option data-kt-flag="flags/georgia.svg" value="GE">Georgia</option>
														<option data-kt-flag="flags/germany.svg" value="DE">Germany</option>
														<option data-kt-flag="flags/ghana.svg" value="GH">Ghana</option>
														<option data-kt-flag="flags/gibraltar.svg" value="GI">Gibraltar</option>
														<option data-kt-flag="flags/greece.svg" value="GR">Greece</option>
														<option data-kt-flag="flags/greenland.svg" value="GL">Greenland</option>
														<option data-kt-flag="flags/grenada.svg" value="GD">Grenada</option>
														<option data-kt-flag="flags/guam.svg" value="GU">Guam</option>
														<option data-kt-flag="flags/guatemala.svg" value="GT">Guatemala</option>
														<option data-kt-flag="flags/guernsey.svg" value="GG">Guernsey</option>
														<option data-kt-flag="flags/guinea.svg" value="GN">Guinea</option>
														<option data-kt-flag="flags/guinea-bissau.svg" value="GW">Guinea-Bissau</option>
														<option data-kt-flag="flags/haiti.svg" value="HT">Haiti</option>
														<option data-kt-flag="flags/vatican-city.svg" value="VA">Holy See (Vatican City State)</option>
														<option data-kt-flag="flags/honduras.svg" value="HN">Honduras</option>
														<option data-kt-flag="flags/hong-kong.svg" value="HK">Hong Kong</option>
														<option data-kt-flag="flags/hungary.svg" value="HU">Hungary</option>
														<option data-kt-flag="flags/iceland.svg" value="IS">Iceland</option>
														<option data-kt-flag="flags/india.svg" value="IN">India</option>
														<option data-kt-flag="flags/indonesia.svg" value="ID">Indonesia</option>
														<option data-kt-flag="flags/iran.svg" value="IR">Iran, Islamic Republic of</option>
														<option data-kt-flag="flags/iraq.svg" value="IQ">Iraq</option>
														<option data-kt-flag="flags/ireland.svg" value="IE">Ireland</option>
														<option data-kt-flag="flags/isle-of-man.svg" value="IM">Isle of Man</option>
														<option data-kt-flag="flags/israel.svg" value="IL">Israel</option>
														<option data-kt-flag="flags/italy.svg" value="IT">Italy</option>
														<option data-kt-flag="flags/jamaica.svg" value="JM">Jamaica</option>
														<option data-kt-flag="flags/japan.svg" value="JP">Japan</option>
														<option data-kt-flag="flags/jersey.svg" value="JE">Jersey</option>
														<option data-kt-flag="flags/jordan.svg" value="JO">Jordan</option>
														<option data-kt-flag="flags/kazakhstan.svg" value="KZ">Kazakhstan</option>
														<option data-kt-flag="flags/kenya.svg" value="KE">Kenya</option>
														<option data-kt-flag="flags/kiribati.svg" value="KI">Kiribati</option>
														<option data-kt-flag="flags/north-korea.svg" value="KP">Korea, Democratic People's Republic of</option>
														<option data-kt-flag="flags/kuwait.svg" value="KW">Kuwait</option>
														<option data-kt-flag="flags/kyrgyzstan.svg" value="KG">Kyrgyzstan</option>
														<option data-kt-flag="flags/laos.svg" value="LA">Lao People's Democratic Republic</option>
														<option data-kt-flag="flags/latvia.svg" value="LV">Latvia</option>
														<option data-kt-flag="flags/lebanon.svg" value="LB">Lebanon</option>
														<option data-kt-flag="flags/lesotho.svg" value="LS">Lesotho</option>
														<option data-kt-flag="flags/liberia.svg" value="LR">Liberia</option>
														<option data-kt-flag="flags/libya.svg" value="LY">Libya</option>
														<option data-kt-flag="flags/liechtenstein.svg" value="LI">Liechtenstein</option>
														<option data-kt-flag="flags/lithuania.svg" value="LT">Lithuania</option>
														<option data-kt-flag="flags/luxembourg.svg" value="LU">Luxembourg</option>
														<option data-kt-flag="flags/macao.svg" value="MO">Macao</option>
														<option data-kt-flag="flags/madagascar.svg" value="MG">Madagascar</option>
														<option data-kt-flag="flags/malawi.svg" value="MW">Malawi</option>
														<option data-kt-flag="flags/malaysia.svg" value="MY">Malaysia</option>
														<option data-kt-flag="flags/maldives.svg" value="MV">Maldives</option>
														<option data-kt-flag="flags/mali.svg" value="ML">Mali</option>
														<option data-kt-flag="flags/malta.svg" value="MT">Malta</option>
														<option data-kt-flag="flags/marshall-island.svg" value="MH">Marshall Islands</option>
														<option data-kt-flag="flags/martinique.svg" value="MQ">Martinique</option>
														<option data-kt-flag="flags/mauritania.svg" value="MR">Mauritania</option>
														<option data-kt-flag="flags/mauritius.svg" value="MU">Mauritius</option>
														<option data-kt-flag="flags/mexico.svg" value="MX">Mexico</option>
														<option data-kt-flag="flags/micronesia.svg" value="FM">Micronesia, Federated States of</option>
														<option data-kt-flag="flags/moldova.svg" value="MD">Moldova, Republic of</option>
														<option data-kt-flag="flags/monaco.svg" value="MC">Monaco</option>
														<option data-kt-flag="flags/mongolia.svg" value="MN">Mongolia</option>
														<option data-kt-flag="flags/montenegro.svg" value="ME">Montenegro</option>
														<option data-kt-flag="flags/montserrat.svg" value="MS">Montserrat</option>
														<option data-kt-flag="flags/morocco.svg" value="MA">Morocco</option>
														<option data-kt-flag="flags/mozambique.svg" value="MZ">Mozambique</option>
														<option data-kt-flag="flags/myanmar.svg" value="MM">Myanmar</option>
														<option data-kt-flag="flags/namibia.svg" value="NA">Namibia</option>
														<option data-kt-flag="flags/nauru.svg" value="NR">Nauru</option>
														<option data-kt-flag="flags/nepal.svg" value="NP">Nepal</option>
														<option data-kt-flag="flags/netherlands.svg" value="NL">Netherlands</option>
														<option data-kt-flag="flags/new-zealand.svg" value="NZ">New Zealand</option>
														<option data-kt-flag="flags/nicaragua.svg" value="NI">Nicaragua</option>
														<option data-kt-flag="flags/niger.svg" value="NE">Niger</option>
														<option data-kt-flag="flags/nigeria.svg" value="NG">Nigeria</option>
														<option data-kt-flag="flags/niue.svg" value="NU">Niue</option>
														<option data-kt-flag="flags/norfolk-island.svg" value="NF">Norfolk Island</option>
														<option data-kt-flag="flags/northern-mariana-islands.svg" value="MP">Northern Mariana Islands</option>
														<option data-kt-flag="flags/norway.svg" value="NO">Norway</option>
														<option data-kt-flag="flags/oman.svg" value="OM">Oman</option>
														<option data-kt-flag="flags/pakistan.svg" value="PK">Pakistan</option>
														<option data-kt-flag="flags/palau.svg" value="PW">Palau</option>
														<option data-kt-flag="flags/palestine.svg" value="PS">Palestinian Territory, Occupied</option>
														<option data-kt-flag="flags/panama.svg" value="PA">Panama</option>
														<option data-kt-flag="flags/papua-new-guinea.svg" value="PG">Papua New Guinea</option>
														<option data-kt-flag="flags/paraguay.svg" value="PY">Paraguay</option>
														<option data-kt-flag="flags/peru.svg" value="PE">Peru</option>
														<option data-kt-flag="flags/philippines.svg" value="PH">Philippines</option>
														<option data-kt-flag="flags/poland.svg" value="PL">Poland</option>
														<option data-kt-flag="flags/portugal.svg" value="PT">Portugal</option>
														<option data-kt-flag="flags/puerto-rico.svg" value="PR">Puerto Rico</option>
														<option data-kt-flag="flags/qatar.svg" value="QA">Qatar</option>
														<option data-kt-flag="flags/romania.svg" value="RO">Romania</option>
														<option data-kt-flag="flags/russia.svg" value="RU">Russian Federation</option>
														<option data-kt-flag="flags/rwanda.svg" value="RW">Rwanda</option>
														<option data-kt-flag="flags/st-barts.svg" value="BL">Saint Barthélemy</option>
														<option data-kt-flag="flags/saint-kitts-and-nevis.svg" value="KN">Saint Kitts and Nevis</option>
														<option data-kt-flag="flags/st-lucia.svg" value="LC">Saint Lucia</option>
														<option data-kt-flag="flags/sint-maarten.svg" value="MF">Saint Martin (French part)</option>
														<option data-kt-flag="flags/st-vincent-and-the-grenadines.svg" value="VC">Saint Vincent and the Grenadines</option>
														<option data-kt-flag="flags/samoa.svg" value="WS">Samoa</option>
														<option data-kt-flag="flags/san-marino.svg" value="SM">San Marino</option>
														<option data-kt-flag="flags/sao-tome-and-prince.svg" value="ST">Sao Tome and Principe</option>
														<option data-kt-flag="flags/saudi-arabia.svg" value="SA">Saudi Arabia</option>
														<option data-kt-flag="flags/senegal.svg" value="SN">Senegal</option>
														<option data-kt-flag="flags/serbia.svg" value="RS">Serbia</option>
														<option data-kt-flag="flags/seychelles.svg" value="SC">Seychelles</option>
														<option data-kt-flag="flags/sierra-leone.svg" value="SL">Sierra Leone</option>
														<option data-kt-flag="flags/singapore.svg" value="SG">Singapore</option>
														<option data-kt-flag="flags/sint-maarten.svg" value="SX">Sint Maarten (Dutch part)</option>
														<option data-kt-flag="flags/slovakia.svg" value="SK">Slovakia</option>
														<option data-kt-flag="flags/slovenia.svg" value="SI">Slovenia</option>
														<option data-kt-flag="flags/solomon-islands.svg" value="SB">Solomon Islands</option>
														<option data-kt-flag="flags/somalia.svg" value="SO">Somalia</option>
														<option data-kt-flag="flags/south-africa.svg" value="ZA">South Africa</option>
														<option data-kt-flag="flags/south-korea.svg" value="KR">South Korea</option>
														<option data-kt-flag="flags/south-sudan.svg" value="SS">South Sudan</option>
														<option data-kt-flag="flags/spain.svg" value="ES">Spain</option>
														<option data-kt-flag="flags/sri-lanka.svg" value="LK">Sri Lanka</option>
														<option data-kt-flag="flags/sudan.svg" value="SD">Sudan</option>
														<option data-kt-flag="flags/suriname.svg" value="SR">Suriname</option>
														<option data-kt-flag="flags/swaziland.svg" value="SZ">Swaziland</option>
														<option data-kt-flag="flags/sweden.svg" value="SE">Sweden</option>
														<option data-kt-flag="flags/switzerland.svg" value="CH">Switzerland</option>
														<option data-kt-flag="flags/syria.svg" value="SY">Syrian Arab Republic</option>
														<option data-kt-flag="flags/taiwan.svg" value="TW">Taiwan, Province of China</option>
														<option data-kt-flag="flags/tajikistan.svg" value="TJ">Tajikistan</option>
														<option data-kt-flag="flags/tanzania.svg" value="TZ">Tanzania, United Republic of</option>
														<option data-kt-flag="flags/thailand.svg" value="TH">Thailand</option>
														<option data-kt-flag="flags/togo.svg" value="TG">Togo</option>
														<option data-kt-flag="flags/tokelau.svg" value="TK">Tokelau</option>
														<option data-kt-flag="flags/tonga.svg" value="TO">Tonga</option>
														<option data-kt-flag="flags/trinidad-and-tobago.svg" value="TT">Trinidad and Tobago</option>
														<option data-kt-flag="flags/tunisia.svg" value="TN">Tunisia</option>
														<option data-kt-flag="flags/turkey.svg" value="TR">Turkey</option>
														<option data-kt-flag="flags/turkmenistan.svg" value="TM">Turkmenistan</option>
														<option data-kt-flag="flags/turks-and-caicos.svg" value="TC">Turks and Caicos Islands</option>
														<option data-kt-flag="flags/tuvalu.svg" value="TV">Tuvalu</option>
														<option data-kt-flag="flags/uganda.svg" value="UG">Uganda</option>
														<option data-kt-flag="flags/ukraine.svg" value="UA">Ukraine</option>
														<option data-kt-flag="flags/united-arab-emirates.svg" value="AE">United Arab Emirates</option>
														<option data-kt-flag="flags/united-kingdom.svg" value="GB">United Kingdom</option>
														<option data-kt-flag="flags/united-states.svg" value="US">United States</option>
														<option data-kt-flag="flags/uruguay.svg" value="UY">Uruguay</option>
														<option data-kt-flag="flags/uzbekistan.svg" value="UZ">Uzbekistan</option>
														<option data-kt-flag="flags/vanuatu.svg" value="VU">Vanuatu</option>
														<option data-kt-flag="flags/venezuela.svg" value="VE">Venezuela, Bolivarian Republic of</option>
														<option data-kt-flag="flags/vietnam.svg" value="VN">Vietnam</option>
														<option data-kt-flag="flags/virgin-islands.svg" value="VI">Virgin Islands</option>
														<option data-kt-flag="flags/yemen.svg" value="YE">Yemen</option>
														<option data-kt-flag="flags/zambia.svg" value="ZM">Zambia</option>
														<option data-kt-flag="flags/zimbabwe.svg" value="ZW">Zimbabwe</option>
													</select>
												</div>
											</div>
											<div class="row mb-0">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Hồ Sơ Công Khai</label>
												<div class="col-lg-8 d-flex align-items-center">
													<div class="form-check form-check-solid form-switch fv-row">
														<input class="form-check-input w-45px h-30px" type="checkbox" id="allowmarketing" checked="checked">
														<label class="form-check-label" for="allowmarketing"></label>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											<button type="submit" class="btn btn-primary">Cập Nhật</button>
										</div>
									</form>
								</div>
							</div>
							
							<div class="card mb-5 mb-xl-10">
								<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
									<div class="card-title m-0">
										<h3 class="fw-bold m-0">Phương Thức Đăng Nhập</h3>
									</div>
								</div>
								<div id="kt_account_settings_signin_method" class="collapse show">
									<div class="card-body border-top p-9">
										<div class="d-flex flex-wrap align-items-center">
											<div id="kt_signin_email">
												<div class="fs-6 fw-bold mb-1">Địa Chỉ Email</div>
												<div class="fw-semibold text-gray-600"><?php echo $users["email"] ;?></div>
											</div>
											<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
												<form id="knsea_signin_change_email" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
													<div class="row mb-6">
														<div class="col-lg-6 mb-4 mb-lg-0">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="emailaddress" class="form-label fs-6 fw-bold mb-3">Email Mới</label>
																<input type="email" class="form-control form-control-lg form-control-solid" id="email" placeholder="Email Address" name="email" value="<?php echo $users["email"] ;?>">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
														<div class="col-lg-6">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Xác Thực Mật Khẩu</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="password" id="confirmemailpassword">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
													</div>
													<div class="d-flex">
														<button id="kt_signin_submit" type="submit" class="btn btn-primary me-2 px-6">Cập Nhật Email</button>
														<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Hủy</button>
													</div>
												</form>
											</div>
											<div id="kt_signin_email_button" class="ms-auto">
												<button class="btn btn-light btn-active-light-primary">Đổi Email</button>
											</div>
										</div>
										<div class="separator separator-dashed my-6"></div>
										<div class="d-flex flex-wrap align-items-center mb-10">
											<div id="kt_signin_password">
												<div class="fs-6 fw-bold mb-1">Mật Khẩu</div>
												<div class="fw-semibold text-gray-600">************</div>
											</div>
											<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
												<form id="knsea_signin_change_password" class="form fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate">
													<div class="row mb-1">
														<div class="col-lg-4">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Mật Khẩu Hiện Tại</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="old" id="currentpassword">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
														<div class="col-lg-4">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="newpassword" class="form-label fs-6 fw-bold mb-3">Mật Khẩu Mới</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="new" id="newpassword">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
														<div class="col-lg-4">
															<div class="fv-row mb-0 fv-plugins-icon-container">
																<label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Nhập Lại Mật Khẩu Mới</label>
																<input type="password" class="form-control form-control-lg form-control-solid" name="renew" id="confirmpassword">
															<div class="fv-plugins-message-container invalid-feedback"></div></div>
														</div>
													</div>
													<div class="form-text mb-5">Sử dụng 8 ký tự trở lên và kết hợp của các chữ cái, số và ký tự.</div>
													<div class="d-flex">
														<button id="kt_password_submit" type="submit" class="btn btn-primary me-2 px-6">Cập Nhật Mật Khẩu</button>
														<button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Hủy</button>
													</div>
												<div></div></form>
											</div>
											<div id="kt_signin_password_button" class="ms-auto">
												<button class="btn btn-light btn-active-light-primary">Đổi Mật Khẩu</button>
											</div>
										</div>
										<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
											<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor"></path>
													<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor"></path>
												</svg>
											</span>
											<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
												<div class="mb-3 mb-md-0 fw-semibold">
													<h4 class="text-gray-900 fw-bold">Bảo Mật Tài Khoản Của Bạn</h4>
													<div class="fs-6 text-gray-700 pe-7">Xác thực hai yếu tố bổ sung thêm một lớp bảo mật cho tài khoản của bạn. Để đăng nhập, ngoài ra, bạn sẽ cần cung cấp mã gồm 6 chữ số</div>
												</div>
												<a href="#" class="btn btn-primary px-6 align-self-center text-nowrap" data-bs-toggle="modal" data-bs-target="#kt_modal_two_factor_authentication">Kích Hoạt</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="modal fade" id="kt_modal_two_factor_authentication" tabindex="-1" aria-hidden="true">
            			<div class="modal-dialog modal-dialog-centered mw-650px">
            				<div class="modal-content">
            					<div class="modal-header flex-stack">
            						<h2>Chọn Một Phương Pháp Bảo Mật 2 Bước</h2>
            						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
            							<span class="svg-icon svg-icon-1">
            								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
            									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
            								</svg>
            							</span>
            						</div>
            					</div>
            					<div class="modal-body scroll-y pt-10 pb-15 px-lg-17">
            						<div data-kt-element="options">
            							<p class="text-muted fs-5 fw-semibold mb-10">Ngoài tên người dùng và mật khẩu, bạn sẽ phải nhập mã (được gửi qua ứng dụng hoặc SMS) để đăng nhập vào tài khoản của mình.</p>
            							<div class="pb-10">
            								<input type="radio" class="btn-check" name="auth_option" value="apps" checked="checked" id="kt_modal_two_factor_authentication_option_1" />
            								<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center mb-5" for="kt_modal_two_factor_authentication_option_1">
            									<span class="svg-icon svg-icon-4x me-4">
            										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            											<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
            											<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
            										</svg>
            									</span>
            									<span class="d-block fw-semibold text-start">
            										<span class="text-dark fw-bold d-block fs-3">Authenticator Apps</span>
            										<span class="text-muted fw-semibold fs-6">Get codes from an app like Google Authenticator, Microsoft Authenticator, Authy or 1Password.</span>
            									</span>
            								</label>
            								<input type="radio" class="btn-check" name="auth_option" value="sms" id="kt_modal_two_factor_authentication_option_2" />
            								<label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center" for="kt_modal_two_factor_authentication_option_2">
            									<span class="svg-icon svg-icon-4x me-4">
            										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            											<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
            											<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
            										</svg>
            									</span>
            									<span class="d-block fw-semibold text-start">
            										<span class="text-dark fw-bold d-block fs-3">Email Code</span>
            										<span class="text-muted fw-semibold fs-6">Chúng tôi sẽ gửi mã qua Email cho banj nếu bạn sử dụng phương pháp đăng nhập 2 bước này.</span>
            									</span>
            								</label>
            							</div>
            							<button class="btn btn-primary w-100" data-kt-element="options-select">Continue</button>
            						</div>
            						<div class="d-none" data-kt-element="apps">
            							<h3 class="text-dark fw-bold mb-7">Authenticator Apps</h3>
            							<div class="text-gray-500 fw-semibold fs-6 mb-10">Using an authenticator app like
                							<a href="https://support.google.com/accounts/answer/1066447?hl=en" target="_blank">Google Authenticator</a>,
                							<a href="https://www.microsoft.com/en-us/account/authenticator" target="_blank">Microsoft Authenticator</a>,
                							<a href="https://authy.com/download/" target="_blank">Authy</a>, or
                							<a href="https://support.1password.com/one-time-passwords/" target="_blank">1Password</a>, scan the QR code. It will generate a 6 digit code for you to enter below.
                							<div class="pt-5 text-center">
                								<img src="assets/media/misc/qr.png" alt="" class="mw-150px" />
                							</div>
            							</div>
            							<div class="notice d-flex bg-light-warning rounded border-warning border border-dashed mb-10 p-6">
            								<span class="svg-icon svg-icon-2tx svg-icon-warning me-4">
            									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            										<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="currentColor" />
            										<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="currentColor" />
            										<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="currentColor" />
            									</svg>
            								</span>
            								<div class="d-flex flex-stack flex-grow-1">
            									<div class="fw-semibold">
            										<div class="fs-6 text-gray-700">If you having trouble using the QR code, select manual entry on your app, and enter your username and the code:
            										<div class="fw-bold text-dark pt-2">KBSS3QDAAFUMCBY63YCKI5WSSVACUMPN</div></div>
            									</div>
            								</div>
            							</div>
            							<form data-kt-element="apps-form" class="form" action="#">
            								<div class="mb-10 fv-row">
            									<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Enter authentication code" name="code" />
            								</div>
            								<div class="d-flex flex-center">
            									<button type="reset" data-kt-element="apps-cancel" class="btn btn-light me-3">Cancel</button>
            									<button type="submit" data-kt-element="apps-submit" class="btn btn-primary">
            										<span class="indicator-label">Submit</span>
            										<span class="indicator-progress">Please wait...
            										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            									</button>
            								</div>
            							</form>
            						</div>
            						<div class="d-none" data-kt-element="sms">
            							<h3 class="text-dark fw-bold fs-3 mb-5">SMS: Verify Your Mobile Number</h3>
            							<div class="text-muted fw-semibold mb-10">Enter your mobile phone number with country code and we will send you a verification code upon request.</div>
            							<form data-kt-element="sms-form" class="form" action="#">
            								<div class="mb-10 fv-row">
            									<input type="text" class="form-control form-control-lg form-control-solid" placeholder="Mobile number with country code..." name="mobile" />
            								</div>
            								<div class="d-flex flex-center">
            									<button type="reset" data-kt-element="sms-cancel" class="btn btn-light me-3">Cancel</button>
            									<button type="submit" data-kt-element="sms-submit" class="btn btn-primary">
            										<span class="indicator-label">Submit</span>
            										<span class="indicator-progress">Please wait...
            										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
            									</button>
            								</div>
            							</form>
            						</div>
            					</div>
            				</div>
            			</div>
            		</div>
				</div>
			</div>