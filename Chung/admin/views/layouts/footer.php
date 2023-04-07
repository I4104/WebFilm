                        <div id="kt_app_footer" class="app-footer">
							<div class="app-container container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3">
								<div class="text-dark order-2 order-md-1">
									<span class="text-muted fw-semibold me-1">Copyright &copy; 2022 </span>
									<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">KNSea</a>
								</div>
								<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
									<li class="menu-item">
										<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
									</li>
									<li class="menu-item">
										<a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a>
									</li>
									<li class="menu-item">
										<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
									</li>
								</ul>
							</div>
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
		<script src="<?php echo $domain;?>admin/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?php echo $domain;?>admin/assets/js/scripts.bundle.js"></script>
		<script src="<?php echo $domain;?>admin/assets/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="<?php echo $domain;?>admin/assets/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
        <script src="<?php echo $domain;?>admin/assets/js/custom/apps/ecommerce/catalog/save-product.js"></script>
		<script src="<?php echo $domain;?>admin/assets/js/widgets.bundle.js"></script>
		<script src="<?php echo $domain;?>admin/assets/js/custom/widgets.js"></script>
		<script src="<?php echo $domain;?>admin/assets/js/custom/apps/chat/chat.js"></script>
		<script src="<?php echo $domain;?>admin/assets/js/custom/utilities/modals/upgrade-plan.js"></script>
		<script src="<?php echo $domain;?>admin/assets/js/custom/utilities/modals/create-app.js"></script>
		<script src="<?php echo $domain;?>admin/assets/js/custom/utilities/modals/new-target.js"></script>
		<script src="<?php echo $domain;?>admin/assets/js/custom/utilities/modals/users-search.js"></script>
		<script>
		"use strict";
        var KTDatatablesExample = function () {
            var table;
            var datatable;
            // Private functions
            var initDatatable = function () {

                // Init datatable --- more info on datatables: https://datatables.net/manual/
                datatable = $(table).DataTable({
                    "info": true,
                    'order': [],
                    'pageLength': 10,
                });
            }
        
            // Search Datatable --- official docs reference: https://datatables.net/reference/api/search()
            var handleSearchDatatable = () => {
                const filterSearch = document.querySelector('[data-kt-filter="search"]');
                filterSearch.addEventListener('keyup', function (e) {
                    datatable.search(e.target.value).draw();
                });
            }
        
            // Public methods
            return {
                init: function () {
                    table = document.querySelector('#datatable');
        
                    if ( !table ) {
                        return;
                    }
        
                    initDatatable();
                    handleSearchDatatable();
                }
            };
        }();
        
        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTDatatablesExample.init();
        });
        </script>
    </body>
</html>