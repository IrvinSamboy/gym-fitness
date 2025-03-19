<?php
    /**
     * Template Name: List All classes
    */
    get_header()
?>

    <main class="container section">
      <ul>
        <?php
            $args = array(
                'post_type' => 'gymfitness_clases'
            );

            $classes = new WP_Query($args);
            
            while($classes->have_posts()){
                $classes->the_post();
            ?>
                <li><?php the_title() ?></li>
            <?php
            }
        ?>
      </ul>
    </main>

<?php

get_footer();

?>