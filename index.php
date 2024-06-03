<?php get_header() ?>

<div class="banniere">
    <img src="<?= get_parent_theme_file_uri( 'assets/PGA_2023_Paysage_DEF-1-scaled.jpg' )?>" alt="">
</div>

<?php if (have_posts()): ?>
    <ul>
    <?php while (have_posts()) : the_post()?>
        <li><?php the_title() ?></li>
    <?php endwhile ?>
    </ul>
<?php else: ?>
    <h1>Pas d'articles</h1>
<?php endif; ?>

<?php get_footer() ?>