<?php get_header();?>
    <main class="articles flex-col gap-6 flex-1">

<?php
if(have_posts()) : while(have_posts()) : the_post();
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
                    <a class="!text-slate-800" href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
                </h2>
                <div class="flex gap-4 py-4 text-xs font-light items-center">
                    <?php the_category(' , ');?>
                    <?php printf('آخرین بروز رسانی در <span class="bg-primary-50 text-primary px-1 py-1 rounded-md font-medium">%s</span> توسط %s', get_the_modified_date(), get_the_author());?>
                </div>
                <div class="font-light font-dot-4 prose max-w-full">
                    <?php the_content('<span class="text-primary">ادامه مطلب ...</span>');?>
                </div>
            </div>
        </div>

    </article>

<?php endwhile;endif;wp_reset_query();?>

        <nav class="post-pagination py-6">
                <?php echo paginate_links( array(
                    'prev_text'  => __( '«' ),
                    'next_text'  => __( '»' ),
                    'type'       => 'list'
                ) );;?>
        </nav>


    </main>


<?php get_sidebar();?>
<?php get_footer();?>