<?php get_header();?>
    <main class="articles flex-col gap-6 flex-1">
        <?php //spd_breadcrmbs(); ?>
        <?php
            if(have_posts()) : while(have_posts()) : the_post();
            ?>

            <article class="border-b border-slate-100 pb-6 mb-6">
                <div class="flex-col gap-6">
                    <div class="post-categories pb-2 "><?php the_category(' , ');?></div>
                    <h2 class="font-bold text-xl max-md:text-sm">
                        <?php the_title();?>
                    </h2>

                    <div class="flex gap-4 py-4 text-xs font-light items-center flex-wrap">

                        <span class="max-md:hidden">آخرین بروز رسانی در</span><span class="font-medium text-slate-500"><?php echo get_the_modified_date();?></span>
                        <span class="text-slate-100 px-0">|</span>
                        <span class="text-slate-500"><?php echo get_the_author();?></span>

                    </div>

                    <div class="font-light font-dot-4 prose max-w-full max-md:text-sm">
                        <?php the_content();?>
                    </div>

                    <div class="comments mt-8 pt-8 border-t border-dashed border-slate-200 text-sm">
                        <?php comments_template('/comments.php');?>
                    </div>
                </div>

            </article>

        <?php endwhile;endif;wp_reset_query();?>


    </main>

<?php get_sidebar();?>
<?php get_footer();?>