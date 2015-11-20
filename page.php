<?php get_header(); ?>

<?php the_post(); ?>
<article class="container page page-<?php the_ID(); ?>"><div class="inner">
  <?php if ( is_admin() ) {
    edit_post_link( __( 'Edit' ), '<div class="entry-meta edit-link">', '</div>' );
  } ?>

  <div class="page-content">
    <?php the_content(); ?>
  </div><!-- .page-content -->

</div></article>

<?php get_footer(); ?>