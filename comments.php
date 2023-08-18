<?php
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version
 */

?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>

    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link(); ?></div>
        <div class="alignright"><?php next_comments_link(); ?></div>
    </div>

    <ol class="commentlist">
        <?php

        wp_list_comments(
            array(
                'walker'     => new Tailwind_Comment_Walker(),
            )
        );
        ?>
    </ol>

    <div class="navigation">
        <div class="alignleft"><?php previous_comments_link(); ?></div>
        <div class="alignright"><?php next_comments_link(); ?></div>
    </div>
<?php else : // This is displayed if there are no comments so far. ?>

    <?php if ( comments_open() ) : ?>
        <!-- If comments are open, but there are no comments. -->

    <?php else : // Comments are closed. ?>
        <!-- If comments are closed. -->
        <p class="nocomments border border-amber-500 rounded-lg p-4 text-amber-900 "><?php _e( 'Comments are closed.' ); ?></p>

    <?php endif; ?>
<?php endif; ?>


<?php
/**
 * Modify with 'comment_form_defaults' filter in @file inc/class-spd-comments.php
 */
comment_form();
?>
