<?php 
$categories = get_categories();
$posttags = get_the_tags();
?>

<aside class="sidebar">
	<div>
	<h6>Search</h6>
    <div class="search">
		<?php get_search_form(); ?>
    </div>
    <div class="recent-posts">
		<h6 class="mb-4 title-color">Recents posts</h6>
		<?php
		$recent_posts = wp_get_recent_posts(array(
			'numberposts' => 4, // Number of recent posts thumbnails to display
			'post_status' => 'publish' // Show only the published posts
		)); ?>
		<?php foreach( $recent_posts as $post_item ) : ?>
		<div class="recent-post">
			<?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>

			<div class="recents-post text-owo">
				<a class="title-post-color" href="<?php echo get_permalink($post_item['ID']) ?>">
				<p class="slider-caption-class title-post-color"><?php echo $post_item['post_title'] ?></p>
				</a>
				<p><p class="slider-caption-class date-post-color"><?php echo get_the_date( 'j F, Y' ); ?></p></p>
			</div>
			
		</div>    
		<?php endforeach; ?>
    </div>

	<div class="archives">
		<h3 class="mb-4 title-color">Archives</h3>
		<ul>
			<li><?php wp_get_archives(); ?></li>
		</ul>
    </div>

    <div class="categories">
		<h3 class="mb-4 title-color">Categories</h3>
		<ul>

		<?php foreach( $categories as $categorie) : ?>
			<a href="<?php echo get_category_link($categorie->term_id) ?>">
			<li><?php echo $categorie->name ?></li>
		<?php endforeach; ?>
		</ul>
    </div>
	<div class="tags">
		<h3 class="mb-4 title-color">Tags</h3>
		<ul>

		<?php foreach( $posttags as $tag) : ?>
			<li><?php echo $tag->name ?></li>
		<?php endforeach; ?>
		</ul>
    </div>
</aside>