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
                    </div>
                </div>
           
            <?php endwhile; endif; ?>
        </div>
        </div>

        <?php get_sidebar(); ?>
    </main>

<?php get_footer();
