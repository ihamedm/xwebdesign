<?php

class Tailwind_Comment_Walker extends Walker_Comment {

    // constructor – wrapper for the comments list
		function __construct() {
			function wpdocs_comment_reply_link_class( $class ) {
				$class = str_replace( "class='comment-reply-link", "class='comment-reply-link bg-slate-200 hidden text-xs text-slate-400 float-right mt-2 px-1 py-1 rounded-md", $class );
				return $class;
			}

			add_filter( 'comment_reply_link', 'wpdocs_comment_reply_link_class' );
            ?>

			<section class="comments-list">

		<?php }

		// start_lvl – wrapper for child comments list
		function start_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>

			<section class="child-comments comments-list mt-6">

		<?php }

		// end_lvl – closing wrapper for child comments list
		function end_lvl( &$output, $depth = 0, $args = array() ) {
			$GLOBALS['comment_depth'] = $depth + 2; ?>

			</section>

		<?php }


	// start_el – HTML for comment template
function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
	$depth++;
	$GLOBALS['comment_depth'] = $depth;
	$GLOBALS['comment'] = $comment;
	$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' );

	if ( 'article' == $args['style'] ) {
		$tag = 'article';
		$add_below = 'comment';
	} else {
		$tag = 'article';
		$add_below = 'comment';
	}

    $comment_classes = 'border border-2 border-slate-400 rounded-lg p-6 mb-6';
    $comment_classes .= empty( $args['has_children'] ) ? '' :' parent';

    add_filter('comment_class', function($classes){
        if(in_array('bypostauthor', $classes)){
            $classes[] = 'border-primary';
        }

        return $classes;
    }, 10, 5);

    ?>

    <article <?php comment_class( $comment_classes ) ?> id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/Comment">

    <div class="comment-meta post-meta flex items-center justify-between fa-num" role="complementary">
        <div class="comment-author flex items-center gap-2 mb-2">
            <figure class="gravatar rounded-full overflow-hidden"><?php echo get_avatar( $comment, 48 ); ?></figure>
            <div class="flex flex-col gap-1">
                <a class="comment-author-link text-slate-500 font-medium text-sm" href="<?php comment_author_url(); ?>" itemprop="author"><?php comment_author(); ?></a>
                <time class="comment-meta-item text-xs font-light text-slate-400" datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>" itemprop="datePublished"><?php comment_date('j S F Y') ?> , <a href="#comment-<?php comment_ID() ?>" itemprop="url"><?php comment_time() ?></a></time>
            </div>
        </div>

	    <?php if ($comment->comment_approved == '0') : ?>
            <p class="comment-meta-item text-amber-600 text-xs w-full flex-1">دیدگاه شما پس از تایید نمایش داده می شود.</p>
	    <?php endif; ?>
    </div>
    <div class="comment-content post-content text-slate-600 overflow-hidden" itemprop="text">
		<?php comment_text() ?>
		<?php comment_reply_link( array_merge( $args, array( 'add_below'  => $add_below,
		                                                     'depth'      => $depth,
		                                                     'max_depth'  => $args['max_depth'],
		                                                     'reply_text' => 'پاسخ',
		) ) ); ?>
    </div>

<?php }

	// end_el – closing HTML for comment template
function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

    </article>

<?php }
	// destructor – closing wrapper for the comments list
	function __destruct() { ?>

        </section>

	<?php }
}