<article class="post post-<?php the_ID(); ?> u-clearfix thumbnail-container u-container">

	<img src="<?php get_post_thumbnail_url(); ?>" alt="(Thumbnail Image)" />

	<div class="entry-container u-inner wire-outline">

		<h2 class="entry-title"><?php the_title( '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a>' ); ?></h2>

		<div class="article-stats wire-outline">
			<span class="article-wordcount u-nowrap"><?php echo word_count(); ?> words</span>&nbsp;&nbsp;|&nbsp;&nbsp;
			<span class="article-date u-nowrap"><?php the_date( 'Y.m.d', '', '' ); ?></span><!-- NOTE: Make sure dates are not links -->
		</div>

		<div class="categories-container">
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

		<div class="entry-summary copy-area"><?php the_excerpt(); ?></div>

		<div class="entry-cta">
			<a href="<?php esc_url( get_permalink() ); ?>" rel="bookmark">Read the Article <span>&rang;</span></a>
		</div>

	</div><!-- /.entry-container -->

</article><!--.post-#-->
