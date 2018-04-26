<?php
if (is_page('about-us'))
{
    get_template_part('about-us');
} elseif(is_page('actualites'))
{ 
    get_template_part('home'); 
} else {
    get_header();
?>
<!-- Faire un template pour une page classique -->
<?php 
    get_footer();
}
?>