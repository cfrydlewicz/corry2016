<?php get_header(); ?>

<?php the_post(); ?>

<article class="u-container wire-outline page page-<?php the_ID(); ?>" id="anchor-pagetop">
	<div class="u-inner shadowed wire-outline">

		<section class="article-thumbnail wire-outline" style="background-image: url('<?php get_post_thumbnail_url(); ?>');" id="skip-to-content">
			<div class="article-title wire-outline">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>

		<div class="copy-area entry-content wire-outline">
			<?php the_content(); ?>
		</div><!-- /.copy-area -->

	</div>
</article>

<?php get_footer(); ?>
