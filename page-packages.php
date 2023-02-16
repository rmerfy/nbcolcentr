<?php 
    /*
        Template Name: Packages
    */
?>

<?php get_header(); ?>
<section class="opening-main pockages-page">
	<img src="<?php the_field('s1_fonovoe_izobrazhenie') ?>" class="img img-animate">
	<nav class="menubox">
		<div class="wrapper">
			<div class="menubox__inner">
				<ul class="menu-proj">
					<div class="dropdown">
						<a href="/programmy-detejlinga/" data-path="one" class="dropdown-toggle">
							<?php the_field('nav_dropdaun_menyu', 16); ?>
						</a>
						<ul data-target="one" class="dropdown-menu">
							<?php
								if ( have_rows('nav_dropdaun_menyu_ssylka', 16) ) { // если найдены данные 
									while ( have_rows('nav_dropdaun_menyu_ssylka', 16) ) { the_row(); // цикл по строкам данных 
										?>
							<li><a class="menu-item"
									href="<?php the_sub_field('nav_dropdaun_menyu_ssylka_ssylka', 16); ?>"><?php the_sub_field('nav_dropdaun_menyu_ssylka_tekst', 16); ?></a>
							</li>
							<?php
									}
								} else {
									// строки не найдены 
								}
							?>
						</ul>
					</div>
					<div class="dropdown">
						<button data-path="two" class="dropdown-toggle">
							<?php the_field('nav_dropdaun_menyu_2', 16); ?>
						</button>
						<ul data-target="two" class="dropdown-menu">
							<?php
								if ( have_rows('nav_dropdaun_menyu_ssylka_2', 16) ) { // если найдены данные 
									while ( have_rows('nav_dropdaun_menyu_ssylka_2', 16) ) { the_row(); // цикл по строкам данных 
										?>
							<li><a class="menu-item"
									href="<?php the_sub_field('nav_dropdaun_menyu_ssylka_ssylka_2', 16); ?>"><?php the_sub_field('nav_dropdaun_menyu_ssylka_tekst_2', 16); ?></a>
							</li>
							<?php
									}
								} else {
									// строки не найдены 
								}
							?>
						</ul>
					</div>
					<div class="dropdown">
						<button data-path="three" class="dropdown-toggle">
							<?php the_field('nav_dropdaun_menyu_3', 16); ?>
						</button>
						<ul data-target="three" class="dropdown-menu">
							<?php
								if ( have_rows('nav_dropdaun_menyu_ssylka_3', 16) ) { // если найдены данные 
									while ( have_rows('nav_dropdaun_menyu_ssylka_3', 16) ) { the_row(); // цикл по строкам данных 
										?>
							<li><a class="menu-item"
									href="<?php the_sub_field('nav_dropdaun_menyu_ssylka_ssylka_3', 16); ?>"><?php the_sub_field('nav_dropdaun_menyu_ssylka_tekst_3', 16); ?></a>
							</li>
							<?php
									}
								} else {
									// строки не найдены 
								}
							?>
						</ul>
					</div>
					<div class="dropdown">
						<button data-path="che" class="dropdown-toggle">
							<?php the_field('nav_dropdaun_menyu_4', 16); ?>
						</button>
						<ul data-target="che" class="dropdown-menu">
							<?php
								if ( have_rows('nav_dropdaun_menyu_ssylka_4', 16) ) { // если найдены данные 
									while ( have_rows('nav_dropdaun_menyu_ssylka_4', 16) ) { the_row(); // цикл по строкам данных 
										?>
							<li><a class="menu-item"
									href="<?php the_sub_field('nav_dropdaun_menyu_ssylka_ssylka_4', 16); ?>"><?php the_sub_field('nav_dropdaun_menyu_ssylka_tekst_4', 16); ?></a>
							</li>
							<?php
									}
								} else {
									// строки не найдены 
								}
							?>
						</ul>
					</div>
				</ul>
				<ul class="menu-main">
					<li><a href="http://qwerty.silverduck-test.ru/#lastwork" class="menu-item">Проекты</a></li>
					<li><a href="http://qwerty.silverduck-test.ru/#about" class="menu-item">О компании</a></li>
					<li><a href="http://qwerty.silverduck-test.ru/#review" class="menu-item">Отзывы</a></li>
					<li><a href="/kontakty/" class="menu-item">Контакты</a></li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="page-opening wrapper">
		<div class="page-opening__text">
			<p class="yellow-title animated left">
				<?php the_field('s1_nadzagolovok') ?>
			</p>
			<div class="pl">
				<h1 class="title animated right">
					<?php the_field('s1_zagolovok') ?>
				</h1>
				<p class="page-opening__subtitle animated right delay03">
					<?php the_field('s1_podzagolovok') ?>
				</p>
			</div>
		</div>
		<a class="btn-orange hover-invert  animated left" href="#packages">
			<?php the_field('s1_knopka') ?>
		</a>
	</div>
