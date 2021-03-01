<script src="/js/topFadeInOut.js"></script>
<script src="/js/menu.js"></script>
<script src="/js/SmoothScroll.js"></script>

<script>
$(function(){
	$(window).on('load scroll',function (){
		$('.slide-in-animation').each(function(){
			var target = $(this).offset().top;
			var scroll = $(window).scrollTop();
			var height = $(window).height();
			if (scroll > target - height){
				$(this).addClass('slide-in-active');
			}
		});
	});
});
</script>
