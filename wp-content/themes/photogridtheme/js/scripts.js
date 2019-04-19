  function us_slider() {
  
        my_slider_counter = 0;
        curr_slide = 0;
        
        $('#slideshow img').each(function() {
            $(this).addClass('slide_' + my_slider_counter);
            my_slider_counter++;
           
        });
        
        function home_switch_slide() {
  
            if(curr_slide >= my_slider_counter)
                curr_slide = 0;
            else if(curr_slide < 0)
                curr_slide = (my_slider_counter-1);
            
            $('.slide_' + curr_slide).fadeIn(1000);
                
        }
        
        function hide_curr_slide() {
               $('.slide_' + curr_slide).stop();
               //$('.slide_' + curr_slide).fadeOut(1000);
               $('.slide_' + curr_slide).fadeOut(1000);
        }
        
        function next_slide_slider(jump_to_slide) {

            hide_curr_slide(); 
            
            if(jump_to_slide == null)
                curr_slide++;     
            else 
                curr_slide = jump_to_slide;
            
            t_slide=setTimeout(home_switch_slide,500); 
            //home_switch_image();
        }
        
        function prev_slide_slider(jump_to_slide) {

            hide_curr_slide();
            
            
//            curr_slide--;        

            if(jump_to_slide == null)
                curr_slide--;     
            else 
                curr_slide = jump_to_slide;

            //home_switch_image();
            t_slide=setTimeout(home_switch_slide,1000);
        }        
        
        $('.slide_left').click(function() {
          
            prev_slide_slider();
            clearInterval(intervalID_slide);
            //clearInterval(t_slide);
            intervalID_slide = setInterval(next_slide_slider, 10000);
        });
        
        $('.slide_right').click(function() {
            
            next_slide_slider();
            clearInterval(intervalID_slide);
            intervalID_slide = setInterval(next_slide_slider, 10000);
        });                
        
        //setInterval(next_slide_image, 5000);
        intervalID_slide = setInterval(next_slide_slider, 8000);  
  
  
  }  



    $(document).ready(function() {
    
        us_slider();
        
        $('#menu li').hover(
            function () {
                $('ul:first', this).css('display','block');
     
            }, 
            function () {
                $('ul:first', this).css('display','none');         
            }
        );                       
        
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
        
    
    });