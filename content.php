<article class="post post-<?php the_ID(); ?> u-clearfix">

	<div class="thumbnail-container u-container" style="background-image: url('<?php get_post_thumbnail_url(); ?>');">
		<img class="u-visually-hidden" src="<?php get_post_thumbnail_url(); ?>" alt="(Post Thumbnail Image)" />

		<div class="headline-container u-inner wire-outline">

			<h2 class="entry-title"><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" class="special" rel="bookmark" data-hover="' . get_the_title() . '">', '</a>' ); ?></h2>
			<p class="article-stats wire-outline f-small">
				<span class="article-wordcount u-nowrap"><?php echo word_count(); ?> words</span>
				<span class="article-date u-nowrap"><?php the_date( 'Y.m.d', '', '' ); ?></span><!-- NOTE: Make sure dates are not links -->
			</p>

		</div>

		<div class="article-excerpt-container u-inner u-inner--padded shadowed wire-outline">
			<div class="entry-summary copy-area"><?php the_excerpt(); ?></div>
		</div>

		<div class="post-meta-container u-inner u-inner--padded shadowed wire-outline">
				<div class="categories-container">
				<p>Categories: <?php
					$taxonomy = 'category';
					$post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
					$separator = ', ';
					if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {
						$term_ids = implode( ',' , $post_terms );
						$terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
						$terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
						echo $terms;
					} ?></p>
			</div>
		</div><!-- /.post-meta-container -->

	</div>
</article><!--.post-#-->
