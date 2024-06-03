<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        PeriGeekAsia
    </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Dekko&display=swap" rel="stylesheet">
    <?php wp_head() ?>
</head>
<body>
    <nav>
        <div class="navbar">
            <div class="container nav-container">
                <input class="checkbox" type="checkbox" name="" id="" />
                <div class="hamburger-lines">
                    <span class="line line1"></span>
                    <span class="line line2"></span>
                    <span class="line line3"></span>
                </div>
                <?php if ( function_exists( 'the_custom_logo' ) ) { the_custom_logo();} ?>
                <?php wp_nav_menu([
                    'theme_location'=>'header',
                    'container'=> false,
                    ]); ?>
            </div>
        </div>
    </nav>