$('.toggle_box').click(function(){

	if($(this).parent().height() == 40) {
		$(this).parent().animate({height:'300px'});
		$(this).children().attr('class', 'triangle_up_black');
	} else {
		$(this).parent().animate({height:'40px'});
		$(this).children().attr('class', 'triangle_down_black')
	}
});