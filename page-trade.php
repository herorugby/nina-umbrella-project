<!-- get header -->
<?php get_header('sub'); ?>

<ul class="container breadcrumb__list">
    <li class="breadcrumb__item"><a href="<?php echo esc_url(home_url('/')); ?>">HOME</a></li>
    <li class="breadcrumb__item">>></li>
    <li class="breadcrumb__item"><?php the_title(); ?></li>
</ul>

<!-- get contents -->
<?php the_content(); ?>

<!-- get footer -->
<?php get_footer(); ?>
