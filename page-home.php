<?php get_header();?>

    <main class="articles flex-col gap-6 flex-1">
<?php
$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
$new_posts = array(
    'paged'          => $paged,
    'posts_per_page' => 1
);
$q = new WP_Query($new_posts);

if($q->have_posts()) : while($q->have_posts()) : $q->the_post();
    ?>

    <article class="border-b border-slate-100 pb-6 mb-6">
        <div class="flex gap-6">
            <?php if(has_post_thumbnail()): ?>
            <div class="bg-slate-100 rounded-md overflow-hidden shrink-0">
                <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                <?php the_post_thumbnail('spd-thumb', array('class' => 'cover'));?>
                </a>
            </div>
            <?php endif;?>

            <div class="">
                <h2 class="font-bold text-xl ">
                    <a href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
                </h2>
                <div class="font-light font-dot-4 prose max-w-full">
                    <?php the_content('<span class="text-primary">ادامه مطلب ...</span>');?>
                </div>
            </div>
        </div>

    </article>

<?php endwhile;endif;wp_reset_query();?>

        <?php pagination($paged, $q->max_num_pages);?>

</main>


    <?php get_sidebar();?>

<?php get_footer();?>