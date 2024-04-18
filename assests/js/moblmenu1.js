$('.mobile__burger').on('click', function(e) {
	e.preventDefault();
	$(this).toggleClass('mobile__burger-active');
	$('.mobile__holder').toggleClass('mobile__holder-active');
	$('.container-menu').toggleClass('container-menu__active');
});