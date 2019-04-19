<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage wsf
 * @since wsf 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

            <div class="news">

                <div class="menu-burger news-burger">
                    <div class="line line1"></div>
                    <div class="line line2"></div>
                    <div class="line line3"></div>
                    <div class="line line4"></div>
                </div>

                <?php while ( have_posts() ) : the_post(); ?>

                <div class="thumb"><?php the_post_thumbnail(); ?></div>

                <div class="news-text">
                    <?php get_template_part( 'content', get_post_format() ); ?>
                </div>
                <?php endwhile; ?>

                <div class="content-table">

                    <div class="row">
                        <div class="grid title-mob">
                            <?php if(!(in_category(5))): ?>
                                <span>Другие новости</span>
                            <?php else: ?>
                                <span>Другие услуги</span>
                            <?php endif; ?>
                        </div>
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                    </div>

                    <div class="row">
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                    </div>

                    <div class="row">
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                    </div>

                    <div class="row">
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                        <div class="grid del"></div>
                    </div>

                </div>


                <div class="news-block">

                    <?php
                    $category = get_the_category();
                    $cat = $category[0]->cat_ID;
                    $params = array(
                        'posts_per_page' => -1,
                        'cat'=> $cat
                    );
                    query_posts($params);

                    $wp_query->is_archive = true;
                    $wp_query->is_home = false;

                    while (have_posts()):
                        the_post(); ?>
                        <div class="article">
                            <?php if(!(is_category(5))): ?>
                                <span class="date"><?php the_time('d.m.Y'); ?></span>
                            <?php endif; ?>
                            <h3 class="title"><?php the_title(); ?></h3>
                            <h4 class="text"><?php the_excerpt(); ?></h4>
                            <a class="details" href="<?php the_permalink(); ?>">Читать далее</a>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>


		</main>
	</div>

<?php get_footer(); ?>
