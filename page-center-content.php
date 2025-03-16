<?php
    /**
     * Template Name: Center content (No side bars)
    */
    get_header()
?>

    <main class="container section center-content">
        <?php
            while(have_posts()) : 
                
                the_post();

                the_title('<h1 class="text-primary text-center">', '</h1>');
                
                if(has_post_thumbnail()){
                    the_post_thumbnail('full', array(
                        'class' => 'featured_image'
                    ));
                }

                the_content();
            endwhile;
        ?>
    </main>
</body>
</html>