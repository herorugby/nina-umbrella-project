<!-- get header -->
<?php get_header('sub'); ?>

<main>
    <div class="main-wrap">
        <section id="items" class="main__items">
            <h2 class="sub__title">Items</h2>
            <section class="all-items">
                <div class="item-container">

                    <!-- <?php // get_terms を使ったターム一覧の表示
                            $taxonomy_terms = get_terms('item_cate'); // タクソノミースラッグを指定
                            if (!empty($taxonomy_terms) && !is_wp_error($taxonomy_terms)) {
                                echo '<nav class="category-wrapper">';
                                echo '<ul class="works-category-list">';
                                foreach ($taxonomy_terms as $taxonomy_term) : // foreach ループの開始
                            ?>
                            <li class="category-item"><a href="<?php echo get_term_link($taxonomy_term); ?>" class="works-category<?php if ($taxonomy_term->slug === $term) {
                                                                                                                                        echo ' current';
                                                                                                                                    } ?>"><?php echo $taxonomy_term->name; ?></a></li>
                    <?php
                                endforeach; // foreach ループの終了
                                echo '</ul>';
                                echo '</nav>';
                            }
                    ?>
                    <div class="works-wrapper">
                        <section>
                            <?php query_posts($query_string . "&pst_type=jiseki&posts_per_page=2&paged='.$paged"); ?>
                            <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                                    <div>

                                        <?php
                                        $terms = get_the_terms(get_the_ID(), 'works_type');
                                        if (!empty($terms)) : if (!is_wp_error($terms)) :
                                        ?>

                                                <?php foreach ($terms as $term) : ?>
                                                    <span class="icon01 <?php echo "$term->slug"; ?>"><?php echo $term->name; ?></span>
                                                <?php endforeach; ?>

                                        <?php endif;
                                        endif; ?>

                                        <h2 class="h2Style03"><?php the_title(); ?></h2>
                                        <p><?php the_content(); ?></p>
                                    </div>
                            <?php endwhile;
                            endif; ?>
                        </section>
                    </div> -->





                    <?php
                    echo '<ul class="category-btn">';
                    $catargs = array(
                        'taxonomy' => 'item_cate',
                    );
                    $catlists = get_categories($catargs);
                    //『全て』のボタンを別で出力
                    echo '<li>', '<a href=" " class="all is-current">全て</a>', '</li>';
                    //『各タクソノミー』一覧を出力　*今回はタクソノミーのslug名を使用
                    foreach ($catlists as $category) {
                        echo '<li><a href="" class="' . $category->slug . '">' . $category->name . '</a></li>';
                    }
                    echo "</ul>";
                    ?>


                    <!-- <div class="widget-area">
                        <p class="widget-cap">ウィジェット</p>
                    </div> -->

                    <div class="all-items-container">

                        <!-- 一覧画面の表示 -->
                        <?php
                        $args = [
                            'post_type' => 'item', // カスタム投稿名が「item」の場合
                            // 'posts_per_page' => 2, // 表示させる数
                        ];
                        $my_query = new WP_Query($args); ?>
                        <?php if ($my_query->have_posts()) : ?>
                            <?php while ($my_query->have_posts()) : ?>
                                <?php $my_query->the_post(); ?>

                                <a href="#<?php the_ID(); ?>" class="all-items__details">
                                    <?php the_title(); ?>
                                    <div class="all-items__img">
                                        <?php the_post_thumbnail('thumbnail'); ?>
                                    </div>
                                </a>

                            <?php endwhile; ?>
                        <?php else : ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>

                        <!-- 個別投稿を見るモーダル -->
                        <?php
                        $args = [
                            'post_type' => 'item',
                            // 'posts_per_page' => 5,
                        ];
                        $my_query = new WP_Query($args); ?>
                        <?php if ($my_query->have_posts()) : ?>
                            <?php while ($my_query->have_posts()) : ?>
                                <?php $my_query->the_post(); ?>
                                <div class="remodal" data-remodal-id="<?php the_ID(); ?>">
                                    <button data-remodal-action="close" class="remodal-close"></button>
                                    <h1><?php the_title(); ?></h1>
                                    <?php the_content(); ?>
                                    <br>
                                    <button data-remodal-action="cancel" class="remodal-cancel">閉じる</button>
                                    <button data-remodal-action="confirm" class="remodal-confirm">アイテム一覧</button>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                        <?php endif; ?>
                        <?php wp_reset_postdata(); ?>







                        <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="test写真2">
                            </picture>
                        </div>
                        <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="test写真2">
                            </picture>
                        </div>
                        <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test1.jpg" alt="test写真1">
                            </picture>
                        </div>
                        <div class="all-items__details">
                            <picture class="all-items__img">
                                <source media="(min-width: 960px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <source media="(min-width: 560px)" srcset="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/test2.jpg" alt="test写真2">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</main>

<!-- get footer -->
<?php get_footer(); ?>
