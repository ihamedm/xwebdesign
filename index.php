<?php get_header();?>

<?php
if(have_posts()) : while(have_posts()) : the_post();
?>

<article class="border-b border-slate-100 p-6">
    <h2><?php the_title();?></h2>
    <?php the_content('ادامه مطلب ...');?>
</article>

<?php endwhile;endif;wp_reset_query();?>

<?php get_footer();?>