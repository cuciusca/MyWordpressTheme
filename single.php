<?php get_header(); ?>

    <main class="row">
        <div class="col-md-9">
        <?php
            while (have_posts()) :
                the_post(); ?>

                <h2><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>

            <?php the_post_navigation(array(
                'prev_text'          => 'Previous posts',
                'next_text'          => 'Next posts',
                'screen_reader_text' => 'Post navigation',));

            endwhile; ?>
        </div>

        <?php get_sidebar(); ?>
    </main>

<?php get_footer();
