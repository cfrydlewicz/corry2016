<?php get_header(); ?>

<?php the_post(); ?>

<article class="post post-<?php the_ID(); ?> u-clearfix thumbnail-container u-container wire-outline" id="anchor-pagetop">
	<div class="entry-container u-inner wire-outline">

		<div class="copy-area entry-content wire-outline">
			<?php the_content(); ?>
		</div><!-- /.copy-area -->

	</div>
</article>

<?php get_footer(); ?>