<!-- get head template -->
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <!-- <?php while (have_posts()) : ?> -->
    <?php the_post(); ?>

    <main>
        <div class="main-wrap">
            <h2 class="sub__title"><?php the_title(); ?></h2>

            <?php the_content(); ?>

        </div>
    </main>
    <!-- <?php endwhile; ?> -->
<?php endif; ?>

<!-- get footer template -->
<?php get_footer(); ?>
