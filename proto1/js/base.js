$(window).load(function() {
	$('.flexcontainer').animate({
		opacity: 1
	},1000);
})

$(document).ready(function() {
	aqm.setListeners();
});



var aqm = {

	setListeners:function() {
		$('nav a, .content a').on('click', function(event) {
			event.preventDefault();

			var link = $(this);
			console.log(link.attr('href'));
			if(!link.attr("href") !== undefined || link.attr('href') !== '#') {
				var href= link.attr('href');
				aqm.fadePageOut(href);
			}
		})
		$('.siteInfoLink').on('click', function(event) {
			event.preventDefault();
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
	},

	fadePageOut: function(href) {
		$('.flexcontainer').animate({
			opacity: 0
		}, 250, function() {
			window.location = href;
		});
	}
}



