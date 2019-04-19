// Ajax-fetching "Load more posts"
$('.load_more_cont a').live('click', function(e) {
	e.preventDefault();
	//$(this).addClass('loading').text('Loading...');
        //$('.load_more_text a').html('Loading...');
        $('.load_more_cont a').css('display','none');
	$.ajax({
		type: "GET",
		url: $(this).attr('href') + '#main_container',
		dataType: "html",
		success: function(out) {
			result = $(out).find('#content_inside .home_post_box');
			nextlink = $(out).find('.load_more_cont a').attr('href');
                        //alert(nextlink);
			//$('#boxes').append(result).masonry('appended', result);
                    $('#content_inside').append(result);
                    $('#content_inside').append('<div class="clear"></div>');
			//$('.fetch a').removeClass('loading').text('Load more posts');
                        //$('.load_more_text a').html('Load More');
                        

        $('.home_post_box').hover(
            function () {
                $(this).find('.home_post_text_back').css('display','block');
                //$(this).find('.home_post_text').css('display','block');
		$(this).find('.home_post_text').css('visibility','visible');
            },
            function () {
                $(this).find('.home_post_text_back').css('display','none');
                //$(this).find('.home_post_text').css('display','none');            
		    $(this).find('.home_post_text').css('visibility','hidden');
            }
        );
                        
                        
//                      alert(nextlink);
			if (nextlink != undefined) {
				$('.load_more_cont a').attr('href', nextlink);
                                $('.load_more_cont a').css('display','block');
			} else {
				$('.load_more_cont').remove();
                                $('#content_inside').append('<div class="clear"></div>');
                              //  $('.load_more_cont').css('visibilty','hidden');
			}

/*
                    if (nextlink != undefined) {
                        $.get(nextlink, function(data) {
                          if($(data + ":contains('home_box')") != '') {
                            //alert('not found');
                                                    $('.load_more_cont').remove();
                                                    $('#content_inside').append('<div class="clear"></div>');        
                          }
                        });                        
                    }*/
                        
		}
	});
});