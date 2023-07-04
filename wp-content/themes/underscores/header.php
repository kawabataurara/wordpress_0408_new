<!--
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

</head> -->

<!DOCTYPE html>
<html lang="ja">
<head>
	<?php wp_head(); ?>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Document</title>
	<link href="<?php echo get_template_directory_uri(); ?>/css/reset.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">
</head>
<body <?php body_class(); ?>>

	<header>
		<div class="header__items">
			<div class="header__icon">
				<h1><a href="<?php echo esc_url(home_url('/')); ?>index.php"><svg aria-label="株式会社LULL" class="is--loaded" viewbox="0 0 300 52" xmlns="http://www.w3.org/2000/svg">
				<g>
					<polygon points="10.5,41.6 10.5,0 0,0 0,52 42,52 42,41.6 &#9;"></polygon>
					<polygon points="117.7,41.6 117.7,0 107.2,0 107.2,52 149.2,52 149.2,41.6 &#9;"></polygon>
					<polygon points="170.2,41.6 170.2,0 159.7,0 159.7,52 201.8,52 201.8,41.6 &#9;"></polygon>
					<path d="M82,0v10.4V26v5.2c0,5.7-4.7,10.4-10.5,10.4c-5.8,0-10.5-4.7-10.5-10.4V26V10.4V0H50.4v20.8V26v5.2 c0,11.5,9.4,20.8,21,20.8h0c11.6,0,21-9.3,21-20.8V26v-5.2V0H82z"></path>
					<rect height="26" width="5.3" x="218" y="26"></rect>
					<polygon points="251.7,26 251.7,43.3 241.2,26 235.9,26 235.9,52 241.2,52 241.2,34.6 251.7,52 256.9,52 256.9,26 &#9;"></polygon>
					<rect height="5.2" width="5.3" x="294.7" y="46.8"></rect>
					<path d="M287.7,29.8L287.7,29.8c-5.1-5.1-13.4-5.1-18.6,0c-5.1,5.1-5.1,13.3,0,18.4v0c5.1,5.1,13.4,5.1,18.6,0l-3.7-3.7 c-3.1,3-8.1,3-11.1,0v0c-3.1-3-3.1-8,0-11c3.1-3,8.1-3,11.1,0v0L287.7,29.8z"></path>
				</g></svg></a></h1>
			</div>
			<!-- 追加 -->
			<button id="js_humberger" type="button" class="humberger" aria-controls="navigation" aria-expanded="false">
        <span class="humberger__line"></span>
      </button>
			<div class="header__nav-area js_nav-area" id="navigation">
      <nav id="js_global_navigation" class="global_navigation">
        <ul class="global_navigation__list">
          <li class="global_navigation__link">
            <a href="<?php echo esc_url(home_url('/')); ?>?page_id=74" class="global_navigation__link--a">
              COMPANY
            </a>
          </li>
             <li class="global_navigation__link global_navigation_services">
            <button type="button" class="global_navigation__link--a -accordion js_sp_accordion-trigger" aria-expanded = 'false' aria-controls="accordion_item">
              SERVICES
            </button>
               <div id="accordion_item" class="accordion">
                 <ul class="accordion__list">
                   <li>
                     <a href="https://lull-inc.co.jp/ses/" target="_blank" class="accordion__link">
                       WEB制作事業
                     </a>
                   </li>
                    <li>
                     <a href="https://lull-inc.co.jp/ses/" target="_blank" class="accordion__link">
                       SES事業
                     </a>
                   </li>
                    <li>
                     <a href="https://lull-inc.co.jp/ses/" target="_blank" class="accordion__link">
                       一般派遣事業
                     </a>
                   </li>
                 </ul>
               </div>
          </li>
          <li class="global_navigation__link">
            <a href="https://recruit.lull-inc.co.jp/"  target="_blank" class="global_navigation__link--a">
              RECRUIT
            </a>
          </li>
					<li class="global_navigation__link global_navigation_form">
            <a href="<?php echo esc_url(home_url('/')); ?>?page_id=78" class="global_navigation__link--a">
              お問い合わせ
            </a>
          </li>
        </ul>
        <div id="js_focus-trap" tabindex="0"></div>
      </nav>
    </div>
  </div>
		</div>
	</header>
