<?php 
    /*
        Template Name: Cover
    */
?>

<?php get_header(); ?>
	<section class="opening-main cover-page">
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

        <div class="wrapper main-page">
                            <h1 class="yellow-title animated left _action"><?php the_title();?></h1>

                            <?php the_content();?>
		</div>
	</section>




<?php get_footer(); ?>