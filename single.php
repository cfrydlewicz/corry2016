<?php get_header(); ?>

<?php the_post(); ?>
<article class="container single post-<?php the_ID(); ?>"><div class="inner">
  <div class="text-container">

    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <div class="entry-meta-container">
      <div class="entry-meta date">
        <p><?php post_date(); ?></p>
      </div>

      <?php if ( get_comments_number() > 0 ) : ?>
        <div class="entry-meta comments-exist"><?php comments_popup_link( '<!--No comments-->', '1 comment', '% comments', 'comments-link', '<!--Comments are off for this post-->'); ?></div>
      <?php endif; ?>

      <div class="entry-meta categories">
        <p>Filed Under: <span class="cat-links"><?php
          $taxonomy = 'category';
          $post_terms = wp_get_object_terms( $post->ID, $taxonomy, array( 'fields' => 'ids' ) );
          $separator = ', ';
          if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) {
            $term_ids = implode( ',' , $post_terms );
            $terms = wp_list_categories( 'title_li=&style=none&echo=0&taxonomy=' . $taxonomy . '&include=' . $term_ids );
            $terms = rtrim( trim( str_replace( '<br />',  $separator, $terms ) ), $separator );
            echo  $terms;
            } ?></span></p>
      </div>

      <?php if ( is_admin() ) {
        edit_post_link( __( 'Edit' ), '<div class="entry-meta edit-link">', '</div>' );
      } ?>
    </div><!--.entry-meta-container-->

    <?php if ( has_post_thumbnail() ) {
      echo "<a href=\"".wp_get_attachment_url( get_post_thumbnail_id() )."\">";
      the_post_thumbnail('full');
      echo "</a>";
    } ?>

    <div class="entry-content">
      <?php the_content(); ?>
    </div><!-- .entry-content -->

    <div class="entry-meta-container">
      <div class="entry-meta categories">
        <p>Filed Under: <span class="cat-links"><?php if ( !empty( $post_terms ) && !is_wp_error( $post_terms ) ) { echo $terms; } ?></span></p>
        <p>Tags: <span class="tag-links"><?php the_tags( '', ', ', '' ); ?></span></p>
      </div>

      <?php if ( is_admin() ) {
        edit_post_link( __( 'Edit' ), '<div class="entry-meta edit-link">', '</div>' );
      } ?>
    </div><!--.entry-meta-container-->

    <div class="time-nav">
      <?php if (strlen(get_next_post(TRUE)->post_title) > 0) { ?>
        <h3>Next Post:</h3>
        <div class="newer"><?php next_post_link('%link', '%title', TRUE); ?></div>
      <?php } ?>
      <?php if (strlen(get_previous_post(TRUE)->post_title) > 0) { ?>
        <h3>Previous Post:</h3>
        <div class="older"><?php previous_post_link('%link', '%title', TRUE); ?></div>
      <?php } ?>
    </div><!--.time-nav-->

    <?php if ( comments_open() || get_comments_number() ) {
      comments_template();
    } ?>

  </div><!--.text-container-->
</div></article>

<?php
// get_sidebar();
get_footer();
?>