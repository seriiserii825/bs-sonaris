<?php
/**
 * Template Name: Portfolio
 */
get_header();
?>

<?php get_template_part('template-parts/services'); ?>

    <section class="section">
        <div class="container">

			<?php if (have_posts()) : ?>

            <header class="page-header">
                <h1 class="header-title"><?php echo __('Portfolio', 'bs_sonaris'); ?></h1>
            </header><!-- .page-header -->

            <div class="section section-portfolio">
                <div class="portfolio">
                    <?php $flag = [];
                    if ( have_posts() ) :
	                    $n = 0;
	                    while ( have_posts() ) : the_post();
		                    $year = get_the_date( 'm' );

		                    if ( ! in_array( $year, $flag ) ) {
			                    $flag[] = $year;

			                    # закрытие portfolio-block
			                    # если выводится первый блок - закрывать предыдущий  не надо
			                    # если не первый то - закрываем
			                    if ( $n !== 0 ) {
				                    echo '</div>';
			                    }

			                    # открыть portfolio-block
			                    echo '<div class="portfolio-block">'; ?>
                                <?php
                                    $init_date = get_the_date('F, Y');
                                ?>
                                <?php if(get_lang() == '_ro'): ?>
                                    <h2><?php echo strtoupper(get_the_date('F, Y')[0]).substr(get_the_date('F, Y'), 1); ?></h2>
                                <?php else: ?>
                                    <h2><?php echo get_the_date('F, Y'); ?></h2>
                                <?php endif; ?>
		                    <?php }

		                    echo   get_template_part( 'template-parts/content', get_post_type() );
		                    $n ++;
	                    endwhile;
	                    # закрыть последний portfolio-block
	                    echo '</div>';
                    else :
                    endif; ?>


                <div class="container">
                    <?php the_posts_pagination([
                        'show_all' => true, // показаны все страницы участвующие в пагинации
                        'end_size' => 1,     // количество страниц на концах
                        'mid_size' => 1,     // количество страниц вокруг текущей
                        'prev_next' => false,  // выводить ли боковые ссылки "предыдущая/следующая страница".
                        'prev_text' => __('« Previous'),
                        'next_text' => __('Next »'),
                        'add_args' => false, // Массив аргументов (переменных запроса), которые нужно добавить к ссылкам.
                        'add_fragment' => '',     // Текст который добавиться ко всем ссылкам.
                        'screen_reader_text' => __(''),
                    ]); ?>
                </div>

					<?php
					else :

						get_template_part('template-parts/content', 'none');

					endif;
					?>

                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
