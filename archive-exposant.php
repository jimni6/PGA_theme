<?php get_header() ?>
<div class="bg">

    <div class="container mt130">
        <h1 class="title">Tous nos exposants sont ici!</h1>
        <?php if (have_posts()): ?>
            <!-- <div class="containerType" style="max-width: 550px;">
                <p>Vous voulez vous inscrire comme exposant?</p>
                <div class="inscriptionsButtons">
                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScE_mCj13y4ZvCLF2K2m9yfMFBJxtfbkGZVLvMuISNuszkxmw/viewform">
                        <button>INSCRIPTION PRO</button>
                    </a>
                    <a target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLSfXekDeurTKfeo1cU74pNWohJzWmNDnMZXSk8exZOVgjKkjLA/viewform?vc=0&c=0&w=1&flr=0">
                        <button>INSCRIPTION ASSO</button>
                    </a>
                </div>
            </div> -->
            <div class="exposantsType">
                <div class="container container_filter">
                    <div class="filters filter-button-group">
                        <ul>
                            <h4>
                                <li class="active" data-filter="*">Tous les exposants</li>
                                <?php
                                    $terms = get_terms('exposant_category');
                                    foreach ($terms as  $term) { 
                                ?>
                                <li data-filter=".<?php  echo $term->slug; ?>"><?php echo $term->name; ?></li>
                            <?php  }
                            ?>
                            </h4>
                        </ul>
                    </div>
                    <div class="content grid">
                        <?php
                            $args = array(
                            'post_type' => 'exposant',
                            'posts_per_page' => 100
                            );

                            $query = new WP_Query($args);

                            while ($query->have_posts()) {
                            $query->the_post();

                            $termsArray = get_the_terms($post->ID, 'exposant_category');

                            $termsSLug = "";
                            foreach ($termsArray as $term) {
                                $termsSLug .= $term->slug . ' ';
                            }
                        ?>
                        <div class="single-content <?php echo  $termsSLug; ?>  grid-item">
                            <div class="archiveCard">
                                <?php 
                                    $website = get_post_meta(get_the_ID(), 'exposant_website', true);
                                    $logo = get_the_post_thumbnail_url();
                                    echo '<a href="' . esc_url($website) . '">
                                    <img class="p2" src="' . $logo . '">
                                    </a>';
                                ?>
                                <h2 class="title">
                                    <?php the_title() ?>
                                </h2>
                                <div class="archiveText">
                                    <?php echo  $termsSLug; ?>
                                </div>
                            </div>
                        </div>
                    <?php  }
                    wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <h1>Encore un peu de patience, nos exposants arrivent!</h1>
        <?php endif; ?>
    </div>

</div>


<?php get_footer() ?>