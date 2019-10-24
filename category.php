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
			<?php $portfolio_post = new WP_Query([
				'cat' => $category_id,
				'posts_per_page' => -1
			]); ?>

            <div class="gallery">
				<?php if ($portfolio_post->have_posts()): ?>
					<?php while ($portfolio_post->have_posts()): ?>
						<?php $portfolio_post->the_post(); ?>
                        <div class="gallery__item">
                            <a href="<?php the_permalink(); ?>">
								<?php echo kama_thumb_img(array(
									'w' => 150,
									'h' => 150
								)); ?>
                            </a>
                        </div>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<?php get_footer(); ?>
