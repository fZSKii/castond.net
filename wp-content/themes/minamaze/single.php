<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ThinkUpThemes
 */

get_header(); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>

				<?php
                //关于我们和联系我们不显示 下一条和上一条的框
                $id = get_the_ID();
                if( $id != 40 && $id != 53 ) thinkup_input_nav( 'nav-below' );
                ?>

				<?php edit_post_link( __( 'Edit', 'lan-thinkupthemes' ), '<span class="edit-link">', '</span>' ); ?>

				<?php thinkup_input_allowcomments(); ?>

			<?php endwhile; wp_reset_query(); ?>

<?php get_footer(); ?>