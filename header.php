<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <?php 
        wp_head();
    ?>
</head>

<body>
	<header id="header">
		<div class="wrapper">
			<a href="<?php echo get_home_url(); ?>" class="header-logo">
				<img src="<?php the_field('heder_logo', 16); ?>">
			</a>
			<div class="header-yandex">
				<img src="<?php the_field('heder_yandeks_kartinka', 16); ?>">
			</div>
			<div class="header-geo">
				<p>
					<?php the_field('heder_adres', 16); ?>
				</p>
				<a href="<?php the_field('heder_kak_dobratsya_ssylka', 16); ?>" target="_blank"><?php the_field('heder_kak_dobratsya_tekst', 16); ?></a>
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
			<div class="header-tel">
				<a href="<?php the_field('heder_telefon_nomer', 16); ?>"><?php the_field('heder_telefon', 16); ?></a>
				<p>
					<?php the_field('heder_tekst', 16); ?>
				</p>
			</div>
			<div class="burger-menu">
				<span></span>
			</div>
		</div>
	</header>
	<span class="header-padding"></span>
