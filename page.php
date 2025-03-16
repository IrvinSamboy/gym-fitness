<?php 
    get_header()
?>

    <main>
        <?php
            while(have_posts()) : 
                
                the_post();

                the_title('<h1 class="text-primary text-center">', '</h1>');

                the_content();
            endwhile;
        ?>
    </main>
</body>
</html>