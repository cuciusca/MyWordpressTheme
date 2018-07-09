<?php get_header(); ?>

    <main class="row">
        <div class="col-md-9">
            <div class="card-deck">
            <?php
                if (have_posts()) :
                    while (have_posts()) :
                            the_post(); ?>

                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title"><?php the_title(); ?></h2>
                            <p class="card-text"><?php the_content(); ?></p>

                            <p class="card-text">
                                <small class="text-muted">
                                    <?php the_date('j F Y'); ?> at 
                                    <?php the_time('g:i a'); ?>
                                </small>
                            </p>
                        </div>
                    </div>
                <?php endwhile; endif; ?>
            </div>
        </div>

        <?php get_sidebar(); ?>
    </main>

<?php get_footer();
