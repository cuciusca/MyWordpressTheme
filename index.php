<?php get_header(); ?>

    <main class="row">
        <div class="col-9">
        <?php
            if (have_posts()) :
                while (have_posts()) :
                    the_post(); ?>

                    <h2><?php the_title(); ?></h2>
                    <p><?php the_content(); ?></p>

            <?php endwhile; endif; ?>
        </div>

        <?php get_sidebar(); ?>
    </main>

<?php get_footer();
