<?php get_header() ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="container">
        <div class="postType">
            <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <div class="postTypeText">
                <h1 class="title"><?php the_title() ?></h1>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
<?php endwhile;
endif; ?>


<?php get_footer() ?>