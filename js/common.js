// Search focus/blur
let el = document.getElementById('autocomplete');
let searchhead = document.getElementById('search_head');
function searchFocus() {
	searchhead.classList.add('focused');
}
function searchBlur() {
	searchhead.classList.remove('focused');
}
el.addEventListener('focus', searchFocus);
el.addEventListener('blur', searchBlur);


// header scroll
let ht = document.getElementById('headertop');
let hb = document.getElementById('header_bottom');
document.addEventListener('scroll', scrollFunc);
function scrollFunc() {
	let scrollPos = document.documentElement.scrollTop;
	if ( !document.documentElement.clientWidth > 750 ) {
		if ( scrollPos > 67 ) {
			document.body.style.paddingTop = '63px'
			hb.classList.add('fixed');
		} else {
			document.body.style.paddingTop = null;
			hb.classList.remove('fixed');
		}
	} else {
		if ( scrollPos > 40 ) {
			document.body.style.paddingTop = '40px'
			hb.classList.add('fixed');
		} else {
			document.body.style.paddingTop = null;
			hb.classList.remove('fixed');
		}
	}
}

// Slider
var swiper = new Swiper('#homeslider', {
	autoplay: {
		delay: 2500,
		disableOnInteraction: false,
	},
	loop: true,
	navigation: {
		nextEl: '#homeslider .swiper-button-next',
		prevEl: '#homeslider .swiper-button-prev',
	},
	pagination: {
		el: '#homeslider .swiper-pagination',
		clickable: true,
	}
});

// nav mobile
let nav = document.getElementById('nav_wrapper');
let navlink = document.getElementById('bars_link');
let overlay = document.createElement('div')
overlay.setAttribute('id', 'nav_overlay');
nav.after(overlay)

function openNavMobile(event) {
	nav.classList.toggle('show')
	overlay.classList.toggle('show')
	event.preventDefault();
}
navlink.addEventListener('click',openNavMobile);

function closeNavMobile() {
	nav.classList.remove('show')
	overlay.classList.remove('show')
}
overlay.addEventListener('click',closeNavMobile);



// JQuery
$(function() {

	// Autocomplete
	let availableTags = [
		'Компактный компьютер DA-1000-J19',
		'Компактный компьютер DC-500-J19',
		'Компактный компьютер DF-3000-J25',
		'Компактный компьютер DP-1400-J38',
		'Компактный компьютер DD-1500-J54',
		'Серия DI: Высокопроизводительные и компактные',
		'Серия DS: Высокопроизводительные и расширяемые',
		'Серия DE: Энергоэффективные и расширяемые',
		'Серия DC: Компактные',
		'Серия DA: Ультракомпактные',
		'Серия DX: Экстремальная производительность и компактность'
	];
	$('#autocomplete').autocomplete({
		source: availableTags,
		appendTo: '.search'
	});

});