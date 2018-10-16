<?php

	if( get_field('promises') ):
	
		if( have_rows('promises') ):
		
			echo '<div class="container"><div class="row gutters"><div class="col_12"><div id="home_promises" class="content">';
					
			while ( have_rows('promises') ) : the_row();
			
				$image = get_sub_field('image');
			
				echo '<div class="promise_item">';
				
				if (!empty($image)):
					        
					echo '<img src="';
					
					echo $image['url'];
					
					echo '" alt="';
					
					echo $image['alt'];
					
					echo '" class="promises_icon" />';
				
				endif;

				the_sub_field('description');
				
				echo '</div>';
					
			endwhile;
				
			echo '</div></div></div></div>';
						
		else :
			
		endif;
		
	endif;
	
?>