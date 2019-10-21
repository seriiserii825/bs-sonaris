<div class="section section-services">
	<div class="services-navbar">
		<div class="container">
			<nav class="nav services-nav">
				<ul class="list">
                    <?php
                        $categories = get_categories([
	                        'taxonomy'     => 'category',
	                        'type'         => 'post',
	                        'child_of'     => 0,
	                        'parent'       => 19,
	                        'orderby'      => 'name',
	                        'order'        => 'ASC',
	                        'hide_empty'   => 1,
	                        'hierarchical' => 1,
	                        'exclude'      => '',
	                        'include'      => '',
	                        'number'       => 0,
	                        'pad_counts'   => false,
                        ]);
                    ?>
                    
					<?php $i = 1; foreach($categories as $category): ?>
						<?php
							$svg_icon =  carbon_get_term_meta($category->term_id, 'crb_print_categories_image');
						?>
						<li class="list-item">
							<a class="list-item-link waves-effect" href="<?php echo get_category_link($category->term_id) ?>" data-color="<?php echo $i; ?>">
								<svg class="services-icon">
									<use xlink:href="#<?php echo $svg_icon; ?>_icon"></use>
								</svg>
								<span class="services-title"><?php echo $category->name; ?></span>
							</a>
						</li>
					<?php $i++; endforeach; ?>
				</ul>
			</nav>
		</div>
	</div>
</div>
