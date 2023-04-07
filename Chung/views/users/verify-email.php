                <div class="d-flex flex-column flex-center text-center p-10">
					<div class="card card-flush w-lg-650px py-5">
						<div class="card-body py-15 py-lg-20">
							<div class="mb-14">
								<a href="../../demo11/dist/index.html" class="">
									<img alt="Logo" src="assets/media/logos/custom-2.svg" class="h-40px">
								</a>
							</div>
							<h1 class="fw-bolder text-gray-900 mb-5">Xin chào <?php echo $users["realname"]; ?></h1>
							<div class="fs-6 mb-8">
							    <span class="fw-semibold">
							        Chúng tôi đã gửi một email xác nhận tới địa chỉ: <span class="text-success"><?php echo $users["email"]; ?></span>
							        <br>vui lòng truy cập và xác nhận tài khoản trước: <span class="text-danger"><?php echo date("H:i d/m/Y", $users["reg_at"] + 3600); ?></span>
							        <br>Nếu sau thời gian này tài khoản của bạn chưa được xác minh, chúng tôi buộc phải xóa tài khoản của bạn!
							    </span>
							    <br><hr>
								<span class="fw-semibold text-gray-500">Không nhận được email?</span>
								<a href="javascript: void();" class="link-primary fw-bold">Gửi Lại</a>
							</div>
							<div class="mb-0">
								<img src="assets/media/auth/please-verify-your-email.png" class="mw-100 mh-300px theme-light-show" alt="">
								<img src="assets/media/auth/please-verify-your-email-dark.png" class="mw-100 mh-300px theme-dark-show" alt="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>