<div class="section section-portfolio">
	<h2 class="section-portfolio-title"><?php echo carbon_get_theme_option('crb_portfolio_single_gallery_title'.get_lang()); ?></h2>


    <div class="gallery" id="js-gallery">
		<?php $images = carbon_get_post_meta(get_the_ID(), 'crb_portfolio_gallery'); ?>

		<?php foreach($images as $image): ?>
            <div class="gallery__item">
                <a href="<?php echo  kama_thumb_src('w=550 &h=550', $image);?>">
					<?php echo kama_thumb_img( 'w=150 &h=150', $image ); ?>
                </a>
            </div>
		<?php endforeach; ?>
    </div>
</div>
