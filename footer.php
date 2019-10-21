	<?php $callback_title = carbon_get_theme_option('crb_callbackform_title'.get_lang()); ?>
	<?php $callback_subtitle = carbon_get_theme_option('crb_callbackform_subtitle'.get_lang()); ?>
    <div class="section section-callback">
	  <div class="container">
		<div class="row">
		  <div class="col md-4">
			<h2 class="section-callback-header">
                <strong><?php echo $callback_title; ?></strong>
                <span><?php echo $callback_subtitle; ?></span>
            </h2>
		  </div>
		  <div class="col md-8">
			<div class="callback-form">
                <?php if(get_lang() == '_ro'){
	                echo do_shortcode( '[contact-form-7 id="333" title="Контактная форма rom"]' );
                } ?>
                    <?php if(get_lang() == '_ru'){
	                echo do_shortcode('[contact-form-7 id="332" title="Контактная форма rus"]');
                } ?>
                <?php if(get_lang() == '_en'){
	                echo do_shortcode('[contact-form-7 id="334" title="Контактная форма en"]');
                }
                ?>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<div class="section section-clients">
	  <div class="container">
		<h2 class="section-clients-title">Наши Клиенты</h2>
		<div class="owl-carousel clients">
		  <?php
			$clients = carbon_get_theme_option('crb_clients');
		   ?>
		   <?php foreach($clients as $client): ?>
			<div class="client"><?php echo $client['crb_clients_text']; ?></div>
		   <?php endforeach; ?>
		</div>
	  </div>
	</div>

	<div class="footer">
	  <div class="container">
		<div class="row">
			<?php if(!dynamic_sidebar('sidebar-footer')): ?>
				<h1 style="color: red;">Место для сайдбара</h1>
			<?php endif; ?>

			<?php if(!dynamic_sidebar('sidebar-map')): ?>
				<h1 style="color: red;">Место для сайдбара</h1>
			<?php endif; ?>
		  </div>
		</div>
	  </div>
	  <div class="footer-copyright"><?php echo carbon_get_theme_option('crb_copyright'.get_lang()); ?></div>
	</div>
	<?php wp_footer(); ?>
  </body>
</html>

