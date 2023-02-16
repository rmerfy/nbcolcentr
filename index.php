<?php
//Template Name: Главная
get_header(); ?>
	<section class="opening-main main-page">
		<img src="<?php the_field('s1_fon_izobrazhenie') ?>" class="img img-animate">
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
										<li><a class="menu-item" href="<?php the_sub_field('nav_dropdaun_menyu_ssylka_ssylka', 16); ?>"><?php the_sub_field('nav_dropdaun_menyu_ssylka_tekst', 16); ?></a></li>
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
										<li><a class="menu-item" href="<?php the_sub_field('nav_dropdaun_menyu_ssylka_ssylka_2', 16); ?>"><?php the_sub_field('nav_dropdaun_menyu_ssylka_tekst_2', 16); ?></a></li>
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
										<li><a class="menu-item" href="<?php the_sub_field('nav_dropdaun_menyu_ssylka_ssylka_3', 16); ?>"><?php the_sub_field('nav_dropdaun_menyu_ssylka_tekst_3', 16); ?></a></li>
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
										<li><a class="menu-item" href="<?php the_sub_field('nav_dropdaun_menyu_ssylka_ssylka_4', 16); ?>"><?php the_sub_field('nav_dropdaun_menyu_ssylka_tekst_4', 16); ?></a></li>
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
						<li><a href="#lastwork" class="menu-item">Проекты</a></li>
						<li><a href="#about" class="menu-item">О компании</a></li>
						<li><a href="#review" class="menu-item">Отзывы</a></li>
						<li><a href="/kontakty/" class="menu-item">Контакты</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="main-banner" style="padding-bottom:50px;">
			<?php
				if ( have_rows('s1_slajder') ) { // если найдены данные 
					while ( have_rows('s1_slajder') ) { the_row(); // цикл по строкам данных 
						?>
							<div class="opening-main-slide">
								<div class="wrapper">
									<p class="yellow-title animated left">
										<?php the_sub_field('s1_nad_zagolovok') ?>
									</p>
									<div class="pl">
										<h1 class="title animated right">
											<?php the_sub_field('s1_zagolovok') ?>
										</h1>
										<div class="bullets-withplus">
											<div class="bullets-withplus__item animated bot">
												<span class="plus-icon"></span>
												<p class="bullets-withplus__title">
													<?php the_sub_field('s1_blok1_zagolovok') ?>
												</p>
												<p class="bullets-withplus__text">
													<?php the_sub_field('s1_blok1_podzagolovok') ?>
												</p>
											</div>
											<div class="bullets-withplus__item animated bot delay03">
												<span class="plus-icon"></span>
												<p class="bullets-withplus__title">
													<?php the_sub_field('s1_blok2_zagolovok') ?>
												</p>
												<p class="bullets-withplus__text">
													<?php the_sub_field('s1_blok2_podzagolovok') ?>
												</p>
											</div>
											<div class="bullets-withplus__item animated bot delay06">
												<span class="plus-icon"></span>
												<p class="bullets-withplus__title">
													<?php the_sub_field('s1_blok3_zagolovok') ?>
												</p>
												<p class="bullets-withplus__text">
													<?php the_sub_field('s1_blok3_podzagolovok') ?>
												</p>
											</div>
										</div>
										<a href="#" class="btn-orange hover-invert popup__toggle-1 animated right">
											<?php the_sub_field('s1_knopka_zayavki') ?>
										</a>
									</div>
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

	<section>
		<div class="wrapper">
			<div class="popularuslug">
				<div class="popularuslug-title grid-a animated left">
					<p class="yellow-title">
						<?php the_field('s2_nad_zagolovok') ?>
					</p>
					<h2 class="title pl">
						<?php the_field('s2_zagolovok') ?>
					</h2>
				</div>
				<div class="popularuslug-btn grid-b animated right">
					<!-- <a href="<?php the_field('s2_ssylka_ssylki') ?>" class="btn-dark">
						<?php the_field('s2_tekst_ssylki') ?>
					</a> -->
				</div>
				<div class="popularuslug-list grid-c">
					<div class="popularuslug-item">
						<div class="popularuslug-item__img">
							<a href="<?php the_field('s2_blok1_ssylka_ssylki') ?>">
							<img src="<?php the_field('s2_blok1_kartinka') ?>" class="img">
							</a>
						</div>
						<div class="popularuslug-item__info">
							<p class="popularuslug-item__title">
								<?php the_field('s2_blok1_zagolovok') ?>
							</p>
							<p class="popularuslug-item__text">
								<?php the_field('s2_blok1_podzagolovok') ?>
							</p>
							<a href="<?php the_field('s2_blok1_ssylka_ssylki') ?>" class="popularuslug-item__btn">
								<?php the_field('s2_blok1_tekst_ssylki') ?>
							</a>
						</div>
					</div>
					<div class="popularuslug-item">
						<div class="popularuslug-item__img">
						    <a href="<?php the_field('s2_blok2_ssylka_ssylki') ?>">
						       <img src="<?php the_field('s2_blok2_kartinka') ?>" class="img">
							</a>
						</div>
						<div class="popularuslug-item__info">
							<p class="popularuslug-item__title">
								<?php the_field('s2_blok2_zagolovok') ?>
							</p>
							<p class="popularuslug-item__text">
								<?php the_field('s2_blok2_podzagolovok') ?>
							</p>
							<a href="<?php the_field('s2_blok2_ssylka_ssylki') ?>" class="popularuslug-item__btn">
								<?php the_field('s2_blok2_tekst_ssylki') ?>
							</a>
						</div>
					</div>
					<div class="popularuslug-item">
						<div class="popularuslug-item__img">
						    <a href="<?php the_field('s2_blok3_ssylka_ssylki') ?>">
							   <img src="<?php the_field('s2_blok3_kartinka') ?>" class="img">
							</a>
						</div>
						<div class="popularuslug-item__info">
							<p class="popularuslug-item__title">
								<?php the_field('s2_blok3_zagolovok') ?>
							</p>
							<p class="popularuslug-item__text">
								<?php the_field('s2_blok3_podzagolovok') ?>
							</p>
							<a href="<?php the_field('s2_blok3_ssylka_ssylki') ?>" class="popularuslug-item__btn">
								<?php the_field('s2_blok3_tekst_ssylki') ?>
							</a>
						</div>
					</div>
					<div class="popularuslug-item">
						<div class="popularuslug-item__img">
						     <a href="<?php the_field('s2_blok4_ssylka_ssylki') ?>" class="popularuslug-item__btn">
							 <img src="<?php the_field('s2_blok4_kartinka') ?>" class="img">
							</a>
						</div>
						<div class="popularuslug-item__info">
							<p class="popularuslug-item__title">
								<?php the_field('s2_blok4_zagolovok') ?>
							</p>
							<p class="popularuslug-item__text">
								<?php the_field('s2_blok4_podzagolovok') ?>
							</p>
							<a href="<?php the_field('s2_blok4_ssylka_ssylki') ?>" class="popularuslug-item__btn">
								<?php the_field('s2_blok4_tekst_ssylki') ?>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="lastwork">
		<div class="lastwork wrapper">
			<div class="lastwork-title grid-a">
				<p class="yellow-title animated left">
					<?php the_field('s3_nadzagolovok') ?>
				</p>
				<h2 class="title animated left delay03">
					<?php the_field('s3_zagolovok') ?>
				</h2>
				<p class="lastwork-subtitle animated left delay06">
					<?php the_field('s3_podzagolovok') ?>
				</p>
			</div>
			<div class="lastwork-btn grid-b animated right delay03">
				<!-- <a href="<?php the_field('s3_ssylka_ssylki') ?>" class="btn-gray">
					<?php the_field('s3_tekst_ssylki') ?>
				</a> -->
			</div>
			<div class="lastwork-main grid-c animated bot">
				<div class="lastwork-tabs">
					<div class="lastwork-tab">
						<p>
							<?php the_field('s3_knopka_tabov_1') ?>
						</p>
					</div>
					<div class="lastwork-tab">
						<p>
							<?php the_field('s3_knopka_tabov_2') ?>
						</p>
					</div>
					<div class="lastwork-tab">
						<p>
							<?php the_field('s3_knopka_tabov_3') ?>
						</p>
					</div>
					<div class="lastwork-tab">
						<p>
							<?php the_field('s3_knopka_tabov_4') ?>
						</p>
					</div>
					<div class="lastwork-tab">
						<p>
							<?php the_field('s3_knopka_tabov_5') ?>
						</p>
					</div>
				</div>
				<div class="lastwork-for">
					<div class="result-slider">
						<?php
							if ( have_rows('s3_tab_1_slajder') ) { // если найдены данные 
								while ( have_rows('s3_tab_1_slajder') ) { the_row(); // цикл по строкам данных 
									?>
										<div class="result-slider-item">
											<div class="prev-block">
												<p class="nav-title">
													<?php the_sub_field('s3_tab_1_slajder_predydushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_1_slajder_predydushhee_izobrazhenie') ?>" class="img">
											</div>
											<div class="center-block">
												<div class="result-slider-thumb">
												<?php
													if ( have_rows('s3_tab_1_slajder_vnutri_slajdera') ) { // если найдены данные 
														while ( have_rows('s3_tab_1_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
															?>
																<div class="result-slider-thumb__item">
																	<img src="<?php the_sub_field('s3_tab_1_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
															<?php the_sub_field('s3_tab_1_czentralnyj_zagolovok_slajdera') ?>
														</p>
														<ul>
															<?php
																if ( have_rows('c3_tab_1_spisok_v_slajdere') ) { // если найдены данные 
																	while ( have_rows('c3_tab_1_spisok_v_slajdere') ) { the_row(); // цикл по строкам данных 
																		?>
																			<?php the_sub_field('s3_tab_1_tekst_spiska_v_slajdere') ?>
																		<?php
																	}
																} else {
																	// строки не найдены 
																}
															?>
														</ul>
														<p class="center-block__descrip">
															<?php the_sub_field('s3_tab_1_czentralnyj_podzagolovok_slajdera') ?>
														</p>
													</div>
													<div class="result-slider-nav">
														<?php
															if ( have_rows('s3_tab_1_slajder_vnutri_slajdera') ) { // если найдены данные 
																while ( have_rows('s3_tab_1_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
																	?>
																		<div class="result-slider-nav__item">
																			<img src="<?php the_sub_field('s3_tab_1_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
													<?php the_sub_field('s3_tab_1_slajder_sleduyushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_1_slajder_sleduyushhee_izobrazhenie') ?>" class="img">
											</div>
										</div>
									<?php
								}
							} else {
								// строки не найдены 
							}
						?>
					</div>
					<div class="lastwork-inner-slider">
						<?php
							if ( have_rows('s3_tab_2_slajder') ) { // если найдены данные 
								while ( have_rows('s3_tab_2_slajder') ) { the_row(); // цикл по строкам данных 
									?>
										<div class="result-slider-item">
											<div class="prev-block">
												<p class="nav-title">
													<?php the_sub_field('s3_tab_2_slajder_predydushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_2_slajder_predydushhee_izobrazhenie') ?>" class="img">
											</div>
											<div class="center-block">
												<div class="result-slider-thumb">
												<?php
													if ( have_rows('s3_tab_2_slajder_vnutri_slajdera') ) { // если найдены данные 
														while ( have_rows('s3_tab_2_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
															?>
																<div class="result-slider-thumb__item">
																	<img src="<?php the_sub_field('s3_tab_2_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
															<?php the_sub_field('s3_tab_2_czentralnyj_zagolovok_slajdera') ?>
														</p>
														<ul>
															<?php
																if ( have_rows('c3_tab_2_spisok_v_slajdere') ) { // если найдены данные 
																	while ( have_rows('c3_tab_2_spisok_v_slajdere') ) { the_row(); // цикл по строкам данных 
																		?>
																			<?php the_sub_field('s3_tab_2_tekst_spiska_v_slajdere') ?>
																		<?php
																	}
																} else {
																	// строки не найдены 
																}
															?>
														</ul>
														<p class="center-block__descrip">
															<?php the_sub_field('s3_tab_2_czentralnyj_podzagolovok_slajdera') ?>
														</p>
													</div>
													<div class="result-slider-nav">
														<?php
															if ( have_rows('s3_tab_2_slajder_vnutri_slajdera') ) { // если найдены данные 
																while ( have_rows('s3_tab_2_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
																	?>
																		<div class="result-slider-nav__item">
																			<img src="<?php the_sub_field('s3_tab_2_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
													<?php the_sub_field('s3_tab_2_slajder_sleduyushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_2_slajder_sleduyushhee_izobrazhenie') ?>" class="img">
											</div>
										</div>
									<?php
								}
							} else {
								// строки не найдены 
							}
						?>
					</div>
					<div class="lastwork-inner-slider">
						<?php
							if ( have_rows('s3_tab_3_slajder') ) { // если найдены данные 
								while ( have_rows('s3_tab_3_slajder') ) { the_row(); // цикл по строкам данных 
									?>
										<div class="result-slider-item">
											<div class="prev-block">
												<p class="nav-title">
													<?php the_sub_field('s3_tab_3_slajder_predydushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_3_slajder_predydushhee_izobrazhenie') ?>" class="img">
											</div>
											<div class="center-block">
												<div class="result-slider-thumb">
												<?php
													if ( have_rows('s3_tab_3_slajder_vnutri_slajdera') ) { // если найдены данные 
														while ( have_rows('s3_tab_3_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
															?>
																<div class="result-slider-thumb__item">
																	<img src="<?php the_sub_field('s3_tab_3_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
															<?php the_sub_field('s3_tab_3_czentralnyj_zagolovok_slajdera') ?>
														</p>
														<ul>
															<?php
																if ( have_rows('c3_tab_3_spisok_v_slajdere') ) { // если найдены данные 
																	while ( have_rows('c3_tab_3_spisok_v_slajdere') ) { the_row(); // цикл по строкам данных 
																		?>
																			<?php the_sub_field('s3_tab_3_tekst_spiska_v_slajdere') ?>
																		<?php
																	}
																} else {
																	// строки не найдены 
																}
															?>
														</ul>
														<p class="center-block__descrip">
															<?php the_sub_field('s3_tab_3_czentralnyj_podzagolovok_slajdera') ?>
														</p>
													</div>
													<div class="result-slider-nav">
														<?php
															if ( have_rows('s3_tab_3_slajder_vnutri_slajdera') ) { // если найдены данные 
																while ( have_rows('s3_tab_3_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
																	?>
																		<div class="result-slider-nav__item">
																			<img src="<?php the_sub_field('s3_tab_3_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
													<?php the_sub_field('s3_tab_3_slajder_sleduyushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_3_slajder_sleduyushhee_izobrazhenie') ?>" class="img">
											</div>
										</div>
									<?php
								}
							} else {
								// строки не найдены 
							}
						?>
					</div>
					<div class="lastwork-inner-slider">
						<?php
							if ( have_rows('s3_tab_4_slajder') ) { // если найдены данные 
								while ( have_rows('s3_tab_4_slajder') ) { the_row(); // цикл по строкам данных 
									?>
										<div class="result-slider-item">
											<div class="prev-block">
												<p class="nav-title">
													<?php the_sub_field('s3_tab_4_slajder_predydushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_4_slajder_predydushhee_izobrazhenie') ?>" class="img">
											</div>
											<div class="center-block">
												<div class="result-slider-thumb">
												<?php
													if ( have_rows('s3_tab_4_slajder_vnutri_slajdera') ) { // если найдены данные 
														while ( have_rows('s3_tab_4_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
															?>
																<div class="result-slider-thumb__item">
																	<img src="<?php the_sub_field('s3_tab_4_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
															<?php the_sub_field('s3_tab_4_czentralnyj_zagolovok_slajdera') ?>
														</p>
														<ul>
															<?php
																if ( have_rows('c3_tab_4_spisok_v_slajdere') ) { // если найдены данные 
																	while ( have_rows('c3_tab_4_spisok_v_slajdere') ) { the_row(); // цикл по строкам данных 
																		?>
																			<?php the_sub_field('s3_tab_4_tekst_spiska_v_slajdere') ?>
																		<?php
																	}
																} else {
																	// строки не найдены 
																}
															?>
														</ul>
														<p class="center-block__descrip">
															<?php the_sub_field('s3_tab_4_czentralnyj_podzagolovok_slajdera') ?>
														</p>
													</div>
													<div class="result-slider-nav">
														<?php
															if ( have_rows('s3_tab_4_slajder_vnutri_slajdera') ) { // если найдены данные 
																while ( have_rows('s3_tab_4_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
																	?>
																		<div class="result-slider-nav__item">
																			<img src="<?php the_sub_field('s3_tab_4_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
													<?php the_sub_field('s3_tab_4_slajder_sleduyushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_4_slajder_sleduyushhee_izobrazhenie') ?>" class="img">
											</div>
										</div>
									<?php
								}
							} else {
								// строки не найдены 
							}
						?>
					</div>
					<div class="lastwork-inner-slider">
						<?php
							if ( have_rows('s3_tab_5_slajder') ) { // если найдены данные 
								while ( have_rows('s3_tab_5_slajder') ) { the_row(); // цикл по строкам данных 
									?>
										<div class="result-slider-item">
											<div class="prev-block">
												<p class="nav-title">
													<?php the_sub_field('s3_tab_5_slajder_predydushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_5_slajder_predydushhee_izobrazhenie') ?>" class="img">
											</div>
											<div class="center-block">
												<div class="result-slider-thumb">
												<?php
													if ( have_rows('s3_tab_5_slajder_vnutri_slajdera') ) { // если найдены данные 
														while ( have_rows('s3_tab_5_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
															?>
																<div class="result-slider-thumb__item">
																	<img src="<?php the_sub_field('s3_tab_5_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
															<?php the_sub_field('s3_tab_5_czentralnyj_zagolovok_slajdera') ?>
														</p>
														<ul>
															<?php
																if ( have_rows('c3_tab_5_spisok_v_slajdere') ) { // если найдены данные 
																	while ( have_rows('c3_tab_5_spisok_v_slajdere') ) { the_row(); // цикл по строкам данных 
																		?>
																			<?php the_sub_field('s3_tab_5_tekst_spiska_v_slajdere') ?>
																		<?php
																	}
																} else {
																	// строки не найдены 
																}
															?>
														</ul>
														<p class="center-block__descrip">
															<?php the_sub_field('s3_tab_5_czentralnyj_podzagolovok_slajdera') ?>
														</p>
													</div>
													<div class="result-slider-nav">
														<?php
															if ( have_rows('s3_tab_5_slajder_vnutri_slajdera') ) { // если найдены данные 
																while ( have_rows('s3_tab_5_slajder_vnutri_slajdera') ) { the_row(); // цикл по строкам данных 
																	?>
																		<div class="result-slider-nav__item">
																			<img src="<?php the_sub_field('s3_tab_5_kartinka_slajdera_vnutri_drugogo_slajdera'); ?>" class="img">
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
													<?php the_sub_field('s3_tab_5_slajder_sleduyushhij_zagolovok') ?>
												</p>
												<img src="<?php the_sub_field('s3_tab_5_slajder_sleduyushhee_izobrazhenie') ?>" class="img">
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
			</div>
		</div>
	</section>

	<section class="banner-form wrapper mb-100">
		<div class="banner-form-inner animated left">
			<div class="banner-form__img">
				<img src="<?php the_field('s4_kartinka'); ?>" class="img">
			</div>
			<div class="banner-form__text">
				<p class="yellow-title">
					<?php the_field('s4_nadzagolovok'); ?>
				</p>
				<div class="pl">
					<h2 class="title">
						<?php the_field('s4_zagolovok'); ?>
					</h2>
					<p class="text">
						<?php the_field('s4_podzagolovok'); ?>
					</p>
					<form action="" class="banner-fb">
						<input type="tel" data-validate-field="tel" name="Телефон" placeholder="Номер телефона"
							required="">
						<button class="btn-orange" name="sendForm" type="submit">
							Оставить заявку +
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>

	<section class="about-main mb-100" id="about">
		<div class="wrapper">
			<p class="yellow-title">
				<?php the_field('s5_nadzagolovok'); ?>
			</p>
			
			<div class="about-main-wrapper">
				<div class="about-main-info">
					<div class="about-main__text">
					<h2 class="title">
				<?php the_field('s5_zagolovok'); ?>
			</h2>
						<p>
							<?php the_field('s5_tekst'); ?>
						</p>
						<p>
							<?php the_field('s5_tekst_2'); ?>
						</p>
					</div>
					<!-- <div class="about-main__vid animated left">
						<p class="about-main__vid-title">
							<?php the_field('s5_video_tekst'); ?>
						</p>
						<div class="about-main__vid-arrow">
							<img src="<?php echo bloginfo('template_url'); ?>/assets/img/icon/arrow-krivaya.svg" alt="">
						</div>
						<div class="about-main__vid-preview popup__toggle-2">
							<img src="<?php the_field('s5_video_kartinka'); ?>" class="img">
						</div>
					</div> -->
					<div class="bullets-withplus">
						<div class="bullets-withplus__item">
							<span class="plus-icon"></span>
							<p class="bullets-withplus__title">
								<?php the_field('c5_blok_1_zagolovok'); ?>
							</p>
							<p class="bullets-withplus__text">
								<?php the_field('c5_blok_1_podzagolovok'); ?>
							</p>
						</div>
						<div class="bullets-withplus__item">
							<span class="plus-icon"></span>
							<p class="bullets-withplus__title">
								<?php the_field('c5_blok_2_zagolovok'); ?>
							</p>
							<p class="bullets-withplus__text">
								<?php the_field('c5_blok_2_podzagolovok'); ?>
							</p>
						</div>
						<div class="bullets-withplus__item">
							<span class="plus-icon"></span>
							<p class="bullets-withplus__title">
								<?php the_field('c5_blok_3_zagolovok'); ?>
							</p>
							<p class="bullets-withplus__text">
								<?php the_field('c5_blok_3_podzagolovok'); ?>
							</p>
						</div>
					</div>
				</div>
				<div class="about-main-img animated right">
					<img src="<?php the_field('s5_kartinka') ?>" class="img">
				</div>
			</div>
		</div>
	</section>

	<section class="reviews mb-100" id="review">
		<div class="wrapper">
			<p class="yellow-title">
				<?php the_field('s6_nadzagolovok'); ?>
			</p>
			<h2 class="title pl">
				<?php the_field('s6_zagolovok'); ?>
			</h2>
			<div class="reviews-slider">
				<?php
					if ( have_rows('c6_otzyvy') ) { // если найдены данные 
						while ( have_rows('c6_otzyvy') ) { the_row(); // цикл по строкам данных 
							?>
								<a href="<?php the_sub_field('s6_kartinka_otzyva'); ?>" class="reviews-slider-img" data-fancybox="gallery-1">
									<img src="<?php the_sub_field('s6_kartinka_otzyva'); ?>">
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
				<img src="<?php the_field('s7_kartinka') ?>" class="img">
			</div>
			<div class="banner-form__text">
				<div class="pl">
					<div class="banner-form__sticker">
						<?php the_field('s7_data') ?>
					</div>
					<h2 class="title">
						<?php the_field('s7_zagolovok'); ?>
					</h2>
					<p class="text">
						<?php the_field('s7_tekst') ?>
					</p>
					<form action="" class="banner-fb">
						<input type="tel" data-validate-field="tel" name="Телефон" placeholder="Номер телефона"
							required="">
						<button class="btn-orange" name="sendForm" type="submit">
							Оставить заявку +
						</button>
					</form>
				</div>
			</div>
		</div>
	</section>
<?php get_footer(); ?>