<?php get_header() ?>



<div class="banniere">
    <img src="<?= get_parent_theme_file_uri( 'assets/luffy.png' )?>" alt="">
    <blockquote class="speech bubble">Peri Geek Asia revieennntttt!</blockquote>
</div>
<div class="containerType">
    <div class="heroSectionImg">
        <img src="<?= get_parent_theme_file_uri( 'assets/PGA-GRANDE-AFFICHE--2024.jpg' )?>" alt="Affiche de l'évènement PGA 2024">
    </div>
    <h2>La 5ème édition sera le 6 et 7 Juillet au parc des expositions du périgord</h2>
    <div class="instagram-feed">
        <?php echo do_shortcode('[instagram-feed feed=1]'); ?>
    </div>
</div>

<?php get_footer() ?>