</section>

<section class="pockages wrapper" id="packages">
	<p class="yellow-title animated left">
		<?php the_field('s2_nadzagolovok') ?>
	</p>
	<h2 class="title pl animated right">
		<?php the_field('s2_zagolovok') ?>
	</h2>
	<div class="pockages-list animated bot">
		<?php
				if ( have_rows('s2_paket') ) { // если найдены данные 
					while ( have_rows('s2_paket') ) { the_row(); // цикл по строкам данных 
						?>
		<div class="pockages-item">
			<div class="pockages-item-top">
				<div class="pockages-item-top__title">
					<p>
						<?php the_sub_field('s2_nazv_paketa') ?>
					</p>
					<span>
						<?php the_sub_field('s2_verhnij_tekst') ?>
					</span>
				</div>
				<div class="rating">
					<?php
									if ( have_rows('s2_rejting') ) { // если найдены данные 
										while ( have_rows('s2_rejting') ) { the_row(); // цикл по строкам данных 
											?>
					<div class="rating-item">
						<p class="rating-item__name">
							<?php the_sub_field('s2_nazv_rejtinga'); ?>
						</p>
						<div class="rating-stars <?php the_sub_field('s2_shkala_rejtinga'); ?>">
							<div class="rating-star s-1"></div>
							<div class="rating-star s-2"></div>
							<div class="rating-star s-3"></div>
							<div class="rating-star s-4"></div>
							<div class="rating-star s-5"></div>
						</div>
					</div>
					<?php
										}
									} else {
										// строки не найдены 
									}
								?>
				</div>
			</div>
			<div class="pockages-text">
				<p class="pockages-text__title">
					<?php the_sub_field('s2_zagolovok_spiska') ?>
				</p>
				<ul>
					<?php
										if ( have_rows('s2_spisok_paketa') ) { // если найдены данные 
											while ( have_rows('s2_spisok_paketa') ) { the_row(); // цикл по строкам данных 
												?>
					<li><?php the_sub_field('s2_tekst_spiska_paketa') ?></li>
					<?php
											}
										} else {
											// строки не найдены 
										}
									?>
				</ul>
			</div>
			<div class="pockages-price">
				<?php the_sub_field('s2_czena_paketa') ?>
			</div>
			<a href="#" class="btn-orange popup__toggle-1">
				<?php the_sub_field('s2_knopka_paketa') ?>
			</a>
		</div>
		<?php 
					}
				} else {
					// строки не найдены 
				}
			?>
	</div>
</section>

<section class="aboutservice wrapper">
	<div class="aboutservice-info">
		<p class="yellow-title animated left">
			<?php the_field('s3_nadzagolovok') ?>
		</p>
		<div class="pl">
			<h2 class="title animated right">
				<?php the_field('s3_zagolovok') ?>
			</h2>
			<div class="aboutservice-info__text animated left">
				<p>
					<?php the_field('s3_tekst') ?>
				</p>
				<p>
					<?php the_field('s3_tekst_2') ?>
				</p>
			</div>
			<a href="#" class="btn-orange hover-invert _desc popup__toggle-1 animated left">
				<?php the_field('s3_knopka') ?>
			</a>
		</div>
	</div>
	<div class="aboutservice-aside">
		<div class="aboutservice-aside__img">
			<div class="aboutservice-aside__img-inner animated right">
				<img src="<?php the_field('s3_kartinka') ?>" class="img">
			</div>
		</div>
		<div class="aboutservice-aside__bullets">
			<div class="bullets-withplus__item animated right">
				<span class="plus-icon"></span>
				<p class="bullets-withplus__title">
					<?php the_field('s3_blok_1_zagolovok') ?>
				</p>
				<p class="bullets-withplus__text">
					<?php the_field('s3_blok_1_podzagolovok') ?>
				</p>
			</div>
			<div class="bullets-withplus__item animated right delay03">
				<span class="plus-icon"></span>
				<p class="bullets-withplus__title">
					<?php the_field('s3_blok_2_zagolovok') ?>
				</p>
				<p class="bullets-withplus__text">
					<?php the_field('s3_blok_2_podzagolovok') ?>
				</p>
			</div>
			<div class="bullets-withplus__item animated right">
				<span class="plus-icon"></span>
				<p class="bullets-withplus__title">
					<?php the_field('s3_blok_3_zagolovok') ?>
				</p>
				<p class="bullets-withplus__text">
					<?php the_field('s3_blok_3_podzagolovok') ?>
				</p>
			</div>
			<div class="bullets-withplus__item animated right delay03">
				<span class="plus-icon"></span>
				<p class="bullets-withplus__title">
					<?php the_field('s3_blok_4_zagolovok') ?>
				</p>
				<p class="bullets-withplus__text">
					<?php the_field('s3_blok_4_podzagolovok') ?>
				</p>
			</div>
		</div>
		<a href="#" class="btn-orange hover-invert _mob popup__toggle-1 animated left">
			Оставить заявку +
		</a>
	</div>
