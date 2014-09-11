<?php
/*
Template Name: Contactpage
*/
?>

<?php get_header(); ?>


	<div class="u-gridContainer">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="Content-Style" >
			<div class="u-gridRow">
				<div class="u-gridCol8"	>
					<div class="Content-entry">
				<h2><?php the_title(); ?></h2>
				<div class="Content-text">
					<div class="u-gridRow">						
						<p class="contact-page-p">Heeft u nog vragen? Neem dan hieronder contact met ons op. </p>
						<?php the_content(); ?>
					
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
						
					</div>
				</div>
			</div>
		</div>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>

