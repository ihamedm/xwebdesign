<div class="container py-8">
	<div class="w-full max-md:overflow-hidden pb-6" id="blog-posts" >

		<div class="flex justify-between items-center mb-4 py-2">
			<h4 class="flex items-center gap-2 px-2 before:block before:absolute before:right-1 before:-inset-1 before:rounded-md before:-skew-y-1 before:bg-primary-100 relative inline-block">
				<span class="relative"><?php echo spd_icon('document', 'w-5 h-5 fill-primary');?></span>
				<span class="relative text-gray-600 font-medium">مطالب مرتبط</span>
			</h4>
		</div>

		<div class="swiper-wrapper md:flex md:items-stretch md:gap-4">

			<?php
			$current_post = get_post();
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 6,
				'post__not_in' => array( $current_post->ID ),
				'ignore_sticky_posts' => 1,
				'tax_query' => array(
					array(
						'taxonomy' => 'category',
						'field' => 'id',
						'terms' => wp_get_post_terms( $current_post->ID, 'category', array( 'fields' => 'ids' ) ),
						'operator' => 'OR'
					)
				),
				'orderby' => 'rand',
			);
			$q = new WP_Query( $args );

			if ( $q->have_posts() ) : while ( $q->have_posts() ) :
				$q->the_post();
				global $post;

				?>

				<div class="swiper-slide h-auto group bg-white rounded-md shadow-md hover:shadow-lg fa-num md:shrink overflow-hidden">
					<a href="<?php the_permalink();?>" target="_blank" class="block h-full">
						<article class="flex flex-col items-center h-full items-center justify-between gap-3" >
							<div class="w-full">
								<?php the_post_thumbnail('thumb', array('class' => 'w-full object-fit group-hover:scale-105 transition duration-300'));?>
							</div>
							<div class="px-3 py-1" >
								<?php the_title('<span class="font-medium text-sm text-right text-gray-600">', '</span>');?>
								<div class="flex justify-between items-center py-2">
									<?php
									$categories = get_the_category();
									printf('<span class="font-light text-xs bg-emerald-100 text-emerald-600 rounded-sm p-1">%s</span>', $categories[0]->name);
									printf('<span class="font-light text-xs text-slate-400">%s</span>', get_field('read-time'))
									?>

								</div>
							</div>


						</article>
					</a>
				</div>

			<?php  endwhile;?>
		</div>

		<?php endif; wp_reset_postdata();?>
	</div>

</div>
