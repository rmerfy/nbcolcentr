// Скрипт появления фона Navbar
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
	var currentScrollPos = window.pageYOffset;
	// проверка прокрутки
	if (prevScrollpos < 50) {
		document.getElementById("header").classList.remove('_active');
		document.querySelector(".menubox").classList.remove('_active');
	} else {
		document.getElementById("header").classList.add('_active');
		document.querySelector(".menubox").classList.add('_active');
	}
	prevScrollpos = currentScrollPos;
}


// Меню бургер
const iconMenu = document.querySelector('.burger-menu');
const menuItem = document.querySelector('.menu-item');
if (iconMenu) {
	const menuBody = document.querySelector('.menubox');
	iconMenu.addEventListener("click", function (e) {
		document.body.classList.toggle('_lock')
		iconMenu.classList.toggle('active');
		menuBody.classList.toggle('active');
	});

	// закрыть меню при переходе на элемент меню
	var menuItems = document.getElementsByClassName("menu-item");
	var j;
	for (j = 0; j < menuItems.length; j++) {
		menuItems[j].addEventListener("click", function () {
			document.body.classList.toggle('_lock')
			iconMenu.classList.toggle('active');
			menuBody.classList.toggle('active');
		});
	}
}


// Попап дефолтный
let pop = $('.popup-1')
$('.popup__toggle-1').click(function () {
	pop.addClass('_active')
})
pop.click(function (event) {
	e = event || window.event
	if (e.target == this) {
		$(pop).removeClass('_active')
	}
})
$('.popup__close').click(function () {
	pop.removeClass('_active')
})
// Попап консультации
let pop2 = $('.popup-2')
$('.popup__toggle-2').click(function () {
	pop2.addClass('_active')
})
pop2.click(function (event) {
	e = event || window.event
	if (e.target == this) {
		$(pop2).removeClass('_active')
	}
})
$('.popup__close').click(function () {
	pop2.removeClass('_active')
})


// анимация при загрузке страницы
$(document).ready(function () {
	$('.img-animate').addClass('_action');
	$('body').addClass('_action');
	// Анимация при скролле
	function onEntry(entry) {
		entry.forEach(change => {
			if (change.isIntersecting) {
				change.target.classList.add('_action');
			}
		});
	}
	let options = {
		threshold: [0.1]
	};
	let observer = new IntersectionObserver(onEntry, options);
	let elements = document.querySelectorAll('.animated');
	for (let elm of elements) {
		observer.observe(elm);
	}
});



// dropdown menu
let intervalId;
document.querySelectorAll('.dropdown-toggle').forEach(e => {
	e.addEventListener('mouseover', e => {
		const menu = e.currentTarget.dataset.path;
		document.querySelectorAll('.dropdown-menu').forEach(e => {
			if (!document.querySelector(`[data-target=${menu}]`).classList.contains('open')) {
				e.classList.remove('menu-active');
				e.classList.remove('open');
				e.previousElementSibling.classList.remove('menu-active');
				document.querySelector(`[data-target=${menu}]`).classList.add('menu-active');
				document.querySelector(`[data-path=${menu}]`).classList.add('menu-active');
				intervalId = setTimeout(() => {
					document.querySelector(`[data-target=${menu}]`).classList.add('open');
				}, 0);
			}

			if (document.querySelector(`[data-target=${menu}]`).classList.contains('open')) {
				clearTimeout(intervalId);
				document.querySelector(`[data-target=${menu}]`).classList.remove('menu-active');
				document.querySelector(`[data-path=${menu}]`).classList.remove('menu-active');
				intervalId = setTimeout(() => {
					document.querySelector(`[data-target=${menu}]`).classList.remove('open');
				}, 0);
			}

			window.onclick = e => {
				if (e.target == document.querySelector(`[data-target=${menu}]`) || e.target == document.querySelector(`[data-path=${menu}]`)) {
					return;
				} else {
					document.querySelector(`[data-target=${menu}]`).classList.remove('menu-active');
					document.querySelector(`[data-target=${menu}]`).classList.remove('open');
					document.querySelector(`[data-path=${menu}]`).classList.remove('menu-active');
				}
			}

		});
	});
});




// маска на телефон
let selector = document.querySelectorAll('input[type="tel"]');
if (selector.length > 0) {
	let im = new Inputmask('+7 (999) 999-99-99');
	im.mask(selector);
	let selector2 = document.querySelector('input[type="tel"]');
	selector2.addEventListener('input', function () {
		const re = /^\d*(\.\d+)?$/
	});
}


