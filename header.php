<!DOCTYPE html>
<html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( is_home() ) { ?>
	<title><?php echo get_option('blogname') ?></title>
<?php }else{?>
	<title><?php wp_title(''); ?></title>
<?php }?>
<link rel="stylesheet" href="<?php echo esc_url( get_theme_file_uri('/css/styles.css') ); ?>" type="text/css" />
<?php wp_head(); ?>
</head>
<body onclick="closeMenu(event)">
<header>
        <div class="container">
            <nav class="header">
                <div class="brand">
                    <div class="logotype">
                        <a href="/">La <strong>Feline</strong></a>
                    </div>
                    <button class="header__toggler" onclick="toogleMenu(event)">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <div class="header__dropdown-menu">
                        <?php wp_nav_menu(['menu' => 'Main dopdown']);?>
                        <div class="dropdown__mobile-btns mobile__show">
                            <a href=""><strong>Inscription</strong> en ligne</a>
                            <a href="https://shop.lafelline.be" target="_blank"><strong>Boutique</strong> en ligne</a>
                        </div>
                        <div class="dropdown__contacts-links mobile__show">
                            <ul>
								<?php wp_nav_menu(['menu' => 'Socials header menu']);?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header__menu">
                    <ul>
                        <li class="mobile__show"><a href="tel:111111111"><img src="<?php echo esc_url( get_theme_file_uri('/images/icons/phone.svg') ); ?>" /></a></li>
                        <li class="mobile__hide"><a href=""><strong>Inscription</strong> en ligne</a></li>
                        <li class="mobile__hide"><a href="https://shop.lafelline.be" target="_blank"><strong>Boutique</strong> en ligne</a></li>
                    </ul>
                </div>
                <div class="header__socials">
                    <ul>
                        <li><a href=""><img src="<?php echo esc_url( get_theme_file_uri('/images/icons/heart.svg') ); ?>" alt="Like" /></a></li>
                        <li><a href=""><img src="<?php echo esc_url( get_theme_file_uri('/images/icons/whatsapp.svg') ); ?>" alt="Whatsapp" /></a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>