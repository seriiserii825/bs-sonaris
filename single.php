<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bs_sonaris
 */

get_header();
?>
<?php get_template_part('template-parts/services'); ?>

    <section class="section section-single">
        <div class="print">
			<?php if ( have_posts() ): ?>
					<?php the_post(); ?>
                    <div class="print__item">
                        <div class="container">
                            <div class="print__content">
                                <div class="print__text">
                                    <h2><?php the_title(); ?></h2>
		                            <?php the_content(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
			<?php else: ?>
			<?php endif; ?>
        </div>
        <div class="container">
            <div class="gallery" id="js-gallery">
                <?php $images = acf_photo_gallery('print_gallery', $post->ID); ?>
                <?php foreach($images as $image): ?>
                    <div class="gallery__item">
                        <a href="<?php echo  $image['full_image_url'];?>">
                            <?php echo kama_thumb_img( array(
                                'src' =>  $image['full_image_url'],
                                'w' => 150,
                                'h' => 150
                            ) ); ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();
