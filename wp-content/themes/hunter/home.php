<?php
/**
 * Created by PhpStorm.
 * User: Brycen
 * Date: 2015-03-03
 * Time: 12:15 AM
 */
?>

<?php get_header(); ?>

The blog page

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <p><em><?php the_time('l, F jS, Y'); ?></em></p>
    <hr>

<?php endwhile; else: ?>
    <p><?php _e('Sorry, there are no posts.'); ?></p>
<?php endif; ?>


<?php get_footer(); ?>