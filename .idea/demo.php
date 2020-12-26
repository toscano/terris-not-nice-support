<?php get_header(); ?>
<?php

if( have_posts() ):				//check if we have any posts in the database, goes true if yes

    while( have_posts() ):	//Keeps printing the content until i have posts

        the_post();?> 			<!--through this function,we can access the title of posts,the category, the content, the time, and all the parameters-->

        <h3><?php the_title(); ?></h3>			<!--through this function,we can display the title of posts	-->

        <p><?php  the_content(); ?></p>			<!--through this function,we can display the content of posts-->

        <?php endwhile;

    endif;

        ?>
        <?php get_footer(); ?>