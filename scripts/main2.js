$('.slider').slick({
		autoplay: true,
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 4,
		prevArrow: '<div class="slick-prev"></div>',
		nextArrow: '<div class="slick-next"></div>',
		dots: true,
    responsive: [
      {
			breakpoint: 1700,
			settings: {
				slidesToShow: 3,
				slidesToScroll: 3,
			}
      },
      {
			breakpoint: 1300,
			settings: {
				slidesToShow: 2,
				slidesToScroll: 2,
			}
		},
			{
			breakpoint: 769,
			settings: {
				slidesToShow: 1,
				slidesToScroll: 1,
			}
		},
	]
	});