<?php
    get_header();
	$category_posts = get_the_category( $post->ID );
	$posttags = get_the_tags();
?>

    <main class="">	
        <section class="partners">
            <h1 class="uwu space-tile"><?= $post->post_title ?></h1><br>
            <div class="blog-page">
                <div class="blog-item">
                    <?php get_sidebar(); ?>
                </div>
				<article class="single-post">
					<div class="post-image">
					<?= get_the_post_thumbnail($post->ID) ?>
					</div>
					<?php
					if (has_category('', $post->ID)){
						foreach($category_posts as $category_post) : 
							echo '<div class="single-post-caption space-article">' . $category_post->name . ' - ' . date_i18n('j F Y', get_post_timestamp($post)) . '</div>';
						endforeach;
					} else {
						echo '<div class="single-post-caption space-article">Uncategorized</div>';
					}
					?>
					<div class="space-article title-color">
						<?php echo $post->post_content ?>
					</div>
						<ul>
						<?php
						if (has_tag('', $post->ID)){
							foreach($posttags as $tag) : ?>
								<li><?php echo $tag->name ?></li>
						<?php	endforeach;
						} else {
							echo '<div class="tags">Pas de tags</div>';
						}
						?>
						</ul>
						<div class="comments-space">
						<?php if (comments_open()){
							comments_template();
						} ?>
						</div>
					</div>
				</article>
            </div>
        </section>
	</main>
    <script>
        document.getElementById("logo").classList.remove("white-svg");
    </script>

<?php get_footer(); ?>