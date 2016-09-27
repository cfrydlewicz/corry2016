<?php get_header(); ?>

<?php if ( in_category('gaming') ) : ?>

	<section class="u-clearfix twitch-frame u-container">
		<div class="u-inner">
			<iframe src="https://player.twitch.tv/?channel=ultros_the_octopus" frameborder="0" scrolling="no" height="378" width="620"></iframe>
			<a href="https://www.twitch.tv/ultros_the_octopus?tt_medium=live_embed&tt_content=text_link" style="padding:2px 0px 4px; display:block; width:345px; font-weight:normal; font-size:10px; text-decoration:underline;">Watch live video from ultros_the_octopus on www.twitch.tv</a>
		</div>
	</section>

<?php endif; ?>

<section class="u-clearfix <?php if ( !is_single() ) { echo "listing"; } ?>" id="skip-to-content">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) :
				the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; ?>

			<div class="time-nav time-nav--bottom u-container">
				<div class="u-inner">
					<?php posts_nav_link('<!--null-->','Newer Posts &rang;','&lang; Older Posts'); ?>
				</div>
			</div><!--.time-nav-->

		<?php else : ?>
			<!-- have_posts() Failed. :( -->
			<article class="post error404 u-container">
				<div class="u-inner u-inner--padded shadowed wire-outline">

					<div class="thumbnail-container">
						<img src="<?php bloginfo('template_url');?>/images/404.jpg" />
					</div>
					<div class="text-container">
						<h2 class="entry-title">No Results Found</h2>
						<div class="entry-summary">
							<p>I'm sorry, but no results were found. Please try using another search or return to the <a href="/">home page</a>.</p>
						</div><!-- .entry-summary -->
					</div><!--.text-container-->

				</div>
			</article>    
		<?php endif; ?>

</section>

<?php // get_sidebar(); ?>
<?php get_footer();