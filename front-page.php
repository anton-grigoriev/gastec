<?php get_header(); ?>

<?php get_template_part( 'jumbotron' ); ?>

<?php get_template_part( 'tubes' ); ?>

<?php get_template_part( 'applications' ); ?>

<section id="contacts">
	<div class="container">
		<div class="row contact">
			<div class="col-md-12">
				<h2 class="front-page-h2">Контактная информация</h2>
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
	</div>
</section>
<?php get_footer(); ?>
</body>
</html>