</section>

<section class="whyneed mb-100">
	<div class="wrapper">
		<p class="yellow-title animated left">
			<?php the_field('s4_nadzagolovok') ?>
		</p>
		<h2 class="title pl animated right">
			<?php the_field('s4_zagolovok') ?>
		</h2>
		<div class="whyneed-tabs pl animated left">
			<div class="whyneed-tab">
				<p>
					<?php the_field('s4_knopka_tabov_1') ?>
				</p>
			</div>
			<div class="whyneed-tab">
				<p>
					<?php the_field('s4_knopka_tabov_2') ?>
				</p>
			</div>
			<div class="whyneed-tab">
				<p>
					<?php the_field('s4_knopka_tabov_3') ?>
				</p>
			</div>
		</div>
	</div>
	<div class="whyneed-content">
		<div class="whyneed-content-slide">
			<div class="whyneed-content-info">
				<p class="whyneed-content-info__title animated left">
					<?php the_field('s4_slajd_1_zagolovok') ?>
				</p>
				<div class="whyneed-content-info__text animated left">
					<p>
						<?php the_field('s4_slajd_1_tekst') ?>
					</p>
					<p>
						<?php the_field('s4_slajd_1_tekst_2') ?>
					</p>
				</div>
			</div>
			<div class="whyneed-content-img animated right">
				<img src="<?php the_field('s4_slajd_1_kartinka') ?>" class="img">
			</div>
		</div>
		<div class="whyneed-content-slide">
			<div class="whyneed-content-info">
				<p class="whyneed-content-info__title animated left">
					<?php the_field('s4_slajd_2_zagolovok') ?>
				</p>
				<div class="whyneed-content-info__text animated left">
					<p>
						<?php the_field('s4_slajd_2_tekst') ?>
					</p>
					<p>
						<?php the_field('s4_slajd_2_tekst_2') ?>
					</p>
				</div>
			</div>
			<div class="whyneed-content-img animated right">
				<img src="<?php the_field('s4_slajd_2_kartinka') ?>" class="img">
			</div>
		</div>
		<div class="whyneed-content-slide">
			<div class="whyneed-content-info">
				<p class="whyneed-content-info__title animated left">
					<?php the_field('s4_slajd_3_zagolovok') ?>
				</p>
				<div class="whyneed-content-info__text animated left">
					<p>
						<?php the_field('s4_slajd_3_tekst') ?>
					</p>
					<p>
						<?php the_field('s4_slajd_3_tekst_2') ?>
					</p>
				</div>
			</div>
			<div class="whyneed-content-img animated right">
				<img src="<?php the_field('s4_slajd_3_kartinka') ?>" class="img">
			</div>
		</div>
	</div>
</section>

