<?php get_header(); ?>

<div class="tag-container">
            <span>Top tags:</span>
            <span class="tag">wordpress</span>
            <span class="tag">ssl</span>
            <span class="tag">hosting</span>
            <span class="tag">dns</span>
        </div>
<div class="post-summary-container main-content">
    <?php
    if (have_posts()) :  ?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="post-summary-item">
                <a href="<?php the_permalink(); ?>">

                  <?php if (has_post_thumbnail()): ?>
                    <img src="<?php echo the_post_thumbnail_url() ?>" />

                  <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() . '/assets/post_image_ph.png' ?>" />
                    <?php endif;?>
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <?php the_excerpt(); ?>
                </a>

            </div>

        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>