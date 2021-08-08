<?php

/*
    https://codex.wordpress.org/The_Loop
*/
get_header(); //gets header or include "header.php"
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();
        
        the_title();
        the_content();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

get_sidebar(); //gets sidebar
get_footer(); //gets footer or include "footer.php";
?>