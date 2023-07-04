<?php get_header(); ?>
<main>
	<section class="main_visual js_fadeIn">
		<div class="splide" aria-label="スライダー">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/images/mv1_pc.webp" class="PC" alt="スライダー画像_PC_1">
          <img src="<?php echo get_template_directory_uri(); ?>/images/mv1_sp.webp" class="SP" alt="スライダー画像_SP_1">
        </li>
        <li class="splide__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/images/mv2_pc.webp" class="PC" alt="スライダー画像_PC_2">
          <img src="<?php echo get_template_directory_uri(); ?>/images/mv2_sp.webp" class="SP" alt="スライダー画像_SP_2">
        </li>
        <li class="splide__slide">
          <img src="<?php echo get_template_directory_uri(); ?>/images/mv3_pc.webp" class="PC" alt="スライダー画像_PC_3">
          <img src="<?php echo get_template_directory_uri(); ?>/images/mv3_sp.webp" class="SP" alt="スライダー画像_SP_3">
        </li>
      </ul>
    </div>
  </div>

		<div class="main_visual__title">
			<h2>
			<p><span>人の価値と</span></p>
			<p><span>未来を想像する</span></p>
      </h2>
			<h3>
			<p><span>CREATING VALUE FOR</span></p>
			<p><span>PEOPLE AND THE FUTURE</span></p>
      </h3>
		</div>
	</section>
		<section class="news js_fadeIn">
			<div class="container"></div>
				<div class="content_inner">
					<div class="news_layout">
						<div class="section__title">
							<h4>NEWS</h4>
							<p>お知らせ</p>
						</div>
							<ul class="news__list">
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
								<li>
									<time>0000.00.00</time>
									<p>ニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入りますニュース記事が入ります</p>
								</li>
							</ul>
						</div>
						<p class="news__list-other"><a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=140">お知らせ一覧はこちら</a></p>
				</div>
			</div>
		</section>
		<section class="company_profile js_fadeIn">
			<div class="container">
				<div class="company_profile__list company">
					<div class="profile__images">
						<img src="<?php echo get_template_directory_uri(); ?>/images/company.jpg" alt="会社概要のイメージ画像">

					</div>
					<div class="profile_items">
						<div class="profile_items__text">
							<h5>会社概要</h5>
							<p>株式会社LULLの企業情報をお伝えします。<br>
							私たちは「人の価値と未来を創造する」を理念とし、人の持つ「価値」 を伸ばしていく事をミッションとしています。</p>
						</div>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>?page_id=74">会社概要を詳しく見る</a>
					</div>
				</div>
				<div class="company_profile__list services">
					<div class="profile__images">
						<img src="<?php echo get_template_directory_uri(); ?>/images/services.jpg" alt="事業内容のイメージ画像">
					</div>
					<div class="profile_items">
						<div class="profile_items__text">
							<h5>事業内容</h5>
							<p>株式会社LULLは、様々な事業モデルを通してお客様と企業様と繋がっています。LULLの「価値」を感じて頂けるよう、満足度の高いサービスを提供します。</p>
						</div><a href="">事業内容を詳しく見る</a>
					</div>
				</div>
				<div class="company_profile__list recruit">
					<div class="profile__images">
						<img src="<?php echo get_template_directory_uri(); ?>/images/recruit.jpg" alt="採用情報のイメージ画像">
					</div>
					<div class="profile_items">
						<div class="profile_items__text">
							<h5>採用情報</h5>
							<p>株式会社LULLは、様々な事業モデルを通してお客様と企業様と繋がっています。LULLの「価値」を感じて頂けるよう、満足度の高いサービスを提供します。</p>
						</div><a href="">採用情報を詳しく見る</a>
					</div>
				</div>
			</div>
		</section>
	<section class="section_blog js_fadeIn">
		<div class="container">
			<div class="section__title">
				<h4>BLOG</h4>
				<p>ブログ</p>
			</div>
			<div class="content_inner">
				<ul class="blog__list">
					<li class="blog__list__items">
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpg" alt="ブログの挿入画像">
						<p class="list__items__title">1人1人の可能性と活躍のできる場をお届けしたい。</p>
						<div class="list__items__type_date">
							<p>社員紹介</p><time>2022.10.01</time>
						</div>
					</li>
					<li class="blog__list__items">
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog2.jpg" alt="ブログの挿入画像">
						<p class="list__items__title">社内交流会開催！</p>
						<div class="list__items__type_date">
							<p>社内イベント</p><time>2022.04.10</time>
						</div>
					</li>
					<li class="blog__list__items">
						<img src="<?php echo get_template_directory_uri(); ?>/images/blog3.jpg" alt="ブログの挿入画像">
						<p class="list__items__title">クリエイティブの先の感動を伝える。</p>
						<div class="list__items__type_date">
							<p>社員紹介</p><time>2022.02.14</time>
						</div>
					</li>
				</ul>
				<p class="blog__list--all"><a href= "<?php echo esc_url( home_url( '/' ) ); ?>?page_id=140">ブログ一覧はこちら</a></p>
			</div>
		</div>
	</section>
</main>
	<?php
get_footer();
?>


</body>
</html>
