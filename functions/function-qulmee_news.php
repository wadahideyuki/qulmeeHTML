<?php

function show_press_list()
{
    ob_start(); // 出力バッファ開始

    $args = array(
        'post_type' => 'post',
        'cat' => 13,
        'posts_per_page' => 2,
        'meta_key' => 'products',
        'meta_value' => 'qulmee'
    );
    $the_query = new WP_Query($args);
    if ($the_query->have_posts()) :
        while ($the_query->have_posts()) : $the_query->the_post();
            $days = get_post_meta(get_the_ID(), 'press_day', true);
?>
            <li class="item">
                <a href="<?php the_permalink(); ?>">
                    <picture>
                        <?php
                        $image_url = get_field('thumbnail');
                        $dummy_image_url = '/wp-content/themes/corpo-site/assets/img/qulmee2025/default.webp';

                        if ($image_url) {
                            echo '<img src="' . esc_url($image_url) . '" alt="説明文">';
                        } else {
                            echo '<img src="' . esc_url($dummy_image_url) . '" alt="説明文">';
                        }

                        ?>
                    </picture>
                    <p class="date">
                        <?php echo $days ? esc_html($days) : get_the_time('Y.m.d'); ?>
                    </p>
                    <p class="description"><?php the_title(); ?></p>
                </a>
            </li>
<?php
        endwhile;
    endif;
    wp_reset_postdata();

    return ob_get_clean(); // バッファ出力を返す
}
add_shortcode('press_list', 'show_press_list');
