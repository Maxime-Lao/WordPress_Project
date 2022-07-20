<aside class="sidebar">
	<?php dynamic_sidebar( 'zone-1' ); ?>
	<?php
		get_search_form(
			array(
				'aria_label' => __( 'Type to search', 'esgi' ),
			)
		);
	?>
</aside>