<section class="topresult wrapper mb-100">
	<div class="topresult-title">
		<p class="yellow-title animated left">
			<?php the_field('s5_nadzagolovok') ?>
		</p>
		<h2 class="title pl animated right">
			<?php the_field('s5_zagolovok') ?>
		</h2>
	</div>
	<div class="result-slider animated bot">
		<?php
				if ( have_rows('s5_slajder') ) { // если найдены данные 
					while ( have_rows('s5_slajder') ) { the_row(); // цикл по строкам данных 
						?>
		<div class="result-slider-item">
			<div class="prev-block">
				<p class="nav-title">
					<?php the_sub_field('s5_slajder_predydushhij_zagolovok'); ?>
				</p>
				<img src="<?php the_sub_field('s5_slajder_predydushhee_izobrazhenie'); ?>" class="img">
			</div>
			<div class="center-block">
				<div class="result-slider-thumb">
					<?php
										if ( have_rows('s5_slajder_vnutri_slajdera') ) { // если найдены данные 
											while ( have_rows('s5_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
												?>
					<div class="result-slider-thumb__item">
						<img src="<?php the_sub_field('s5_kartinka_slajdera_vnutri_slajdera') ?>" class="img">
					</div>
					<?php 
											}
										} else {
											// строки не найдены 
										}
									?>
				</div>
				<div class="center-block__info">
					<div class="center-block__text">
						<p class="center-block__title">
							<?php the_sub_field('s5_czentralnyj_zagolovok_slajdera'); ?>
						</p>
						<ul>
							<?php
												if ( have_rows('s5_spisok_v_slajdere') ) { // если найдены данные 
													while ( have_rows('s5_spisok_v_slajdere') ) { the_row(); // цикл по строкам данных 
														?>
							<li><?php the_sub_field('s5_tekst_spiska_v_slajdere') ?></li>
							<?php
													}
												} else {
													// строки не найдены 
												}
											?>
						</ul>
						<p class="center-block__descrip">
							<?php the_sub_field('s5_tekst_v_slajdere'); ?>
						</p>
					</div>
					<div class="result-slider-nav">
						<?php
											if ( have_rows('s5_slajder_vnutri_slajdera') ) { // если найдены данные 
												while ( have_rows('s5_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
													?>
						<div class="result-slider-nav__item">
							<img src="<?php the_sub_field('s5_kartinka_slajdera_vnutri_slajdera') ?>" class="img">
						</div>
						<?php 
												}
											} else {
												// строки не найдены 
											}
										?>
					</div>
				</div>
			</div>
			<div class="next-block">
				<p class="nav-title">
					<?php the_sub_field('s5_sleduyushhij_zagolovok'); ?>
				</p>
				<img src="<?php the_sub_field('s5_sleduyushhee_izobrazhenie'); ?>" class="img">
			</div>
		</div>
		<?php 
					}
				} else {
					// строки не найдены 
				}
			?>
	</div>
</section>

<section class="process wrapper mb-100">
	<p class="yellow-title animated left">
		<?php the_field('s6_nadzagolovok') ?>
	</p>
	<h2 class="title pl animated right">
		<?php the_field('s6_zagolovok') ?>
	</h2>
	<div class="process-cols">
		<div class="process-plate-wrapper animated left">
			<div class="process-plate">
				<div class="process-plate-item">
					<span class="plus-icon"></span>
					<p>
						<?php the_field('s6_blok_1') ?>
					</p>
				</div>
				<div class="process-plate-item">
					<span class="plus-icon"></span>
					<p>
						<?php the_field('s6_blok_2') ?>
					</p>
				</div>
				<div class="process-plate-item">
					<span class="plus-icon"></span>
					<p>
						<?php the_field('s6_blok_3') ?>
					</p>
				</div>
				<div class="process-plate-item">
					<span class="plus-icon"></span>
					<p>
						<?php the_field('s6_blok_4') ?>
					</p>
				</div>
				<div class="process-plate-item">
					<span class="plus-icon"></span>
					<p>
						<?php the_field('s6_blok_5') ?>
					</p>
				</div>
				<div class="process-plate-item">
					<span class="plus-icon"></span>
					<p>
						<?php the_field('s6_blok_6') ?>
					</p>
				</div>
				<?php if( get_field("s6_blok_7") ): ?>
				<div class="process-plate-item">
					<span class="plus-icon"></span>
					<p>
						<?php the_field('s6_blok_7') ?>
					</p>
				</div>
				<?php else :?>

				<?php endif; ?>
				<?php if( get_field("s6_blok_8") ): ?>
				<div class="process-plate-item">
					<span class="plus-icon"></span>
					<p>
						<?php the_field('s6_blok_8') ?>
					</p>
				</div>
				<?php else :?>

				<?php endif; ?>

				<?php if( get_field("s6_blok_9") ): ?>
				<div class="process-plate-item">
					<span class="plus-icon"></span>
					<p>
						<?php the_field('s6_blok_9') ?>
					</p>
				</div>
				<?php else :?>

				<?php endif; ?>


				<a href="#" class="btn-orange hover-invert popup__toggle-1">
					<?php the_field('s6_knopka') ?>
				</a>
			</div>
		</div>
		<div class="process-vid animated right">
			<div class="process-vid-preview-wrapper">
				<div class="process-vid-preview popup__toggle-2">
					<img src="<?php the_field('s6_kartinka_video') ?>" class="img">
				</div>
			</div>
			<div class="process-text">
				<p class="process-vid-title">
					<?php the_field('s6_video_tekst') ?>
				</p>
				<div class="process-vid-arrow">
					<img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/arrow-krivaya-up.svg" alt="">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="about-main mb-100" id="about">
	<div class="wrapper">
		<p class="yellow-title animated left">
			<?php the_field('s7_nadzagolovok') ?>
		</p>

		<div class="about-main-wrapper">
			<div class="about-main-info">
				<div class="about-main__text animated left">
					<h2 class="title animated left">
						<?php the_field('s7_zagolovok') ?>
					</h2>
					<p>
						<?php the_field('s7_tekst') ?>
					</p>
					<p>
						<?php the_field('s7_tekst_2') ?>
					</p>
				</div>
				<!-- <div class="about-main__vid animated left">
						<p class="about-main__vid-title">
							<?php the_field('s7_video_tekst') ?>
						</p>
						<div class="about-main__vid-arrow">
							<img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/arrow-krivaya.svg" alt="">
						</div>
						<div class="about-main__vid-preview popup__toggle-2">
							<img src="<?php the_field('s7_kartinka_video') ?>" class="img">
						</div>
					</div> -->
				<div class="bullets-withplus">
					<div class="bullets-withplus__item animated bot">
						<span class="plus-icon"></span>
						<p class="bullets-withplus__title">
							<?php the_field('s7_blok_1_zagolovok') ?>
						</p>
						<p class="bullets-withplus__text">
							<?php the_field('s7_blok_1_podzagolovok') ?>
						</p>
					</div>
					<div class="bullets-withplus__item animated bot delay03">
						<span class="plus-icon"></span>
						<p class="bullets-withplus__title">
							<?php the_field('s7_blok_2_zagolovok') ?>
						</p>
						<p class="bullets-withplus__text">
							<?php the_field('s7_blok_2_podzagolovok') ?>
						</p>
					</div>
					<div class="bullets-withplus__item animated bot delay06">
						<span class="plus-icon"></span>
						<p class="bullets-withplus__title">
							<?php the_field('s7_blok_3_zagolovok') ?>
						</p>
						<p class="bullets-withplus__text">
							<?php the_field('s7_blok_3_podzagolovok') ?>
						</p>
					</div>
				</div>
			</div>
			<div class="about-main-img animated right">
				<img src="<?php the_field('s7_kartinka') ?>" class="img">
			</div>
		</div>
	</div>
</section>

<section class="reviews mb-100">
	<div class="wrapper">
		<p class="yellow-title">
			<?php the_field('s6_nadzagolovok', 16); ?>
		</p>
		<h2 class="title pl">
			<?php the_field('s6_zagolovok', 16); ?>
		</h2>
		<div class="reviews-slider">
			<?php
					if ( have_rows('c6_otzyvy', 16) ) { // если найдены данные 
						while ( have_rows('c6_otzyvy', 16) ) { the_row(); // цикл по строкам данных 
							?>
			<a href="<?php the_sub_field('s6_kartinka_otzyva', 16); ?>" class="reviews-slider-img"
				data-fancybox="gallery-1">
				<img src="<?php the_sub_field('s6_kartinka_otzyva', 16); ?>">
			</a>
			<?php
						}
					} else {
						// строки не найдены 
					}
				?>
		</div>
	</div>
</section>

<section class="banner-form wrapper mb-100 animated left">
	<div class="banner-form-inner">
		<div class="banner-form__img">
			<img src="<?php the_field('s7_kartinka', 16) ?>" class="img">
		</div>
		<div class="banner-form__text">
			<div class="pl">
				<div class="banner-form__sticker">
					<?php the_field('s7_data', 16) ?>
				</div>
				<h2 class="title">
					<?php the_field('s7_zagolovok', 16); ?>
				</h2>
				<p class="text">
					<?php the_field('s7_tekst', 16) ?>
				</p>
				<form action="" class="banner-fb">
					<input type="tel" data-validate-field="tel" name="Телефон" placeholder="Номер телефона" required="">
					<button class="btn-orange" name="sendForm" type="submit">
						Оставить заявку +
					</button>
				</form>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>