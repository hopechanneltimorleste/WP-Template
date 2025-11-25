<?php get_header(); ?>

<div class="row">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" class="card-img-top">
                <?php endif; ?>
                <div class="card-body">
                    <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
    <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts found.'); ?></p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>