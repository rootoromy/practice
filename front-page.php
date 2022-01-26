<?php get_header(); //header.phpを読み込む ?>
<div class="content-wrap">
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
	<!-- body-area start-->
	<div id="body-area-wrap" class="body-area-wrap">
		<section id="area" class="area-1 area-1-wrap">
			<div class="area-1-box">
				<div class="area-1-box-img">
					<div class="textbox">
						<div class="textbox-wrap">
							<div class="title">ABOUT US</div>
							<div class="text">
							DIGSMILEは、デザインで人を笑顔にする会社。<br>
							なんでもない日常に少しのワクワクと遊び心を提供します。笑顔には世界を変える力がある、デザインには人を幸せにする力がある。毎日に幸せを感じて生きていきたい。<br>
							DIGSMILEの社名にはそんな想いが込められています。
							</div>
							<div class="job-list__link">
								<a href="#" class="btn">
									READ MORE
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
		<section id="area" class="area-2 area-2-wrap">
			<div class="area-2-box">
				<!-- <img class="area-2-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/airport-img.png" alt="city">
				<img class="area-2-img" src="<?php echo get_stylesheet_directory_uri(); ?>/img/friends-shadow-img.png" alt="city"> -->
			</div>
		</section>
		<section id="area" class="area-3 area-3-wrap">
		</section>
		<section id="area" class="area-4 area-4-wrap">
		</section>
	</div>
	<!-- body-area end-->
</div>
<?php get_footer(); //footer.phpを読み込む