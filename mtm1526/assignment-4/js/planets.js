$(document).ready(function() {
	
	$('.container').load('earth.html');
	
	$('#earth').on('click', function () {
		$('.container').load('earth.html');
		$('nav li').removeClass('current');
		$('#earth').addClass('current');
	});
	
	$('#mars').on('click', function () {
		$('.container').load('mars.html');
		$('nav li').removeClass('current');
		$('#mars').addClass('current');
	});
	
	$('#jupiter').on('click', function () {
		$('.container').load('jupiter.html');
		$('nav li').removeClass('current');
		$('#jupiter').addClass('current');
	});
	
	$('#venus').on('click', function () {
		$('.container').load('venus.html');
		$('nav li').removeClass('current');
		$('#venus').addClass('current');
	});
	
	
	
	
});