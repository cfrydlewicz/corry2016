<?php get_header(); ?>

<?php the_post(); ?>

<article class="post post-<?php the_ID(); ?> u-clearfix thumbnail-container u-container wire-outline" id="anchor-single-article">

	<img src="<?php get_post_thumbnail_url(); ?>" alt="Thumbnail Image for <?php the_title(); ?>" />

	<div class="entry-container u-inner wire-outline">

		<h1 class="entry-title wire-outline"><?php the_title(); ?></h1>
		<div class="article-stats wire-outline">
			<span class="article-wordcount u-nowrap"><?php echo word_count(); ?> words</span>&nbsp;&nbsp;|&nbsp;&nbsp;
			<span class="article-date u-nowrap"><?php the_date( 'Y.m.d', '', '' ); ?></span><!-- NOTE: Make sure dates are not links -->
		</div>

		<div class="categories-container wire-outline">
			<span class="u-visually-hidden">Categories:&nbsp;</span>
			<span class="cat-items"><?php
				$taxonomy = 'category';
				$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
				$separator = ', ';
				if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {
					$term_ids = implode( ',' , $post_terms );
					$terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
					$terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
					echo $terms;
				}
			?></span>
		</div>

		<div class="u-clear"></div>

		<div class="copy-area entry-content wire-outline">
			<?php the_content(); ?>
		</div><!-- /.copy-area -->

		<section class="post-article-container wire-outline">

			<div class="article-tags-container wire-outline">
				<p><strong>Tags:</strong> <span class="tag-links"><?php the_tags( '', ', ', '' ); ?></span></p>
			</div>

			<div class="discuss-container wire-outline">
				<h3>Comments?</h3>
				<p>Instead of using a standard comment thread, I've switched to discussion platforms you probably already use.</p>
				<div class="discuss-button-container wire-outline">

					<div class="discuss-button discuss--twitter wire-outline">
						<a href="https://twitter.com/intent/tweet?text=re:%20http://corry.us/?p=<?php the_ID(); ?>&via=cfrydlewicz">Discuss on Twitter</a>
					</div>

					<div class="discuss-button discuss--facebook wire-outline">
						<!-- use data-layout="button_count" for button w/ post count -->
						<div class="fb-share-button" data-href="http://corry.us/?p=<?php the_ID(); ?>" data-layout="link"></div>
					</div>

				</div>
				<p class="f-small"><strong>Note:</strong> Remember to tag me if you want a response.</p>
			</div>

			<div class="favorite-posts-container wire-outline">
				<h3>Other Articles You May Enjoy</h3>
				<div class="favorite-posts">
					<?php $the_query = new WP_Query( array( 'tag' => 'favorite-posts', 'numberposts' => 2 ) ); ?>
					<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
						<div class="post wire-outline" style="background-image: url('<?php get_post_thumbnail_url(); ?>');">
							<p class="f-larger"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></p>
						</div>
					<?php endwhile;
						wp_reset_postdata();
					?>
				</div>
			</div><!-- /.favorite-posts-container -->

		</section><!-- /.post-article-container -->

	</div>
</article>

<?php
// get_sidebar();
get_footer();
?>