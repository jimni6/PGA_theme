<?php
/**
 * Template Name: PGA_infos_pratiques for Elementor
 * 
 */
?>
<?php get_header() ?>
<div class="bg">
    <div class="container mt130">
        <h1 class="title">Infos</h1>
        <div class="containerType">
            <div class="heroSectionImg">
                <img src="<?= get_parent_theme_file_uri( 'assets/plan_2024.png' )?>" alt="Plan PGA 2024">
            </div>
            <div class="planningContainer">
                <h2 class="h2planning">
                    Samedi 6 Juillet
                </h2>
                <table class="planning">
                    <tbody>
                        <tr>
                            <th scope="row">10H</th>
                            <td>PRESENTATION DES INVITES</td>
                        </tr>
                        <tr>
                            <th scope="row">10H30</th>
                            <td>WAKINYANS</td>
                        </tr>
                        <tr>
                            <th scope="row">11H</th>
                            <td>INTERVIEW BO DE KERMOAL ET GUILLAUME BRIAT (KAAMELOTT)</td>
                        </tr>
                        <tr>
                            <th scope="row">12H</th>
                            <td>NEW DAWN</td>
                        </tr>
                        <tr>
                            <th scope="row">12H30</th>
                            <td>SAKURA</td>
                        </tr>
                        <tr>
                            <th scope="row">13H</th>
                            <td>JUST DANCE</td>
                        </tr>
                        <tr>
                            <th scope="row">14H</th>
                            <td>INTERVIEW DE GREGORY LAISNE,LAETITIA LEFEBVRE ET CHANTAL BAROIN</td>
                        </tr>
                        <tr>
                            <th scope="row">15H</th>
                            <td>CONCERT SECRET ZERO</td>
                        </tr>
                        <tr>
                            <th scope="row">16H</th>
                            <td>CONCOURS COSPLAY</td>
                        </tr>
                        <tr>
                            <th scope="row">17H30</th>
                            <td>L'AME DES ARMES</td>
                        </tr>
                        <tr>
                            <th scope="row">18H</th>
                            <td>TOMBOLA</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="planningContainer">
                <table class="planning">
                    <thead>
                        <h2 class="h2planning">
                            Dimanche 7 Juillet
                        </h2>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">10H</th>
                            <td>INTERVIEW BO DE KERMOAL ET GUILLAUME BRIAT (KAAMELOTT)</td>
                        </tr>
                        <tr>
                            <th scope="row">11H</th>
                            <td>CONCERT SECRET ZERO</td>
                        </tr>
                        <tr>
                            <th scope="row">12H</th>
                            <td>SAKURA</td>
                        </tr>
                        <tr>
                            <th scope="row">12H30</th>
                            <td>JUST DANCE</td>
                        </tr>
                        <tr>
                            <th scope="row">13H30</th>
                            <td>WAKINYANS</td>
                        </tr>
                        <tr>
                            <th scope="row">14H</th>
                            <td>INTERVIEW DE GREGORY LAISNE,LAETITIA LEFEBVRE ET CHANTAL BAROIN</td>
                        </tr>
                        <tr>
                            <th scope="row">15H</th>
                            <td>CONCOURS COSPLAY</td>
                        </tr>
                        <tr>
                            <th scope="row">16H30</th>
                            <td>L'AME DES ARMES</td>
                        </tr>
                        <tr>
                            <th scope="row">17H</th>
                            <td>TOMBOLA</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <?php the_content(); ?>
        </div>
    </div>
</div>
<?php get_footer() ?>