<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="format-detection" content="telephone=no">
	<?php get_template_part("parts/part-meta"); ?>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/icon/favicon.ico">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();
									echo '/assets/css/base.css?' . filemtime(get_stylesheet_directory() . '/assets/css/base.css'); ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri();
									echo '/assets/css/popup.css?' . filemtime(get_stylesheet_directory() . '/assets/css/popup.css'); ?>">
	<?php if (is_page(1236)): ?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();
										echo '/assets/css/lp_wd.css?' . filemtime(get_stylesheet_directory() . '/assets/css/lp_wd.css'); ?>">
	<?php endif; ?>
	<?php if (is_page(22971) || (isset($post->post_parent) && $post->post_parent === 22971)) : //DONGRI通信バックナンバーページ
	?>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri();
										echo '/assets/css/mailmagaarchive.css?' . filemtime(get_stylesheet_directory() . '/assets/css/mailmagaarchive.css'); ?>">
	<?php endif; ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slider-pro.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/lightbox.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/perfect-scrollbar.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/modal-video.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/qulmee2025.css">
	<link
		rel="stylesheet"
		href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

	<script type="module" crossorigin src="<?php echo get_template_directory_uri(); ?>/assets/js/qulmee2025.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@300;400;500;700;900&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<?php if (is_archive() and is_paged()): ?>
		<meta name="robots" content="noindex">
	<?php endif; ?>

	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-5TJ4T2M')
	</script>
	<!-- End Google Tag Manager -->

	<script>
		(function() {
			var html = document.getElementsByTagName('html') || [];
			html[0].classList.add('enable-javascript');
			window.addEventListener("load", function() {
				html[0].classList.add('window-load');
			}, false);
		})();
	</script>

	<?php
	wp_head();
	?>

</head>
<?php if (is_page(9226)): ?>

	<body class="<?php showBodyClass(); ?> ">
	<?php elseif (isset($post->post_parent) && $post->post_parent === 12) : ?>

		<body class="<?php showBodyClass(); ?> dictionarie">
		<?php elseif (is_page(6654)): ?>

			<body class="<?php showBodyClass(); ?> dictionarie home">
			<?php elseif (isset($post->post_parent) && $post->post_parent === 30) : ?>

				<body class="<?php showBodyClass(); ?> downloadForm">
				<?php elseif (isset($post->post_parent) && $post->post_parent === 11754) : ?>

					<body class="<?php showBodyClass(); ?> schools02">
					<?php elseif (is_page(array('17086', '17095'))): ?>

						<body class="<?php showBodyClass(); ?> dictionary">
						<?php elseif (isset($post->post_parent) && $post->post_parent === 17723) : ?>

							<body class="<?php showBodyClass(); ?> best_solution">
							<?php else: ?>

								<body class="<?php showBodyClass(); ?> qulmee">
								<?php endif; ?>

								<!-- Google Tag Manager (noscript) -->
								<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TJ4T2M" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
								<!-- End Google Tag Manager (noscript) -->

								<div class="wrapper container">
									<header class="header">
										<div class="headerContainer">
											<!-- logo -->
											<p class="logo">
												<a href="<?php echo home_url(); ?>">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="EAST EDUCATION">
												</a>
											</p>
											<!-- /logo -->
											<div class="linkContainer">
												<p class="textLink pc"><a href="/dongri_academy/" target="_blank">DONGRI <br class="pc863">ACADEMY<i class="fas fa-external-link-alt"></i></a></p>
												<div class="sarchContainer">
													<div class="serchBtn"><a href="#"><i class="fas fa-search"></i></a></div>
													<form class="searchForm" method="get" action="<?php echo home_url(); ?>" role="search">
														<input class="search-input" type="search" name="s" placeholder="検索ワードを入れてください。">
														<button class="search-submit" type="submit" role="button"><i class="fas fa-search"></i></button>
													</form>
												</div>
												<div class="cartBtn"><a href="/sp/cart/" target="_blank"><i class="fas fa-shopping-cart"></i></a></div>
												<div class="mypage login">
													<p class="loginBtn"><a href="/login-top/">ログイン</a></p>
												</div>
												<div class="contantBtn pc"><a href="/supports/contact/"><i class="fas fa-envelope"></i>お問い合わせ</a></div>
											</div>
											<div class="menuBtn" id="menuBtn">
												<div></div>
												<div></div>
												<div></div>
											</div>
											<nav id="navContainer" class="nav gNav">
												<?php
												wp_nav_menu(array(
													'theme_location'  => 'global-menu',
													'container'       => '',
													'items_wrap' => '<ul>%3$s</ul>',
												));
												?>
											</nav>

										</div>
									</header>