<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="vacation">

            <div class="menu-burger news-burger">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
                <div class="line line4"></div>
            </div>

            <?php while ( have_posts() ) : the_post(); ?>

                <div class="thumb">
                    <img src="<?php the_field("illustration");?>">
                </div>

                <div class="vacation-text">
                    <div class="date"><?php the_date(); ?></div>
                    <div class="entry-content">
                        <ul class="vacancies">
                            <li>
                                <?php if( get_field('duties') ): ?>
                                    <div class="name">
                                        <p class="vacancies-name">Должостные обязанности</p>
                                    </div>

                                    <div class="definition"><?php the_field('duties'); ?></div>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( get_field('requirements') ): ?>
                                    <div class="name">
                                        <p class="vacancies-name">Требования</p>
                                    </div>
                                    <div class="definition"><?php the_field('requirements'); ?></div>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php if( get_field('requirements') ): ?>
                                    <div class="name">
                                        <p class="vacancies-name">условия</p>
                                    </div>
                                    <div class="definition"><?php the_field('сonditions'); ?></div>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>

                    <div class="entry-footer">
                        <?php edit_post_link(__('Edit', 'wsf'), '<span class="edit-link">', '</span>'); ?>
                    </div>
                </div>

            <?php endwhile; ?>


            <div class="content-table">

                <div class="row">
                    <div class="grid title-mob"><span>Актуальные вакансии</span></div>
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

            <div class="vacation-block">

                <?php
                $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $params = array(
                    'cat'            => 3,
                    'posts_per_page' => 5,
                    'order'          => 'DESC',
                    'orderby'        => 'date'
                );
                query_posts($params);

                $wp_query->is_archive = true;
                $wp_query->is_home = false;

                while (have_posts()):
                    the_post(); ?>
                    <div class="article">
                        <span class="date"><?php the_time('d.m.Y'); ?></span>
                        <h3 class="title"><?php the_title(); ?></h3>
                        <a class="details" href="<?php the_permalink(); ?>">Подробнее</a>
                    </div>
                <?php endwhile;
                ?>
            </div>
        </div>

    </main>
</div>

<?php get_footer(); ?>
