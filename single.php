<?php get_header('apps'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-title"><?=get_the_title() ?></h1>
        </div>
    </div>
    <?php 
    if (have_posts()): 
  	    while (have_posts()):
  	        the_post();
        	the_content();
			//comments_template();
		endwhile; 
	endif;
    ?>
</div>

<?php get_footer(); ?>