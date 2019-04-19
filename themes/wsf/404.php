<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage wsf
 * @since wsf 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title">Страница не найдена (#404)</h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p>Неверный адрес либо страница отсутствует!</p>
					<p>Вернуться на <a href="/">главную</a></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>