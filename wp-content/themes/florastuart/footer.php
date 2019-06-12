<footer id="footer_trigger">
	
	<div class="footer_inner">
		
		<div class="field_trip_wrapper">
			
			<div class="field_trip_inner">
				
			<div class="footer_play_wrapper">
				
				<a href="">
				
					<img class="footer_redline" src="<?php bloginfo('template_directory');?>/images/test_image_icon_01.svg"/>
				
					<div class="play_image_wrapper">
					
						<img class="play_image" src="<?php bloginfo('template_directory');?>/images/footer_play.png"/>
					
					</div><!-- play_image_wrapper -->
					
					<span class="play_tri"></span><!-- play_tri -->
				
				</a>
				
			</div><!-- footer_play_wrapper -->
			
			<img class="poppy_img" src="<?php bloginfo('template_directory');?>/images/footer_img_01.jpg"/>
			
			<span class="poppy_title">poppy’s field trip visits</span><!-- poppy_title -->
			
			<span class="comm_description">Flora Stuart is dedicated to making a difference in the lives of her clients. Our law firm is in the community to make a difference in the lives of others. </span><!-- comm_description -->
			
			<a class="visit_comm" href="">Visit Our Community Page</a><!-- visit_comm -->
			
			
			
			</div><!-- field_trip_inner -->
			
		</div><!-- field_trip_wrapper -->
		
		<div class="footer_locations">
			
			<span class="footer_location_title">Phone</span><!-- footer_location_title -->
			
			<a class="footer_phone" href="tel:888782909"><span>Call 24/7</span> <span>(888) 782-9090</span></a>
			
			<span class="footer_location_title">Office Locations</span><!-- footer_location_title -->
			
			<div class="locations">
				
				<div class="single_location">
					
					<span class="address">213 S Green St<br/> Glasgow, KY 42141</span><!-- address -->
					
					<a class="get_directions" href="" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
					
				</div><!-- single_location -->
				
				<div class="single_location">
					
					<span class="address">607 E 10th Ave<br/> Bowling Green, KY 42101</span><!-- address -->
					
					<a class="get_directions" href="" target="_blank" rel="noopener">Get Directions</a><!-- get_directions -->
					
				</div><!-- single_location -->
				
			</div><!-- locations -->
			
		</div><!-- footer_locations -->
		
		<div id="consultation" class="footer_form">
			
			<div class="footer_form_inner">
				
				<span class="form_title">Request<br class="mobile"/> your <strong>free</strong><br class="tablet"/> case<br class="mobile"/> evaluation</span><!-- form_title -->
				
				<span class="form_disclaimer">REMEMBER, YOU WON’T HAVE TO PAY ANY FEES OR COSTS UNLESS YOU RECEIVE COMPENSATION FOR YOUR INJURIES</span><!-- form_disclaimer -->
			
				<?php gravity_form(1, false, false, false, '', true, 1255); ?>
				
				<span class="myrequired">*All Fields Required</span><!-- myrequired -->
			
			</div><!-- footer_form_inner -->
			
		</div><!-- footer_form -->
		
	</div><!-- footer_inner -->
	
	<div class="copyright">
		
		<ul>
			<li>&copy; 2019 Flora Templeton Stuart, Personal Injury Lawyer</li>
			<li><a href="">Privacy Policy</a></li>
			<li><a href="">Disclaimer</a></li>
		</ul>
		
		<a class="ilawyer" href="//ilawyermarketing.com" target="_blank" rel="noopener">
			
			<img src="<?php bloginfo('template_directory');?>/images/footer_logo-01.svg"/>
			
		</a><!-- ilawyer -->
		
	</div><!-- copyright -->
		
</footer>


<?php wp_footer();?>


<?php if(is_front_page()) { ?>


<script type="text/javascript">

jQuery(document).ready(function($){

// nav
	
		$('.current-menu-item').addClass('active');
	

		$(function() {

        var $el, leftPos, newWidth,
            $mainNav = $('nav').find("ul.menu");

        $mainNav.append("<li id='magic-line'></li>");
        var $magicLine = $("#magic-line");



        if($('nav ul.menu > li').hasClass('active')) {
            $magicLine
                .css({
                    "left": $('nav').find("ul.menu > li.active").position().left,
                    "width": $('nav ul.menu > li.active a').width()
                }).data("origLeft", $magicLine.position().left);
        } else {
            $magicLine
                .css({
                    "left": -100,
                    "width": $('nav ul.menu > li:first a').width()
                }).data("origLeft", $magicLine.position().left);
        }




        $('nav').find("ul.menu > li:not(#magic-line)").hover(function() {
            $el = $(this);
            leftPos = $el.position().left;
            newWidth = $el.children().width();
            $magicLine.stop().animate({
                left: leftPos,
                width: newWidth
            });
        }, function() {
            $magicLine.stop().animate({
                left: $magicLine.data("origLeft"),
                width: $('nav ul.menu > li.active a').width()
            });
        });



    });

}); // Document Ready

</script>


<?php } ?>


</body>
</html>
