<?php get_header(); ?>

<?php
    if (have_posts()) :  ?>
        <?php while (have_posts()) : the_post(); ?>
        
        <div class="article-container annotated-links main-content" >
                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php if (has_post_thumbnail()): ?>
                    <img class="article-image"  src="<?php echo the_post_thumbnail_url() ?>" />

                  <?php else: ?>
                    <img class="article-image"  src="<?php echo get_template_directory_uri() . '/assets/post_image_ph.png' ?>" />
                    <?php endif;?>

                    <?php the_content(); ?>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>

<?php get_footer(); ?>