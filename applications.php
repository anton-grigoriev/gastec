<section id="apps">
	<div class="container">
		<div class="row applications">
			<div class="col-md-12">
				<h2 class="front-page-h2">Где применяются индикаторные трубки?</h2>
			</div>
			<?php				
			$the_branches_query = new WP_Query(
				array(
					'order' => 'ASC',
					'category_name' => 'otraslevye-resheniya'
					)
				);
			
			if ( $the_branches_query->have_posts() ) {
				while ( $the_branches_query->have_posts() ) {
					$the_branches_query->the_post();
						echo
						'<div class="col-lg-4 col-md-6">
							<div class="media-application">
								<div class="media-left">'
									 . get_the_post_thumbnail( $post_id, 'full', array('class' => 'media-object media-img') ) . 
								'</div>
								<div class="media-body media-index">
									<h3 class="tubes-subheader">' . get_the_title() . '</h3>
									<p>' . get_the_excerpt() . '</p>
								</div>
							</div>
						</div>';
					  }
				  } else {
					  	echo 'Пустая категория';
					  }
			?>
		</div>
	</div>
</section>