// слайдер slick карусели программы защиты
const windowInnerWidth = window.innerWidth;
if (windowInnerWidth < 1200) {
	$('.pockages-list').slick({
		centerMode: true,
		infinite: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
		arrows: false,
		variableWidth: true
	});
}


// слайдер slick с табами "пакеты шумоизоляции"
$('.pockets-tabs').slick({
	infinite: false,
	slidesToShow: 5,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: true,
	asNavFor: '.pockets-content',
	focusOnSelect: true,
	variableWidth: true
});
$('.pockets-content').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: false,
	fade: true,
	asNavFor: '.pockets-tabs',
	swipe: false
});
// доп кнопка next в слайдере
$('.pockets-next').click(function () {
	$(".pockets-tabs").slick("slickNext");
});


// слайдер slick с табами "Зачем нужна..."
$('.whyneed-tabs').slick({
	infinite: false,
	slidesToShow: 5,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: true,
	asNavFor: '.whyneed-content',
	focusOnSelect: true,
	variableWidth: true,
	responsive: [
		{
			breakpoint: 980,
			settings: {
				slidesToShow: 2,
				arrows: true
			}
		}
	]
});
$('.whyneed-content').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: false,
	fade: true,
	asNavFor: '.whyneed-tabs',
	swipe: false
});


// слайдер slick реализованные проекты
$('.lastwork-tabs').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: true,
	asNavFor: '.lastwork-for',
	focusOnSelect: true,
	variableWidth: true
});

$('.lastwork-for').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: false,
	fade: true,
	asNavFor: '.lastwork-tabs',
	swipe: false
});

$('.lastwork-inner-slider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: false,
	fade: true,
	swipe: false
});

// слайдер slick "результат, которого вы достойны"
$('.result-slider').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: false,
	responsive: [
		{
			breakpoint: 980,
			settings: {
				arrows: true
			}
		}
	]
});


// доп кнопка next в слайдере
$('.lastwork-inner-slider .next-block').click(function () {
	$(".lastwork-inner-slider").slick("slickNext");
});
// доп кнопка prev в слайдере
$('.lastwork-inner-slider .prev-block').click(function () {
	$(".lastwork-inner-slider").slick("slickPrev");
});

// доп кнопка next в слайдере
$('.next-block').click(function () {
	$(".result-slider").slick("slickNext");
});
// доп кнопка prev в слайдере
$('.prev-block').click(function () {
	$(".result-slider").slick("slickPrev");
});

// слайдер slick для картинок "результат, которого вы достойны"
$('.result-slider-nav').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: false,
	asNavFor: '.result-slider-thumb',
	focusOnSelect: true,
	autoplay: true,
	autoplaySpeed: 5000,
});
$('.result-slider-thumb').slick({
	slidesToShow: 1,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: false,
	asNavFor: '.result-slider-nav'
});



// слайдер slick для отывов
$('.reviews-slider').slick({
	slidesToShow: 4,
	slidesToScroll: 1,
	swipeToSlide: true,  // разрешить пролистывать свайпом более заданного slidesToScroll
	waitForAnimate: false,  // не ждать анимацию при принудительной прокрутке
	arrows: true,
	responsive: [
		{
			breakpoint: 980,
			settings: {
				slidesToShow: 3
			},
			breakpoint: 800,
			settings: {
				slidesToShow: 2
			},
			breakpoint: 500,
			settings: {
				slidesToShow: 1
			}
		}
	]
});



// Первый блок на главной слайдер
// переменная с классом слайдера
var $slider = $('.main-banner');
if ($slider.length) {
	var currentSlide;
	var slidesCount;
	var sliderCounter = document.createElement('div');
	sliderCounter.classList.add('slider__counter');

	var updateSliderCounter = function (slick, currentIndex) {
		currentSlide = slick.slickCurrentSlide() + 1;
		slidesCount = slick.slideCount;
		// $(sliderCounter).text('<span>' + currentSlide + '</span>' + ' / ' + slidesCount);
		document.querySelector(".slider__counter").innerHTML = '<span>' + currentSlide + '</span>' + '/' + slidesCount;
	};

	$slider.on('init', function (event, slick) {
		$slider.append(sliderCounter);
		updateSliderCounter(slick);
	});

	$slider.on('afterChange', function (event, slick, currentSlide) {
		updateSliderCounter(slick, currentSlide);
	});

	// инициализация слайдера
	$slider.slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		arrows: true,
		dots: false,
		autoplay: true,
		autoplaySpeed: 8000,
	});
}