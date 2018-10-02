<?php
	
	/*
		@package WordPress
		@subpackage thegalaxy
	*/
	 
?>
	
<?php get_template_part( 'sidebars/sidebar' , 'announcement' ); ?>

<?php 
	
	if( get_field('display_call_out_boxes') ):

		get_template_part( 'misc/calloutboxes' );
		
	endif;
		
?>

<div id="main" class="<?php echo basename(get_permalink()); ?>">
	
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

	<?php if( get_field('default_editor')): ?>
	
		<div class="default_editor">
		
			<div class="container">
					
				<div class="row gutters">
						
					<?php if( get_field('sidebar_selection') == 'right' ): ?>
						
						<div class="col_8">
								
							<div class="content">
					
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
									
							</div>
								
						</div>
							
						<div class="col_4">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
								
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'none' ): ?>
					
						<div class="col_12">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
					
					<?php if( get_field('sidebar_selection') == 'left' ): ?>
					
						<div class="col_3">
								
							<?php get_template_part( 'sidebars/sidebar' , 'primary' ); ?>
							
						</div>
						
						<div class="col_9">
							
							<div class="content">
				
								<?php get_template_part( 'loops/loop', 'page' ); ?>
								
								<?php
	
									if( get_field('gallery') ):
								
										get_template_part( 'misc/gallery' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('accordion') ):
								
										get_template_part( 'misc/accordion' );
										
									endif;
										
								?>
								
								<?php 
									
									if( get_field('tabs') ):
								
										get_template_part( 'misc/tabs' );
										
									endif;
										
								?>
								
							</div>
							
						</div>
					
					<?php endif; ?>
						
				</div>
				
			</div>
			
		</div>
	
	<?php endif; ?>
	
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
	
	<?php if(is_user_logged_in()):?>
	
		<div class="edit_button">
		
			<span class="edit"><?php edit_post_link(); ?></span>
		
		</div>
	
	<?php endif; ?>

</div>

<?php get_template_part( 'misc/parallax' ); ?>

<?php

	if(get_field('appointment_feature'))
	{
		get_template_part( 'sidebars/sidebar' , 'appointment' );
	}
						
?>
	
	
	