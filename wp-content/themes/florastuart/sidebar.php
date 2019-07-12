<div class="sidebar_wrapper">
	
	<div class="sidebar_box form">
		
		<span class="sidebar_form_title"><?php the_field( 'sidebar_form_title_new','option'); ?></span><!-- sidebar_form_title -->
		
		<span class="sidebar_description"><?php the_field( 'sidebar_form_description','option'); ?></span><!-- sidebar_description -->

		<?php gravity_form(4, false, false, false, '', true, 12213); ?>
		
		<span class="sidebar_myrequired">*ALL FIELDS REQUIRED</span><!-- sidebar_myrequired -->

	</div><!-- sidebar_box -->
				
				<div class="sidebar_box">


<?php
				
				if ( get_field('sidebar_menu') ){ //use same classes as widgets ?>
    
   
        
        	<span class="sidebar_title">
            
            <?php if(get_field('sidebar_menu_title')){
                
                the_field('sidebar_menu_title');
            
            }
            
            else {
                
                echo 'Practice Areas';
            
            } ?>
	        
        	</span>

					<?php
            
            wp_nav_menu(array(
                'menu' => get_field('sidebar_menu'),
                'container' => 'ul',
                'depth' => 2
            ));
        	
        	?>
    	
    
			
			<?php
			
			}
			
			else {
			
			if(have_rows('sidebars','option')){
        
        $no_sidebar_yet = true;

        while(have_rows('sidebars','option')): the_row();
            
            if(is_descendant_of(get_sub_field('page')) &&  $no_sidebar_yet){
                
                echo '<!-- ancestor default -->';
                
                dynamic_sidebar( ilaw_id_friendly_text( get_sub_field( 'sidebar_name' ) ) );
                
                $no_sidebar_yet = false;
                
                break;
            }
        
        endwhile;

        if($no_sidebar_yet){
            
            echo '<!-- no ancestral sidebar -->';
            
            dynamic_sidebar( 'default_sidebar' );
            // break;
        }

    }
    	
    	else{
        
        echo '<!--  default -->';
        
        dynamic_sidebar( 'default_sidebar' );
    	
    	}
	
	};?>
	
	
	
				</div></div>