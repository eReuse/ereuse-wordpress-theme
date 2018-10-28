<article id="post-<?php the_ID(); ?>" class="margin-v-t-0">
  <header>
    <h1 class="container"><?php the_title(); ?></h1>
  </header><!-- .entry-header -->

  <div class="entry-content container">
	  <?php the_content(); ?>
    <div class="clearfix"></div>
	  <?php
	  /**
	   * This wp_link_pages option adapt to use bootstrap pagination style.
	   * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
	   */
	  wp_link_pages( array(
		  'before'    => '<div class="page-links">' . __( 'Pages:', 'bootstrap-basic' ) . ' <ul class="pagination">',
		  'after'     => '</ul></div>',
		  'separator' => ''
	  ) );
	  ?>
  </div><!-- .entry-content -->

  <footer class="entry-meta container">
	  <?php bootstrapBasicEditPostLink(); ?>
  </footer>
</article><!-- #post-## -->
