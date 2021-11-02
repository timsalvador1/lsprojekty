<?php


get_header();


$image = wp_get_attachment_image( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

// echo $image;


// // /** banner */
// if( $image ) {
// 	get_template_part( 'template-parts/parts-front', 'inner-banner' );
// }

echo '<div class="content default-page service-detail">';
		echo '<div class="wrapper">' .
			'<div class="mid">'.
				'<div class="breadcrumb">'. ah_breadcrumb() .'</div>'.
				'<div class="page-content" id="post-' . get_the_ID() .'">';
					if (have_posts()) : while (have_posts()) : the_post();
          echo '<h1 class="text-center">' . get_the_title() . '</h1>';
						if( $image ) {
                echo '<div class="inbanner image-src mb-30">'. $image .'</div>';
						}

						echo '<div class="entry">';
							the_content();
							wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number'));
						echo '</div>';
					   endwhile;
						wp_reset_query();
					echo '</div>';
				echo '</div>';
			echo '</div>';
			get_template_part( 'template-parts/parts-front', 'info' );

			echo '<div class="wrapper">'; edit_post_link('Edit this entry.', '<p>', '</p>'); echo '</div>';
		echo '</div>';
	endif;



get_footer();

?>
