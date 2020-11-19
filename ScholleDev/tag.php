<?php get_header(); ?>


<div class="tag-container">
    <span>Articles by tag:</span>

    <?php

    $terms = get_terms(array(
        'taxonomy' => 'post_tag',
        'hide_empty' => true,
        'orderby' => "count",
        'order' => "DESC",
    ));

    $i = 0;

    foreach ($terms as $value) {
        $i++;
        echo "<span class=\"tag ";
        if ($i < 5)
            echo "large-tag";
        elseif (true) echo "medium-tag";
        else echo "small-tag";
        echo "\"><a href='" . get_home_url() . "/tag/" . $value->slug . "'>" . $value->slug .  "</a></span>";
    }
    ?>
</div>

<?php
$tag = get_queried_object();
?>

<h1>
    <?php echo '#' . $tag->slug ?>
</h1>


<div class="post-summary-container main-content">
    <?php
    if (have_posts()) :  ?>
        <?php while (have_posts()) : the_post(); ?>

            <div class="post-summary-item">
                <a href="<?php the_permalink(); ?>">

                    <?php if (has_post_thumbnail()) : ?>
                        <img src="<?php echo the_post_thumbnail_url() ?>" />

                    <?php else : ?>
                        <img src="<?php echo get_template_directory_uri() . '/assets/post_image_ph.png' ?>" />
                    <?php endif; ?>
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