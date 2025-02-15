<?php get_header(); ?>

<main id="primary" class="site-main">
    <section class="banner">
        <video class="banner-video" autoplay muted loop>
            <source src="<?php echo get_theme_file_uri() . '/assets/video/Studio-Koukaki-video-header.mp4'; ?>" type="video/mp4">
        </video>
        <img class="overlay-image" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="Titre de la vidéo">
    </section>

    <section class="banner-mobile">
        <img class="floating-image" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?>" alt="Titre de la vidéo">
    </section>


    <section id="story" class="story">
        <h2><span>L'histoire</span></h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <?php
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);

        // Pass the query to the template part
        set_query_var('characters_query', $characters_query);
        ?>

        <?php get_template_part('parts/characters'); ?>

        <article id="place">
            <div>
                <h3><span>Le Lieu</span></h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
            <div class="cloud big-cloud"></div>
            <div class="cloud little-cloud"></div>
        </article>


    </section>

    <section id="studio">
        <h2><span>Studio Koukaki</span></h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <!-- Include the oscars.php template part -->
    <?php get_template_part('oscars'); ?>
</main><!-- #main -->

<?php get_footer(); ?>