<?php get_header(); ?>

    <?php get_template_part('template-parts/services'); ?>

    <div class="breadcrumbs">
      <div class="container">
        <nav class="nav breadcrumbs-nav">
          <ul class="list">
            <div class="list-item">
				<a class="list-item-link" href="<?php echo home_url(); ?>"><?php echo __('Main Page', 'bs_sonaris') ?></a>
			</div>
			<?php
				$post_type = get_post_type();
			?>
            <div class="list-item"><a href="<?php echo get_post_type_archive_link('portfolio'); ?>"><?php echo $post_type; ?></a></div>
            <div class="list-item"><span class="list-item-current"><?php single_post_title(); ?></span></div>
          </ul>
        </nav>
      </div>
    </div>
    <article class="potfolio-article">
      <div class="container">
        <header class="potfolio-article-header">
          <h1 class="header-title"><?php single_post_title(); ?></h1>
          <div class="header-meta"> <span class="header-meta-published"><?php echo __('Publish', 'bs_sonaris') ?>: <span><?php echo get_the_date('d F Y'); ?></span></span><span class="header-meta-category"><?php echo __('in', 'bs_sonaris') ?> <a href="<?php echo get_post_type_archive_link('portfolio'); ?>"><?php echo $post_type; ?></a></span></div>
        </header>
		<?php if ( have_posts()) :?>
			<?php the_post(); ?>
		<main class="potfolio-article-content">
			<div class="row">
				<div class="col md-4">

				<?php
					$thumb_url = kama_thumb_src('w=375 &h=375');
				?>
				<div class="potfolio-article-image"><img src="<?php echo $thumb_url; ?>" alt=""/></div>
<!--				<nav class="nav gallery-nav">-->
<!--					<ul class="list" id="js-list">-->
<!--						--><?php //foreach($gallery_ids as $id): ?>
<!--							--><?php
//								$img_big_url = wp_get_attachment_image_url((int)$id, 'full');
//							?>
<!--							<li class="list-item">-->
<!--								<a class="list-item-link" href="--><?php //echo $img_big_url; ?><!--" title="">-->
<!--									<img src="--><?php //echo $img_big_url; ?><!--"/>-->
<!--								</a>-->
<!--							</li>-->
<!--						--><?php //endforeach; ?>
<!--					</ul>-->
<!--				</nav>-->
				</div>
				<div class="col md-8 offset-sm-1">
				<div class="potfolio-article-text">
					<div class="potfolio-article-text-content">
						<?php the_content(); ?>
					</div>
					<button class="btn btn-lg btn-danger btn-rounded waves-effect" data-mfp-src="#order-form"><?php echo __('Order service', 'bs_sonaris') ?></button>
					</p>
					<form class="popup-small mfp-hide" id="order-form">
					<h3 class="popup-small-header"><?php echo __('Order service', 'bs_sonaris') ?></h3>
					<p>Оставьте контакты и мы свяжется с вами</p>
					<div class="form-item">
						<input class="input" type="text" name="order-name" placeholder="Ваше имя" required="required"/>
					</div>
					<div class="form-item">
						<input class="input" type="text" name="order-mail" placeholder="Ваше e-Mail" required="required"/>
					</div>
					<div class="form-item">
						<input class="input" type="tel" name="order-tel" placeholder="Номер телефона" required="required"/>
					</div>
					<div class="form-control">
						<button class="btn btn-danger btn-md btn-block btn-rounded waves-effect" type="submit">Заказать звонок</button>
					</div>
					</form>
				</div>
				</div>
			</div>
		</main>


		<?php endif; ?>
      </div>
    </article>

	<?php get_template_part('template-parts/portfolio-block'); ?>



	<?php get_footer(); ?>
