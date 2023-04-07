                    <div class="footer border-0 bg-body py-4 d-flex flex-lg-column" id="kt_footer">
						<div class="container-xxl d-flex flex-column flex-md-row align-items-center justify-content-between">
							<div class="text-dark order-2 order-md-1">
								<span class="text-muted fw-semibold me-1">Copyrights &copy; 2022</span>
								<a href="https://knsea.com/" target="_blank" class="text-gray-800 text-hover-primary">KNSea.com</a>
							</div>
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="/" target="_blank" class="menu-link px-2">About</a>
								</li>
								<li class="menu-item">
									<a href="/" target="_blank" class="menu-link px-2">Support</a>
								</li>
								<li class="menu-item">
									<a href="/" target="_blank" class="menu-link px-2">Purchase</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
		</div>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
		<script src="<?php echo $domain;?>assets/plugins/global/plugins.bundle.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/scripts.bundle.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/plugins/custom/datatables/datatables.bundle.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/plugins/custom/swiper/swiper-bundle.min.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/custom/apps/projects/users/users.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/custom/pages/pricing/general.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/widgets.bundle.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/custom/widgets.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/custom/apps/chat/chat.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/custom/account/settings/signin-methods.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/custom/account/settings/profile-details.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/custom/account/settings/deactivate-account.js?sea=<?=time();?>"></script>
		<script src="<?php echo $domain;?>assets/js/custom/pages/user-profile/followers.js?sea=<?=time();?>"></script>
        <script src="<?php echo $domain;?>assets/js/custom/apps/projects/list/list.js?sea=<?=time();?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>
        <script>
        $(document).ready(function(){
            $('.responsive').slick({
                dots: false,
                infinite: false,
                speed: 300,
                slidesToShow: 8,
                slidesToScroll: 8,
                responsive: [
                    {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 5,
                            slidesToScroll: 5,
                            infinite: true,
                            dots: true
                        }
                    },
                    {
                    breakpoint: 600,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3
                        }
                    }
                ]
            });
            
        });
        </script>
	</body>
</html>