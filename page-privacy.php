<!-- get head template -->
<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <!-- <?php while (have_posts()) : ?> -->
    <?php the_post(); ?>

    <main>
        <div class="main-wrap">
            <section class="sec-block__none">
                <h2 class="sub__title"><?php the_title(); ?></h2>
                <p class="description">当社では、お客様の個人情報について以下のとおり取り扱い、サービスを提供いたします。</p>
            </section>

            <?php the_content(); ?>

        </div>
    </main>
    <!-- <?php endwhile; ?> -->
<?php endif; ?>

<!-- get footer template -->
<?php get_footer(); ?>
