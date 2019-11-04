// madeshop.ru
// rentwell@mail.ru

$(document).ready(function() {
	$(".hoverimg").each(function() { 
		var arr = $(this).attr("data-sw");
		if(arr.length > 1) {
		var i=0;
		var interval;
		var imgs = arr.split(',');
	  
		$(this).hover(function(){
		  let tort = $(this).find('img'); 
		  interval = setInterval(function(){
			i++;
			if(i >= imgs.length) i=0;
		  tort.attr('src', imgs[i]);
		  }, 1000);
		},function(){
		var tort = $(this).find('img');
		tort.attr('src', imgs[0]);
		clearInterval(interval);
		});
	  } 
	});
});