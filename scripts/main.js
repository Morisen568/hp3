


  $('#top').vegas({
  overlay: true,
  transition: 'blur',
  transitionDuration: 2000,
  delay: 3000,
  animationDuration: 20000,
  animation: 'kenburns',
  slides: responsiveImage,
});

$(function(){
	$(window).on('load scroll',function (){
		$('.animation').each(function(){
			var target = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var height = $(window).height();
			if (scroll > target - height){
				$(this).addClass('active');
			}
		});
	});
});