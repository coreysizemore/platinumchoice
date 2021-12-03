<div class="form_map_wrapper">
	
	<div class="container">
		
		<div class="row gutters">
			
			<div class="col_6">
				
				<div class="form_wrapper">
				
					<?php 
						
						if( get_field('contact_form') ):
						
							echo do_shortcode('[gravityform id="1" title="false" description="false"]');
						
						endif;
						
					?>
				
				</div>
				
			</div>
			
			<div class="col_6">
				
				<div class="map_wrapper">
					
					<?php 
					
						if( get_field('google_map') ):
						
							echo the_field('google_map');
						
						endif;
					
					?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
</div>