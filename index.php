<?php get_header();?>
    <main class="articles flex-col gap-6 flex-1">

<?php
if(have_posts()) : while(have_posts()) : the_post();
?>

    <article class="border-b border-slate-100 pb-6 mb-6">
        <div class="flex max-md:flex-col gap-4 md:gap-6 items-start">
            <?php if(has_post_thumbnail()): ?>
                <div class="bg-slate-100 rounded-md overflow-hidden w-full md:w-auto shrink-0 text-center">
                    <a href="<?php the_permalink();?>" title="<?php the_title();?>">
                        <?php the_post_thumbnail('spd-thumb', array('class' => 'cover'));?>
                    </a>
                </div>
            <?php endif;?>

            <div class="">
                <div class="post-categories pb-2 "><?php the_category(' , ');?></div>
                <h2 class="font-bold text-xl max-md:text-sm">
                    <a class="!text-slate-800" href="<?php the_permalink();?>" title="<?php the_title();?>"><?php the_title();?></a>
                </h2>
                <div class="flex gap-4 py-4 text-xs font-light items-center flex-wrap">

                    <span class="max-md:hidden">آخرین بروز رسانی در</span><span class="font-medium text-slate-500"><?php echo get_the_modified_date();?></span>
                    <span class="text-slate-100 px-0">|</span>
                    <span class="text-slate-500"><?php echo get_the_author();?></span>

                </div>
                <div class="font-light font-dot-4 prose max-w-full max-md:text-sm">
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