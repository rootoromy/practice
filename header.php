<!doctype html>
<html <?php language_attributes(); //言語属性を表示 ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); //文字エンコーディングを表示 ?>"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="profile" href="https://gmpg.org/xfn/11"/>
	<?php wp_head(); //ヘッダーに必ず書く ?>
</head>

<body <?php body_class(); //<body>にクラス属性を追加する ?>>
<?php wp_body_open(); //<body>直後に必ず書く。wp5.2以降で使用可能。wp5.1以前の場合はこの行を削除する ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content">コンテンツへスキップ</a>

	<header id="masthead" class="site-header">

		<div class="site-branding-container">
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : //カスタムロゴがあるか ?>
					<div class="site-logo"><?php the_custom_logo(); //カスタムロゴを出力する ?></div>
				<?php endif; ?>
				<?php if ( is_front_page() && is_home() ) : //トップページの場合 ?>
					<h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
				<?php else : ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php endif; ?>
				<p class="site-description">
					<?php bloginfo( 'description' ); //サイトの説明を表示 ?>
				</p>
				<?php if ( has_nav_menu( 'menu-1' ) ) : //メニューがあるかどうか ?>
					<nav id="site-navigation" class="main-navigation" aria-label="トップメニュー">
						<?php
						wp_nav_menu( //メニューを表示
							[
								'theme_location' => 'menu-1',
								'menu_class'     => 'main-menu',
							]
						);
						?>
					</nav><!-- #site-navigation -->
				<?php endif; ?>
			</div><!-- .site-branding -->
		</div><!-- .site-branding-container -->

		<!-- header start -->
		<div class="header-wrap">
			<div class="header__logo">
				<h1 class="logo">
					<a href="/" class="logo__link"><img class="logo__img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/site-logo.png" alt="WEB LOGO"></a>
				</h1>
			</div>
			<div class="hamburger-btn-wrap">
				<div class="hamburger-btn">
					<div class="openbtn1-wrap">
					<div class="menu">MENU</div>
						<div class="openbtn1"><span></span><span></span><span></span></div>
					</div>
				</div>
			</div>
		</div>
		<!-- header end -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">