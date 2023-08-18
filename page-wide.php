<?php
/* Template Name: page wide */
get_header();?>
    <main class="articles flex-col gap-6 flex-1">

        <?php
        if(have_posts()) : while(have_posts()) : the_post();
            ?>

            <article class="border-b border-slate-100 pb-6 mb-6">
                <div class="flex-col gap-6">
                    <h2 class="font-bold text-xl">
                        <?php the_title();?>
                    </h2>
                    <div class="flex gap-4 py-4 text-xs font-light">
                        <?php the_category(' , ');?>
                        <?php printf('آخرین بروز رسانی در %s توسط %s', get_the_modified_date(), get_the_author());?>
                    </div>
                    <div class="font-light font-dot-4 prose max-w-full">
                        <?php the_content();?>
                    </div>

                </div>

            </article>

        <?php endwhile;endif;wp_reset_query();?>


    </main>


<?php get_footer();?>