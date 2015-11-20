<?php get_header(); ?>

<style>
  footer {position: absolute; bottom: 0px;}
</style>

<article class="container listing"><div class="inner">
  <section class="error404">
    <div class="thumbnail-container" style="background-image: url('<?php bloginfo('template_url');?>/images/404.jpg');"></div>
    <div class="text-container">
      <h2 class="entry-title">No Results Found</h2>
      <div class="entry-summary">
        <p>I'm sorry, but no results were found. Please try using another search or return to the <a href="/">home page</a>.</p>
      </div><!-- .entry-summary -->
    </div><!--.text-container-->
  </section>
</div></article>

<?php get_footer(); ?>