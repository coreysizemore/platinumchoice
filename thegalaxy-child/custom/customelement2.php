<?php

	if( get_field('service_list') ):
	
		if( have_rows('service_list') ):
		
			echo '<div class="container"><div class="row gutters"><div class="col_12"><div id="home_service_list" class="content">';
			
			echo '<h1>';
			
			the_field('service_list_title');
			
			echo '</h1><hr class="divider" />';
					
			while ( have_rows('service_list') ) : the_row();
			
				echo '<div class="service_item">';

				the_sub_field('service');
				
				echo '</div>';
					
			endwhile;
				
			echo '</div></div></div></div>';
						
		else :
			
		endif;
		
	endif;
	
?>