$(function() {
	'use strict'
	/***************** LINE CHARTS *****************/
	$('#sparkline1').sparkline('html', {
		width: 100,
		height: 50,
		lineColor: '#214fbe ',
		fillColor: false,
		tooltipContainer: $('.main-content')
	});
	$('#sparkline2').sparkline('html', {
		width: 100,
		height: 50,
		lineColor: '#e54d26',
		fillColor: false
	});
	$('#sparkline19').sparkline('html', {
		width: 100,
		height: 50,
		lineColor: '#6821ec',
		fillColor: false,
		tooltipContainer: $('.main-content')
	});
	$('#sparkline20').sparkline('html', {
		width: 100,
		height: 50,
		lineColor: '#269c8e',
		fillColor: false
	});
	/************** AREA CHARTS ********************/
	$('#sparkline3').sparkline('html', {
		width: 120,
		height: 50,
		lineColor: '#214fbe',
		fillColor: 'rgba(113, 76, 190,0.2)',
	});
	$('#sparkline4').sparkline('html', {
		width: 120,
		height: 50,
		lineColor: '#53caed',
		fillColor: 'rgba(235, 111, 51,0.2)'
	});

	/******************* BAR CHARTS *****************/
	$('#sparkline5').sparkline('html', {
		type: 'bar',
		barWidth: 10,
		height: 50,
		barColor: '#214fbe',
		chartRangeMax: 12
	});
	$('#sparkline6').sparkline('html', {
		type: 'bar',
		barWidth: 10,
		height: 50,
		barColor: '#53caed',
		chartRangeMax: 12
	});
	/***************** STACKED BAR CHARTS ****************/
	$('#sparkline7').sparkline('html', {
		type: 'bar',
		barWidth: 10,
		height: 50,
		barColor: '#214fbe',
		chartRangeMax: 12
	});
	$('#sparkline7').sparkline([4, 5, 6, 7, 4, 5, 8, 7, 6, 6, 4, 7, 6, 4, 7], {
		composite: true,
		type: 'bar',
		barWidth: 10,
		height: 50,
		barColor: '#53caed',
		chartRangeMax: 12
	});
	$('#sparkline8').sparkline('html', {
		type: 'bar',
		barWidth: 10,
		height: 50,
		barColor: '#01b8ff',
		chartRangeMax: 12
	});
	$('#sparkline8').sparkline([4, 5, 6, 7, 4, 5, 8, 7, 6, 6, 4, 7, 6, 4, 7], {
		composite: true,
		type: 'bar',
		barWidth: 10,
		height: 50,
		barColor: '#f16d75',
		chartRangeMax: 12
	});
	/**************** PIE CHART ****************/
	$('#sparkline9').sparkline('html', {
		type: 'pie',
		width: 70,
		height: 50,
		sliceColors: ['#214fbe', '#53caed', '#01b8ff']
	});
	$('#sparkline10').sparkline('html', {
		type: 'pie',
		width: 70,
		height: 50,
		sliceColors: ['#214fbe', '#53caed', '#01b8ff', '#f16d75', '#29ccbb', '#e54d26']
	});
});