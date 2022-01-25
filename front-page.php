<?php get_header(); //header.phpを読み込む ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
			if ( have_posts() ) {
				//ループ開始
				while ( have_posts() ) :
					the_post();

					//コンテンツを表示するテンプレートを読み込む
					get_template_part( 'excerpt' );

					//ループ終了
				endwhile;

				//前後のページへのリンク。
				the_posts_pagination( [
					'prev_text' => '&larr;',
					'next_text' => '&rarr;',
				] );
			} else {
				echo '記事はありません。';
			}
			?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

	<!-- hero-area start-->
	<section id="hero-area" class="hero-area">
		<div class="hero-area-wrap">
			<div class="hero-area-box">
				<div class="hero-left">
					<img class="hero-left-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/m-and-c-img.png" alt="baby&mother">
				</div>
				<div class="hero-right"></div>

			</div>
			<div class="copyright-wrap">
				<div class="textbox">
					<div class="text-small">デザインで人を笑顔にする会社<br>DIGSMILE INC.</div>
					<div class="text-large">DESIGN<br>FOR<br>SMILE.</div>
				</div>
			</div>
		</div>
	</section>
	<!-- hero-area end-->
<?php get_footer(); //footer.phpを読み込む