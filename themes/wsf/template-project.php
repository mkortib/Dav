<?php
/*
 Template Name: Шаблон для проектов
  */

get_header(); ?>

    <div class="project-n">
        <div class="top-block">
            <img class="main-img" src="<?php the_field('proj_thumb') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
            <h1><?php the_field('proj_name') ?></h1>
        </div>
        <div class="wrap">
            <div class="intro">
                <img class="logo" src="<?php the_field('proj_logo'); ?>" alt="Логотип <?php the_field('proj_name') ?>">
                <p class="descr"><?php the_field('proj_intro') ?></p>
            </div>
            <div class="teps">
                    <?php if( get_field('proj_tep_1') ): ?>
                        <div class="item">
                            <h4><?php the_field('proj_tep_1') ?></h4>
                            <p><?php the_field('proj_tep_1_descr') ?> м<sup>2</sup></p>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('proj_tep_2') ): ?>
                        <div class="item">
                            <h4><?php the_field('proj_tep_2') ?></h4>
                            <p><?php the_field('proj_tep_2_descr') ?> м<sup>2</sup></p>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('proj_tep_3') ): ?>
                        <div class="item">
                            <h4><?php the_field('proj_tep_3') ?></h4>
                            <p><?php the_field('proj_tep_3_descr') ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if( get_field('proj_tep_4') ): ?>
                        <div class="item">
                            <h4><?php the_field('proj_tep_4') ?></h4>
                            <p><?php the_field('proj_tep_4_descr') ?></p>
                        </div>
                    <?php endif; ?>
            </div>
            <div class="cnt">
                <div class="slider-project owl-carousel">
                    <?php if( get_field('proj_slider_1') ): ?>
                        <a href="<?php the_field('proj_slider_1_b') ?>" class="big" data-fancybox="group_1">
                            <img class="slide" src="<?php the_field('proj_slider_1') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('proj_slider_2') ): ?>
                        <a href="<?php the_field('proj_slider_2_b') ?>" class="big" data-fancybox="group_1">
                            <img class="slide" src="<?php the_field('proj_slider_2') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                        </a>
                    <?php endif; ?>
                    <?php if( get_field('proj_slider_3') ): ?>
                    <a href="<?php the_field('proj_slider_3_b') ?>" class="big" data-fancybox="group_1">
                        <img class="slide" src="<?php the_field('proj_slider_3') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                    <?php endif; ?>
                    <?php if( get_field('proj_slider_4') ): ?>
                    <a href="<?php the_field('proj_slider_4_b') ?>" class="big" data-fancybox="group_1">
                        <img class="slide" src="<?php the_field('proj_slider_4') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                    <?php endif; ?>
                    <?php if( get_field('proj_slider_5') ): ?>
                    <a href="<?php the_field('proj_slider_5_b') ?>" class="big" data-fancybox="group_1">
                        <img class="slide" src="<?php the_field('proj_slider_5') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                    <?php endif; ?>
                    <?php if( get_field('proj_slider_6') ): ?>
                    <a href="<?php the_field('proj_slider_6_b') ?>" class="big" data-fancybox="group_1">
                        <img class="slide" src="<?php the_field('proj_slider_6') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                    <?php endif; ?>
                    <?php if( get_field('proj_slider_7') ): ?>
                    <a href="<?php the_field('proj_slider_7_b') ?>" class="big" data-fancybox="group_1">
                        <img class="slide" src="<?php the_field('proj_slider_7') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                    <?php endif; ?>
                    <?php if( get_field('proj_slider_8') ): ?>
                    <a href="<?php the_field('proj_slider_8_b') ?>" class="big" data-fancybox="group_1">
                        <img class="slide" src="<?php the_field('proj_slider_8') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                    <?php endif; ?>
                    <?php if( get_field('proj_slider_9') ): ?>
                    <a href="<?php the_field('proj_slider_9_b') ?>" class="big" data-fancybox="group_1">
                        <img class="slide" src="<?php the_field('proj_slider_9') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                    <?php endif; ?>
                    <?php if( get_field('proj_slider_10') ): ?>
                    <a href="<?php the_field('proj_slider_10_b') ?>" class="big" data-fancybox="group_1">
                        <img class="slide" src="<?php the_field('proj_slider_10') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                    <?php endif; ?>
                </div>
                <?php if( get_field('proj_photo_1') ): ?>
                    <a data-fancybox="group_1" class="img_small big" href="<?php the_field('proj_photo_1_b') ?>">
                        <img src="<?php the_field('proj_photo_1') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                <?endif; ?>
            </div>
            <div class="flex">
                <div class="half txt-bg">
                    <p class="txt"><?php the_field('proj_text_left') ?></p>
                </div>
                <div class="half">
                    <a data-fancybox="group_1" class="big" href="<?php the_field('proj_photo_2_b') ?>">
                        <img src="<?php the_field('proj_photo_2') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                </div>
            </div>
            <div class="flex">
                <div class="half txt-bg">
                    <p class="txt"><?php the_field('proj_text_right') ?> </p>
                </div>
                <div class="half">
                    <a data-fancybox="group_1" class="big" href="<?php the_field('proj_photo_3_b') ?>">
                        <img src="<?php the_field('proj_photo_3') ?>" alt="Визуализация <?php the_field('proj_name') ?>">
                    </a>
                </div>
            </div>
            <?php if( get_field('video') ): ?>
                <div class="video">
                    <?php the_field('video') ?>
                </div>
            <?php endif; ?>
            <div class="controls">
                <div class="prev">
                    <a href="/projects.html"><?php echo __('[:ru]Вернуться к проектам[:en]Back to projects[:]') ?></a>
                </div>
                    <a href="<?php the_field('proj_next') ?>" class="next"><?php echo __('[:ru]Следующий проект[:en]Next project[:]') ?></a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>