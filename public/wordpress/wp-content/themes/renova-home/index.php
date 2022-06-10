<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="format-detection" content="telephone=no">
	
	<title></title>
	<meta name="description" content="">
	<meta name="keywords" content="">

	<meta property="og:title" content="">
	<meta property="og:description" content="">
	<meta property="og:image" content="/assets/images/common/ogp.jpg">
	<meta name="twitter:card" content="summary_large_image">
	<link rel="icon" href="/assets/images/common/favicon.ico">
	<link rel="apple-touch-icon" href="/assets/images/common/apple-touch-icon.png">
	
	<link rel="stylesheet" href="/assets/css/common.css">

	<link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
	<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

	<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	
</head>
<body>
	<!--#include virtual="/assets/ssi/header.html" -->
	<main>
		<section class="slide_show">
			<div class="swiper">
				<!-- Additional required wrapper -->
				<div class="swiper-wrapper">
				  <!-- Slides -->
					<div class="swiper-slide" data-color="white">
						<picture>
							<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/slideshow/pic_1.png">
							<img src="./assets/img/img_pc/main/slideshow/pic_1.png">
						</picture>
					</div>
					<div class="swiper-slide" data-color="white">
						<picture>
							<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/slideshow/pic_2.png">
							<img src="./assets/img/img_pc/main/slideshow/pic_2.png">
						</picture>
					</div>
					<div class="swiper-slide" data-color="white">
						<picture>
							<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/slideshow/pic_3.png">
							<img src="./assets/img/img_pc/main/slideshow/pic_3.png">
						</picture>
					</div>
					<div class="swiper-slide" data-color="black">
						<picture>
							<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/slideshow/pic_4.png">
							<img src="./assets/img/img_pc/main/slideshow/pic_4.png">
						</picture>
					</div>
				</div>
				<!-- If we need pagination -->
				<div class="swiper-pagination"></div>
			</div>
			<div class="slide_text">
				<p class="big_text">
					自然と、<br class="sp">
					あなたと、<br class="sp">
					ともに未来へ</p>
				<ul class="slide_text_list">
					<li class="link_li">
						<a class="link">
							<p class="small_text">私たちの想い</p>
						</a>
					</li>
					<li class="link_li">
						<a class="link">
							<p class="small_text">発電所の現場から</p>
						</a>
					</li>
					<li class="link_li">
						<a class="link">
							<p class="small_text">発電所一覧</p>
						</a>
					</li>
					<li class="link_li">
						<a class="link">
							<p class="small_text">採用情報</p>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<section class="news">
			<div class="section_container news_container">
				<div class="news_menu">
					<div class="title">ニュース</div>
					<ul class="menu_list pc">
						<li>
							<a href="">ニュース一覧</a>
						</li>
						<li>
							<a href="">企業情報</a>
						</li>
						<li>
							<a href="">事業</a>
						</li>
						<li>
							<a href="">イベント</a>
						</li>
						<li>
							<a href="">メディア</a>
						</li>
						<li>
							<a href="">その他</a>
						</li>
					</ul>
				</div>
                <?php
                if( have_posts() ) :
                    while( have_posts() ) : the_post();
                ?>
                <ul class="news_content">
                        <li class="news_li">
                            <div class="date_and_label">
                                <div class="date">
                                    <?php the_time('Y年m月d日'); ?>
                                </div>
                                <div class="label">
                                    <?php the_category(); ?>
                                </div>
                            </div>
                            <div class="content">
								<?php the_title(); ?>
							</div>
						</li>
					</script>
				</ul>
                <?php 
                    endwhile;
                    endif; 
                ?>
				<div class="more_news sp">
					<a href="">ニュース一覧</a>
				</div>
			</div>
		</section>
		<section class="articles">
			<div class="section_container articles_container">
				<p class="section_title">発電所の現場から</p>
               
                <ul class="panels_list">
                <?php
                    // 取得したい内容を配列に記載します（不要箇所は省略可）
                    $args = array(
                        'post_type' => 'articles'   // カスタム投稿タイプ
                    );
                    $the_query = new WP_Query( $args );
                    if ( $the_query->have_posts() ): // 記事情報がある場合はforeachで記事情報を表示

                    while ( $the_query->have_posts() ):
                        $the_query->the_post(); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする

                ?>

						<li class="panel">
							<a href="">
								<div class="panel_img">
                                    <img src="<?php 
                                        the_field('Image')
                                    ?>">
								</div>
								<div class="panel_content">
									<p class="big_text">
										<?php the_title() ?>
									</p>
									<p class="date">
                                        <?php the_time('Y年m月d日'); ?>
									</p>
									<div class="small_text">
                                        <?php the_content(); ?>
                                    </div>
                                    <!-- <div class="tag">
                                        
                                    </div> -->
								</div>
							</a>
						</li>

                        <?php
                        endwhile; 

                        else: // 記事情報がなかったら
                        ?>

                        <?php
                        endif;

                        // 一覧情報取得に利用したループをリセットする
                        wp_reset_postdata();
                        ?>
				</ul>
                
				<!-- <ul class="panels_list">
					<script type="text/x-handlebars-template" class="template2">
						{{#each articles}}
						<li class="panel">
							<a href="">
								<div class="panel_img">
									<img src=>
								</div>
								<div class="panel_content">
									<p class="big_text">
										{{title}}
									</p>
									<p class="date">
										{{date}}
									</p>
									<p class="small_text">
										{{content}}
									</p>
									<ul class="keyword">
										{{#each keywords}}
										<li>{{this}}</li>
										{{/each}}
									</ul>
								</div>
							</a>
						</li>
						{{/each}}
					</script>
				</ul> -->
			</div>
		</section>
		<section class="renewable_business">
			<div class="section_container renewable_business_container">
				<p class="section_title">再生可能エネルギー事業</p>
				<p class="section_title_text">
					レノバは自然の恵みを力にする再生可能エネルギー事業により、地域と共生し、エネルギーの未来を切り開きます。
				</p>
				<div class="map_container">
					<a href="">
						<ul>
							<li class="text">
								<picture>
									<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/renewable_energy_business/map/text.png">
									<img src="./assets/img/img_pc/main/renewable_energy_business/map/text.png">
								</picture>
							</li>
							<li class="map jp_map">
								<picture>
									<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/renewable_energy_business/map/jp_map.png">
									<img src="./assets/img/img_pc/main/renewable_energy_business/map/jp_map.png">
								</picture>
							</li>
							<li class="map asia_map">
								<picture>
									<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/renewable_energy_business/map/south_east_asia_map.png">
									<img src="./assets/img/img_pc/main/renewable_energy_business/map/south_east_asia_map.png">
								</picture>
							</li>
						</ul>
					</a>
				</div>
				<ul class="business_list">
					<li class="list list_1">
						<a href="">
							<div class="business_title">
								<p>太陽光発電</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/renewable_energy_business/pic_1.png">
								<img src="./assets/img/img_pc/main/renewable_energy_business/pic_1.png">
							</picture>
						</a>
					</li>
					<li class="list list_2">
						<a href="">
							<div class="business_title">
								<p>洋上風力発電</p>
								<p>陸上風力発電</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/renewable_energy_business/pic_2.png">
								<img src="./assets/img/img_pc/main/renewable_energy_business/pic_2.png">
							</picture>
						</a>
					</li>
					<li class="list list_3">
						<a href="">
							<div class="business_title">
								<p>バイオマス発電</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/renewable_energy_business/pic_3.png">
								<img src="./assets/img/img_pc/main/renewable_energy_business/pic_3.png">
							</picture>
						</a>
					</li>
					<li class="list list_4">
						<a href="">
							<div class="business_title">
								<p>地熱発電</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/renewable_energy_business/pic_4.png">
								<img src="./assets/img/img_pc/main/renewable_energy_business/pic_4.png">
							</picture>
						</a>
					</li>
					<li class="list list_5">
						<a href="">
							<div class="business_title">
								<p>水力発電</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/renewable_energy_business/pic_5.png">
								<img src="./assets/img/img_pc/main/renewable_energy_business/pic_5.png">
							</picture>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<section class="company_info">
			<div class="section_container company_info_container">
				<p class="section_title">企業情報</p>
				<ul class="list company_info_list">
					<li>
						<a href="">
							<div class="list_title">
								<p>会社概要・アクセス</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/company_info/pic_1.png">
								<img src="./assets/img/img_pc/main/company_info/pic_1.png">
							</picture>
						</a>
					</li>
					<li>
						<a href="">
							<div class="list_title">
								<p>CEOメッセージ</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/company_info/pic_2.png">
								<img src="./assets/img/img_pc/main/company_info/pic_2.png">
							</picture>
						</a>
					</li>
					<li>
						<a href="">
							<div class="list_title">
								<p>経営メンバー</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/company_info/pic_3.png">
								<img src="./assets/img/img_pc/main/company_info/pic_3.png">
							</picture>
						</a>
					</li>
					<li>
						<a href="">
							<div class="list_title">
								<p>企業理念</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/company_info/pic_4.png">
								<img src="./assets/img/img_pc/main/company_info/pic_4.png">
							</picture>
						</a>
					</li>
					<li>
						<a href="">
							<div class="list_title">
								<p>私たちの想い</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/company_info/pic_5.png">
								<img src="./assets/img/img_pc/main/company_info/pic_5.png">
							</picture>
						</a>
					</li>
					<li>
						<a href="">
							<div class="list_title">
								<p>VOICE</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/company_info/pic_6.png">
								<img src="./assets/img/img_pc/main/company_info/pic_6.png">
							</picture>
							<div class="voice">
								<picture>
									<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/company_info/voice.png">
									<img src="./assets/img/img_pc/main/company_info/voice.png">
								</picture>
							</div>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<section class="recruitment">
			<div class="section_container recruitment_container">
				<p class="section_title">採用情報</p>
				<ul class="list recruitment_list">
					<li>
						<a href="">
							<div class="list_title">
								<p>採用情報</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/recruitment/pic_1.png">
								<img src="./assets/img/img_pc/main/recruitment/pic_1.png">
							</picture>
							<div class="jirei">
								<picture>
									<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/recruitment/jirei.png">
									<img src="./assets/img/img_pc/main/recruitment/jirei.png">
								</picture>
							</div>
						</a>
					</li>
					<li>
						<a href="">
							<div class="list_title">
								<p>集え、マルチエンジニア。</p>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/recruitment/pic_2.png">
								<img src="./assets/img/img_pc/main/recruitment/pic_2.png">
							</picture>
						</a>
					</li>
				</ul>
			</div>
		</section>
		<section class="interview">
			<div class="section_container interview_container">
				<p class="section_title">地域とともに</p>
				<ul class="interview_list">
					<li class="text_container">
						<a href="">
							<div class="list_title">
								<div class="title_container">
									<p class="text_1">＜ 秋田バイオマス事例 ＞</p>
									<p class="text_2">パートナーインタビュー</p>
								</div>
							</div>
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/interview/pic_1.png">
								<img src="./assets/img/img_pc/main/interview/pic_1.png">
							</picture>
						</a>
					</li>
					<li class="pic">
						<a href="">
							<picture>
								<source media="(max-width: 1023px)" srcset="./assets/img/img_sp/main/interview/pic.png">
								<img src="./assets/img/img_pc/main/interview/pic.png">
							</picture>
						</a>
					</li>
				</ul>
			</div>
		</section>
	</main>
	<!--#include virtual="/assets/ssi/footer.html" -->
	<script src="/assets/js/libraries/jquery.js"></script>
	<script src="/assets/js/libraries/jquery.easing.js"></script>
	<script src="/assets/js/libraries/picturefill.js"></script>
	<script src="/assets/js/libraries/scrollmagic.js"></script>
	<script src="/assets/js/libraries/bodyscrolllock.js"></script>
	<script src="/assets/js/common.js"></script>
	<script src="/assets/js/data.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/handlebars@latest/dist/handlebars.js"></script>

	<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>
</html>