<section class="post post-<?php the_ID(); ?>">
  <div class="thumbnail-container" style="background-image: url('<?php get_post_thumbnail_url() ?>');"></div>
  <div class="text-container">
    <?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" class="special" rel="bookmark" data-hover="' . get_the_title() . '">', '</a></h2>' ); ?>

    <div class="entry-meta-container">
      <div class="entry-meta date">
        <p><?php post_date(); ?></p>
      </div>

      <?php if ( get_comments_number() > 0 ) : ?>
        <div class="entry-meta comments-exist"><?php comments_popup_link( '<!--No comments-->', '1 comment', '% comments', 'comments-link', '<!--Comments are off for this post-->'); ?></div>
      <?php endif; ?>

    </div><!--.entry-meta-container-->

    <div class="entry-summary">
      <?php the_excerpt(); ?>
    </div><!-- .entry-summary -->

    <div class="entry-meta-container">
      <div class="entry-meta categories">
        <p>Filed Under: <span class="cat-links"><?php
          $taxonomy = 'category';
          $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
          $separator = ', ';
          if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {
            $term_ids = implode( ',' , $post_terms );
            $terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
            $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
            echo $terms;
            } ?></span></p>
        <p>Tags: <span class="tag-links"><?php the_tags( '', ', ', '' ); ?></span></p>
      </div>

      <?php if ( is_admin() ) {
        edit_post_link( __( 'Edit' ), '<div class="entry-meta edit-link">', '</div>' );
      } ?>
    </div><!--.entry-meta-container-->

  </div><!--.text-container-->

</section><!--.post-#-->
