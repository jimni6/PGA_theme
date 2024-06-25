<?php
/**
 * Template Name: PGA_plan for Elementor
 * 
 */
?>
<?php get_header() ?>
<div class="bg">
    <div class="container mt130">
        <h1 class="title">Plan</h1>
        <div class="containerType">
            <div class="heroSectionImg">
                <img src="<?= get_parent_theme_file_uri( 'assets/plan_2024.png' )?>" alt="Plan PGA 2024">
            </div>
            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>
