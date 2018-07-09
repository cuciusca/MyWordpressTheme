<?php get_header(); ?>

    <main class="row" id="">
        <div class="col-md-9">
        <?php while (have_posts()) :
                      the_post(); ?>

                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>

            <?php endwhile; ?>
        </div>

        <?php get_sidebar(); ?>
    </main>

<?php get_footer();