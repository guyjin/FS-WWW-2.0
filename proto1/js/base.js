$(document).ready(function() {
	aqm.setListeners();
});

var aqm = {

	setListeners:function() {
		$('.siteInfoLink').on('click', function() {
			aqm.openSiteDrawer();
		});

		$('.siteDrawerHandle').on('click', function() {
			aqm.closeSiteDrawer();
		});
	},

	openSiteDrawer: function() {
		$('.siteDrawer').addClass('opened');
	},

	closeSiteDrawer: function() {
		$('.siteDrawer').removeClass('opened');
	}
}



