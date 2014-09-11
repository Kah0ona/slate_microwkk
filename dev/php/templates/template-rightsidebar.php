<?php
/*
Template Name: Page w/ sidebar on right
*/
?>

<?php get_header(); ?>

	<div class="u-gridContainer">
		<div class="Content-Style" >
			<div class="u-gridRow">
				<div class="u-gridCol8"	>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<article class="Content Content--leftsidebar" id="post-<?php the_ID(); ?>">
							<h2><?php the_title(); ?></h2>
							<div class="Content-left">
								<?php the_content(); ?>
								<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
							</div>
						</article>
					<?php endwhile; endif; ?>
				</div>

				<div class="u-gridCol4 Content-right"	>
				<div>
					<h2>Heeft u vragen?</h2>
					<button><a title="contact" href="http://microwkk.lijktmeduidelijk.nl/contact/">Neem contact op</a></button>
				</div>

					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>
