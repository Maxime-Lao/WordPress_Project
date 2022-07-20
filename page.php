<?php get_header(); ?>
	<main>
		<div class="container">
			<div class="row">
				<div class="">
				<?php if(is_front_page()){
					include('template-parts/home.php');
				}else{
					echo '<h1 class="page-title">' . $post->post_title . '</h1>';
					echo '<div class="page-content"class>';
					the_content();
					echo '</div>';
				}
				?>
				</div>
			</div>
		</div>
	</main>

<?php get_footer(); ?>