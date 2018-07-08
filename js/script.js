
	(function($){
		
		$(document).ready(function(){
	
	$('.drop-down a').click(function(){
		
		$('ul.main-menu').slideToggle();
		
	});

	var getUrl = window.location;
	var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

	var cartURL = baseUrl+"/cart";

	//var baseUrl = document.location.origin+'/cart';
	$("a.MiniCartInner[href='#']").attr('href', cartURL);
	$('.ProductContainer2 a').removeClass('button');
	
	
	
	if (!tf.isInSF() && !tf.isInDesigner()) $('.gallery-box a').removeAttr('onclick');
	if (tf.isInSF()) {
	window.Flickity.prototype._dragPointerDown= function( event, pointer ) {
	this.pointerDownPoint = Unipointer.getPointerPoint( pointer );
	}
	}
	//topbar
	var $galleryTopbar = null, galleryTopbarRowItems = 0;
	function SetGalleryTopbar() {
	if ($galleryTopbar) $galleryTopbar.flickity('destroy');
	$galleryTopbar = null;
	$galleryTopbar = $('.TopBar:visible .gallery-box').flickity({
	cellAlign: 'left',
	freeScroll: true,
	contain: true,
	setGallerySize: false,
	prevNextButtons: false,
	pageDots: false,
	imagesLoaded: true
	});
	$galleryTopbar.flickity('resize');
	}
	//banner
	if ($('.Banner .BannerImage').length > 1) {
	var $gallery = $('.Banner .gallery-box').flickity({
	wrapAround: true,
	autoPlay: 5000,
	draggable: true,
	freeScroll: false,
	setGallerySize: false,
	prevNextButtons: false,
	pageDots: false
	});
	$gallery.flickity('resize');
	$('.Banner .BannerImage').each(function(i, item){
	var clsname = i == 0 ? "button selected" : "button";
	$('.Banner .gallery-buttons').append('<span class="'+clsname+'">&nbsp;</span>');
	});
	// Flickity instance
	var flkty = $gallery.data('flickity');
	var $cellButtonGroup = $('.Banner .gallery-buttons');
	var $cellButtons = $cellButtonGroup.find('.button');
	// update selected cellButtons
	$gallery.on( 'cellSelect', function() {
	$cellButtons.filter('.selected').removeClass('selected');
	$cellButtons.eq( flkty.selectedIndex ).addClass('selected');
	});
	// select cell on button click
	$cellButtonGroup.on( 'click', '.button', function() {
	var index = $(this).index();
	$gallery.flickity( 'select', index );
	});
	}
	//top
	var $gallery1 = null, gallery1RowItems = 1;
	function SetGallery1() {
	$gallery1 = $('.PageLinkBoxWrapper .gallery-box').flickity({
	cellAlign: 'left',
	wrapAround: true,
	freeScroll: true,
	setGallerySize: false,
	prevNextButtons: false,
	pageDots: false
	});
	$gallery1.flickity('resize');
	$('.PageLinkBoxWrapper .gallery-action').removeClass('hide');
	}
	$('.PageLinkBoxWrapper .icon-arrow-left3').on( 'click', function() {
	for (var n = 0; n < gallery1RowItems; n++) {
	$gallery1.flickity('previous');
	}
	});
	$('.PageLinkBoxWrapper .icon-arrow-right3').on( 'click', function() {
	for (var n = 0; n < gallery1RowItems; n++) {
	$gallery1.flickity('next');
	}
	});
	//bottom
	var $gallery2 = null, gallery2RowItems = 1;
	function SetGallery2() {
	$gallery2 = $('.BannerBottomWrapper .gallery-box').flickity({
	cellAlign: 'left',
	wrapAround: true,
	freeScroll: true,
	setGallerySize: false,
	prevNextButtons: false,
	pageDots: false
	});
	$gallery2.flickity('resize');
	$('.BannerBottomWrapper .gallery-action').removeClass('hide');
	}
	$('.BannerBottomWrapper .icon-arrow-left3').on( 'click', function() {
	for (var n = 0; n < gallery2RowItems; n++) {
	$gallery2.flickity('previous');
	}
	});
	$('.BannerBottomWrapper .icon-arrow-right3').on( 'click', function() {
	for (var n = 0; n < gallery2RowItems; n++) {
	$gallery2.flickity('next');
	}
	});
	//resize
	$(window).on('load resize', function(){
	var old1 = gallery1RowItems;
	gallery1RowItems = parseInt($('.PageLinkBoxWrapper').width() / $('.PageLinkBoxWrapper .PageLinkBoxItem').outerWidth());
	var needButtons = ($('.PageLinkBoxWrapper .PageLinkBoxItem').length > gallery1RowItems);
	if (old1 != gallery1RowItems) {
	if ($gallery1) {
	$('.PageLinkBoxWrapper .gallery-action').addClass('hide');
	$gallery1.flickity('destroy');
	$gallery1 = null;
	}
	}
	if (needButtons && $('.PageLinkBoxWrapper .PageLinkBoxItem').length > 1) SetGallery1();
	else if ($gallery1) {
	$('.PageLinkBoxWrapper .gallery-action').addClass('hide');
	$gallery1.flickity('destroy');
	$gallery1 = null;
	}
	var old2 = gallery2RowItems;
	gallery2RowItems = parseInt($('.BannerBottomWrapper').width() / $('.BannerBottomWrapper .BannerBottomItem').outerWidth());
	var needButtons = ($('.BannerBottomWrapper .BannerBottomItem').length > gallery2RowItems);
	if (old2 != gallery2RowItems) {
	if ($gallery2) {
	$('.BannerBottomWrapper .gallery-action').addClass('hide');
	$gallery2.flickity('destroy');
	$gallery2 = null;
	}
	}
	if (needButtons && $('.BannerBottomWrapper .BannerBottomItem').length > 1) SetGallery2();
	else if ($gallery2) {
	$('.BannerBottomWrapper .gallery-action').addClass('hide');
	$gallery2.flickity('destroy');
	$gallery2 = null;
	}
	if (tf.isMobile && $('.header.mobile > .TopBar').length == 0) {
	if ($galleryTopbar) $galleryTopbar.flickity('destroy');
	$galleryTopbar = null;
	$('#WebSite .TopBar').clone(true).attr('id', $('#WebSite .TopBar').attr('id')+'Clone').prependTo('.header.mobile');
	(function waitForMobileUtils() {
	if (!tf.utils || !tf.utils.showMobileUtils) { setTimeout(waitForMobileUtils, 200); return; }
	tf.utils.showMobileUtils();
	})();
	}
	else if (!tf.isMobile) {
	if ($galleryTopbar) $galleryTopbar.flickity('destroy');
	$galleryTopbar = null;
	$('.header.mobile > .TopBar').remove();
	}
	galleryTopbarRowItems = 0;
	$('.TopBar:visible .CustomNavBox').each(function(){ galleryTopbarRowItems += $(this).outerWidth(true); })
	if ($galleryTopbar != null && $('.TopBar:visible .gallery-box').width() >= galleryTopbarRowItems) {
	$galleryTopbar.flickity('destroy');
	$galleryTopbar = null;
	}
	else if ($('.TopBar:visible .gallery-box').width() < galleryTopbarRowItems) SetGalleryTopbar();
	});
	$(window).trigger('resize');
	});
	
	
		var onImgLoad = function(selector, callback){
		jQuery(selector).each(function(){
		if (this.complete || this.readyState === 4) {
		callback.apply(this);
		}
		else {
		jQuery(this).on('load', function(){
		callback.apply(this);
		});
		}
		});
		};
		echo.init({
		offset: 1,
		throttle: 1,
		unload: false,
		callback: function (element, op) {
		onImgLoad(element, function() {
		jQuery(element).hide().fadeIn(200, function() {
		if(tf.content.makeResponsive)tf.content.makeResponsive();equalHeight();
		jQuery(element).trigger('imageLoaded');
		});
		});
		}
		});
		$(document).on( 'dragMove settle', debounce(function() {
		echo.render();
		}, 250));
		
	})(jQuery)

		
