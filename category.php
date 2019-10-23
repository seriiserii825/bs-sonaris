<?php get_header(); ?>
<?php get_template_part('template-parts/services'); ?>

<?php if (is_category([49, 37, 29, 45, 59, 35])): ?>
	<?php require_once __DIR__ . '/template-parts/category_level_2.php'; ?>
<?php else: ?>
    <section class="section section-single">
		<?php $category_id = get_queried_object()->term_id; ?>
        <div class="print">
            <div class="print__item">
                <div class="container">
                    <div class="print__content">
                        <div class="print__text">
                            <h2><?php echo get_the_category_by_ID($category_id); ?></h2>
                            <p><?php echo apply_filters('the_content', carbon_get_term_meta($category_id, 'crb_category_text' . get_lang())); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="gallery" id="js-gallery">
				<?php $images = acf_photo_gallery('print_gallery', $post->ID); ?>
				<?php foreach ($images as $image): ?>
                    <div class="gallery__item">
                        <a href="<?php echo $image['full_image_url']; ?>">
							<?php echo kama_thumb_img(array(
								'src' => $image['full_image_url'],
								'w' => 150,
								'h' => 150
							)); ?>
                        </a>
                    </div>
				<?php endforeach; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php get_footer(); ?>
