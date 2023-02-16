	<footer>
		<div class="wrapper">
			<div class="footer-logo">
				<img src="<?php the_field('futer_logo', 16); ?>" alt="">
			</div>
			<div class="footer-top">
				<div class="footer-menu">
					<div class="footer-menu-item">
						<p class="footer-menu__title">
							<?php the_field('futer_1_menyu_zagolovok', 16); ?>
						</p>
						<?php
				$args = array(
				'menu_class' => '',
				'theme_location'=>'menu-1',
				'container'=> false
				);
				wp_nav_menu($args);
				?>
					</div>
					<div class="footer-menu-item">
						<p class="footer-menu__title">
							<?php the_field('futer_2_menyu_zagolovok', 16); ?>
						</p>
						<?php
				$args = array(
				'menu_class' => '',
				'theme_location'=>'menu-2',
				'container'=> false
				);
				wp_nav_menu($args);
				?>
					</div>
					<div class="footer-menu-item">
						<p class="footer-menu__title">
							<?php the_field('futer_3_menyu_zagolovok', 16); ?>
						</p>
						<?php
				$args = array(
				'menu_class' => '',
				'theme_location'=>'menu-3',
				'container'=> false
				);
				wp_nav_menu($args);
				?>
					</div>
				</div>
				<div class="footer-info">
					<div class="footer-tel">
						<a href="<?php the_field('heder_telefon_nomer', 16); ?>"><?php the_field('heder_telefon', 16); ?></a>
						<p>
							<?php the_field('heder_tekst', 16); ?>
						</p>
					</div>
					<div class="soc-line">
						<a href="<?php the_field('heder_whatsapp_ssylka', 16); ?>" target="_blank" class="soc-line__item">
							<img src="<?php the_field('heder_whatsapp_ikonka', 16); ?>">
							<?php the_field('heder_whatsapp_tekst', 16); ?>
						</a>
						<a href="<?php the_field('heder_viber_ssylka', 16); ?>" target="_blank" class="soc-line__item">
							<img src="<?php the_field('heder_viber_ikonka', 16); ?>">
							<?php the_field('heder_viber_tekst', 16); ?>
						</a>
						<a href="<?php the_field('heder_telegram_ssylka', 16); ?>" target="_blank" class="soc-line__item">
							<img src="<?php the_field('heder_telegram_ikonka', 16); ?>">
							<?php the_field('heder_telegram_tekst', 16); ?>
						</a>
					</div>
					<div class="footer-geo">
						<p>
							<?php the_field('heder_adres', 16); ?>
						</p>
						<a href="<?php the_field('heder_kak_dobratsya_ssylka', 16); ?>">
							<?php the_field('heder_kak_dobratsya_tekst', 16); ?>
						</a>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<a href="<?php the_field('politika_konfidenczialnosti_ssylka', 16); ?>" target="_blank" rel="noopener noreferrer">
					<?php the_field('politika_konfidenczialnosti_tekst', 16); ?>
				</a>
				<a href="<?php the_field('razrabotka_i_podderzhka_silverduck_ssylka', 16); ?>" target="_blank" rel="noopener noreferrer">
					<?php the_field('razrabotka_i_podderzhka_silverduck_tekst', 16); ?>
				</a>
			</div>
		</div>
	</footer>


	<!-- Попап "оставьте заявку" -->
	<!--[if lt IE 9]><div class="popup__overlay popup__overlay_ie"></div><![endif]-->
	<div class="popup__overlay popup-1">
		<div class="popup">
			<div class="popup-body">
				<style>
					.popup-bg {
						background-image: url('/wp-content/uploads/2022/05/ferra-scaled.jpg');
					}
				</style>
				<div class="popup-bg">

				</div>

				<div class="popup__close"><span></span></div>

				<div class="popup-form">
					<form action="#">
						<p class="popup-form-title">Оставьте заявку</p>
						<p class="popup-form-text">
						Наш специалист свяжется<br>с вами в течение <span> 20 минут</span>
						</p>
						<div class="popup-form-inputs">
							<input type="tel" data-validate-field="tel" name="tel" class="tel"
								placeholder="номер телефона">
							<button type="submit" class="btn-orange">Оставить заявку +</button>
						</div>
					</form>
				</div>

				<!-- "Спасибо" скрыто по умолчанию по классу popup-tnx -->
				<div class="popup-tnx">
					<p class="popup-form-title">СПАСИБО<br>ЗА ЗАЯВКУ</p>
					<p class="popup-form-text">
					Наш специалист свяжется<br>с вами в течение <span> 20 минут</span>
					</p>
				</div>

			</div>
			<!--[if lt IE 9]><div class="popup__valignfix"></div><![endif]-->
		</div>
	</div>


	<!-- Попап с видео -->
	<!--[if lt IE 9]><div class="popup__overlay popup__overlay_ie"></div><![endif]-->
	<div class="popup__overlay popup-2">
		<div class="popup">
			<div class="popup-body">
				<div class="popup__close"><span></span></div>

				<video src="<?php echo bloginfo('template_url'); ?>/assets/img/videoplayback.mp4" controls=""></video>

			</div>
			<!--[if lt IE 9]><div class="popup__valignfix"></div><![endif]-->
		</div>
	</div>

	<?php 
        wp_footer();
    ?>
</body>

</html>