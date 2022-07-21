<?php
    /*
    Template Name: blog
    */
    get_header();
?>

    <main class="">	
        <section class="partners">
            <h1 class="uwu"><?= $post->post_title ?></h1><br>
            <div class="blog-page">
                <div class="blog-item">
                    <?php get_sidebar(); ?>
                </div>
                <div class="blog-item">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 4, // Number of recent posts thumbnails to display
                    'post_status' => 'publish' // Show only the published posts
                )); ?>
                <?php foreach( $recent_posts as $post_item ) : ?>
                    <?php $category_posts = get_the_category( $post_item['ID'] ) ?>
                    <div class="all-recent-post">
                        <?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>
                        <?php
						if (has_category('', $post_item['ID'])){
                            foreach($category_posts as $category_post) : 
                                echo '<div class="top-left">' . $category_post->name . '</div>';
                            endforeach;
						} else {
                            echo '<div class="top-left">Uncategorized</div>';
                        }
                        ?>
                        <div>
                            <a class="title-post-color" href="<?php echo get_permalink($post_item['ID']) ?>">
                            <h4 class="post-caption title-color"><?php echo $post_item['post_title'] ?></h4>
                            </a>
                            <p class="post-content-blog"><?php echo $post_item['post_content'] ?></p>
                        </div>
                        
                    </div>    
                <?php endforeach; ?>
                </div>
            </div>
        </section>
	</main>
    <script>
        document.getElementById("logo").classList.remove("white-svg");
    </script>

<?php get_footer(); ?>