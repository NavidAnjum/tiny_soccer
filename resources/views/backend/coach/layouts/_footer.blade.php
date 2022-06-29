<!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
		
        <!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->

    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="/assets/backend/vendor/global/global.min.js"></script>
	<script src="/assets/backend/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="/assets/backend/vendor/chart.js/Chart.bundle.min.js"></script>
    <script src="/assets/backend/js/custom.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="/assets/backend/vendor/apexchart/apexchart.js"></script>
	
    <!-- Vectormap -->
	<!-- Chart piety plugin files -->
    <script src="/assets/backend/vendor/peity/jquery.peity.min.js"></script>
	
    <!-- Chartist -->
    <script src="/assets/backend/vendor/chartist/js/chartist.min.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="/assets/backend/js/dashboard/dashboard-1.js"></script>
	<!-- Svganimation scripts -->
	<script src="/assets/backend/vendor/svganimation/vivus.min.js"></script>
    <script src="/assets/backend/vendor/svganimation/svg.animation.js"></script>
    
	<script>
	function getUrlParams(dParam) {
		var dPageURL = window.location.search.substring(1),
			dURLVariables = dPageURL.split('&'),
			dParameterName,
			i;

		for (i = 0; i < dURLVariables.length; i++) {
			dParameterName = dURLVariables[i].split('=');

			if (dParameterName[0] === dParam) {
				return dParameterName[1] === undefined ? true : decodeURIComponent(dParameterName[1]);
			}
		}
	}
	
	(function($) {
		"use strict"

		var direction =  getUrlParams('dir');
		if(direction != 'rtl')
		{direction = 'ltr'; }
		
		var dezSettingsOptions = {
			typography: "roboto",
			version: "light",
			layout: "vertical",
			headerBg: "color_1",
			navheaderBg: "color_3",
			sidebarBg: "color_1",
			sidebarStyle: "full",
			sidebarPosition: "fixed",
			headerPosition: "fixed",
			containerLayout: "wide",
			direction: direction
		};
		
		new dezSettings(dezSettingsOptions); 

		jQuery(window).on('resize',function(){
			
			var sidebar = 'full';
			var screenWidth = jQuery(window).width();
			if(screenWidth < 600){
				sidebar = 'overlay';
			}else if(screenWidth > 600  && screenWidth < 1199){
				sidebar = 'mini';
			}
			
			dezSettingsOptions.sidebarStyle = sidebar;
			
			new dezSettings(dezSettingsOptions); 
		});
		
	})(jQuery);
	</script>

</body>
</html>