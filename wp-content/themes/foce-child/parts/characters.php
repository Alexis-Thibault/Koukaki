<?php
$characters_query = get_query_var('characters_query');
?>

<article id="characters">
    <h3 id="title-characters"><span>Les personnages</span></h3>

    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            while ($characters_query->have_posts()) {
                $characters_query->the_post();
                echo '<div class="swiper-slide">';
                echo '<figure>';
                echo get_the_post_thumbnail(get_the_ID(), 'full');
                echo '<figcaption>' . get_the_title() . '</figcaption>';
                echo '</figure>';
                echo '</div>';
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</article>
