var $ = jQuery.noConflict();

$(document).ready(function(){
	$('.recent-feeds-full-width-wrap').append($('.recent-feeds-post.full-width'));
	$('.popular-feed-full-width-wrap').append($('.popular-feed-post.full-width'));

	$('.search-close-icon').click(function(){
		if( $('.mobilemenu-icon').hasClass('open') ){ $('.mobilemenu-icon').click(); }
		$('.searchform-wrap').toggleClass('open');
		($('.searchform-wrap').hasClass('open')) ? $('.searchtext').focus() : $('.searchtext').blur();
		$(this).toggleClass('open');
	});

	$('.mobilemenu-icon').on('click', function(){
		if( $('.searchform-wrap').hasClass('open') ){ $('.search-close-icon').click(); }
		$(this).toggleClass('open');
		$('.nav-menu').toggleClass('open');
	});	
});