$(document).ready(function() {

	//Vivus

	var line = new Vivus('svg-line', {type: 'scenario-sync', duration: 100, start: 'autostart'});

	//Animation

	var wow = new WOW({	mobile: false	});
	wow.init();

	$('.sec-2-txt-block').hover(function() {
		$(this).find('.icon').css('color', '#4a9ffc');
		$(this).find('.sec-2-txt').css('color', '#4a9ffc');

	}, function() {
		$(this).find('.icon').css('color', '#2d3558');
		$(this).find('.sec-2-txt').css('color', '#2d3558');
	});

	$('.sec-4-list li').hover(function() {
		$(this).css('color', '#4a9ffc');

	}, function() {
		$(this).css('color', '#2d3558');;
	});

	$('.sec-1-btn').hover(function() {
		$(this).children('.icon').css('color', '#fff');
	}, function() {
		$(this).children('.icon').css('color', '#2c6ebd');
	});

	$('.oleg-foto').hover(function() {
		$(this).removeClass('grayscale');
	}, function() {
		$(this).addClass('grayscale');
	});

	//Parallax

	$(function(){
		$.stellar({
			horizontalScrolling: false
		});
	});

	//Preload image

	$.preloadImages = function() {
	  for (var i = 0; i < arguments.length; i++) {
	    $("<img />").attr("src", arguments[i]);
	  }
	}

	$.preloadImages("./img/bg-blue.jpg");

 });
