<?php get_header() ?>
<div class="bg">

    <div class="container mt130">
        <!-- <h1 class="title">Tous nos invités sont ici!</h1> -->
        <?php if (have_posts()): ?>
            <?php while (have_posts()) : the_post()?>
                <!-- <a href="<?php the_permalink() ?>">  -->
                    <div class="archiveType">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <div class="archiveDescription">
                            <h2 class="title">
                                <?php the_title() ?>
                            </h2>
                            <div class="archiveText">
                                <?php the_content(); ?>
                            </div>
                            <!-- <a href="<?php the_permalink() ?>">
                                <span style="font-weight: bold">Voir plus...</span>
                            </a> -->
                        </div>
                    </div>
                <!-- </a> -->
            <?php endwhile ?>
        <?php else: ?>
		<div class="containerType">
            <h2>Encore un peu de patience, nos invités arrivent!</h2>
	</div>
        <?php endif; ?>
    </div>

</div>


<?php get_footer() ?>