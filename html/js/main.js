$(function() {

	$('#tags').tagging();





	$('.main-header nav .avatar').on('click', function() {
		$(this).children('a').toggleClass('active');
		$('#profile-dropdown').toggleClass('active');
	});
});