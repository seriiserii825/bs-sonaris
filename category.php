<?php get_header(); ?>
<?php get_template_part( 'template-parts/services' ); ?>

<section class="section">
    <div class="print">
		<?php if ( have_posts() ): ?>
			<?php $i = 1;
			while ( have_posts() ): ?>
				<?php the_post(); ?>
                <div class="print__item <?php if ( $i % 2 === 0 ) {
					echo 'dark reverse';
				} ?>">
                    <div class="container">
                        <div class="print__content">
                            <div class="print__image">
								<?php echo kama_thumb_img( 'w=250' ); ?>
                            </div>
                            <div class="print__text">
                                <h2><?php the_title(); ?></h2>
		                        <?php the_content(); ?>
                                <a href="<?php the_permalink(); ?>" class="btn btn-danger btn-rounded waves-effect">
                                    <span><?php echo __('Read more', 'bs_sonaris') ?></span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
				
				<?php $i ++; endwhile; ?>
                <div class="container">
                    <?php the_posts_pagination([
                        'show_all'     => true, // показаны все страницы участвующие в пагинации
                        'end_size'     => 1,     // количество страниц на концах
                        'mid_size'     => 1,     // количество страниц вокруг текущей
                        'prev_next'    => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                        'prev_text'    => __('« Previous'),
                        'next_text'    => __('Next »'),
                        'add_args'     => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                        'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                        'screen_reader_text' => __( '' ),
                    ]); ?>
                </div>
		<?php else: ?>
		<?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
