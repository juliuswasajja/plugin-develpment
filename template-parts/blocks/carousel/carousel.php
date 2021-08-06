<?php

/**
 * Carousel Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during AJAX preview.
 * @param   (int|string) $post_id The post ID this block is saved to.
 */

$id = 'mrk-carousel-' . $block['id'];

if( !empty($block['anchor']) ) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'mrk-carousel splide';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$carousel_items = get_field('carousel_icons'); 

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
<?php
    if ( is_array( $carousel_items[0]['image'] ) ) {
        ?>
        <div class="splide__track">
            <ul class="splide__list">
                <?php
                    foreach ( $carousel_items as $carousel_item ) {
                        
                        $link      = $carousel_item['link'];
                        $image_url = $carousel_item['image']['url'];

                        printf( '<li class="splide__slide">
                                <a href="%s" target="_self">
                                    <img src="%s" />
                                </a>
                            </li>',
                            $link,
                            $image_url 
                        );
                    }
                ?>
            </ul>
        </div>

        <?php

    } else {
        $message = __( 'Please add some Images and links for this work', 'bgc-library' );
        printf(
            '<p><strong>%s</strong></p>',
            $message,
        );
    }
?>
