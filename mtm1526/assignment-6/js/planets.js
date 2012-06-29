$(document).ready(function() {
	
	$('#earth').on('click', function (e) {
		e.preventDefault();
		
		$('.container').load('earth.php');
		$('nav li').removeClass('current');
		$('#earth').addClass('current');
	});
	
	$('#mars').on('click', function (e) {
		e.preventDefault();
		$('.container').load('mars.php');
		$('nav li').removeClass('current');
		$('#mars').addClass('current');
	});
	
	$('#jupiter').on('click', function (e) {
		e.preventDefault();
		$('.container').load('jupiter.php');
		$('nav li').removeClass('current');
		$('#jupiter').addClass('current');
	});
	
	$('#venus').on('click', function (e) {
		e.preventDefault();
		$('.container').load('venus.php');
		$('nav li').removeClass('current');
		$('#venus').addClass('current');
	});
	
	
	
	
});