<?php
/*
 Template Name: Новости
  */

get_header(); ?>


<div class="news">

    <div class="menu-burger news-burger">
        <div class="line line1"></div>
        <div class="line line2"></div>
        <div class="line line3"></div>
        <div class="line line4"></div>
    </div>

    <img class="thumb" src="/images/news-banner.jpeg" alt="Новости">

    <div class="news-text" style="left: 25%">
        <h3 class="title">23-24 ноября 2016 г. в Киеве прошел семинар «СТРОИТЕЛЬСТВО 2016/2017»</h3>
        <span class="date">25.11.2016</span>

        <img style="display: block; width: 100%" src="/images/seminar-1.jpeg" alt="Henesi">

        <p class="text">
            23-24 ноября 2016 г. в Киеве прошел семинар «СТРОИТЕЛЬСТВО 2016/2017»,
            организованный Деловым Клубом «Управления Знаниями» по теме: "СТРОИТЕЛЬСТВО!
            Законодательное и нормативное обеспечение.
            Новые процедуры и правила 2016! Новая разрешительная документация от А до Я"
        </p>
        <img style="display: block; width: 100%" src="/images/seminar-2.jpeg" alt="Henesi">

        <p class="text">
            На семинаре присутствовало много строительных организаций Украины,
            и конечно не обошлось и без сотрудников Проектной организации «Da Vinchi Group».
            Были освещены наиболее актуальные вопросы, законодательное и нормативное обеспечение строительной
            деятельности.
            Практические вопросы по определению стоимости строительства, договорные отношения, земля в строительстве.
            Новая система контроля и надзора за строительством (ГАСИ). НОВЫЕ законодательные инициативы ГАСИ Украины.
        </p>

        <p class="text">
            Мы получили много полезной информации, регулярно отслеживаем и всегда в курсе всех нововведений и изменений
            в строительной отрасли.
        </p>


    </div>


    <div class="news-block">

            <?php
            $current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $params = array(
                'posts_per_page' => 6, // количество постов на странице
                'cat' => 2, // тип постов
                'paged' => $current_page // текущая страница
            );
            query_posts($params);

            $wp_query->is_archive = true;
            $wp_query->is_home = false;

            while (have_posts()):
                the_post(); ?>
        <div class="article">
                <span class="date"><?php the_time('d.m.Y'); ?></span>
                <h3 class="title"><?php the_title(); ?></h3>
                <h4 class="text"><?php the_excerpt(); ?></h4>
            <a class="details" href="<?php the_permalink(); ?>">Читать далее</a>
        </div>
            <?php endwhile;
            ?>

    </div>
    <div class="content-table">

        <div class="row">
            <div class="grid title-mob "><span>Другие новости</span></div>
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
</div>
<?php get_footer(); ?>
