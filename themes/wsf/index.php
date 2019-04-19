<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage wsf
 * @since wsf 1.0
 */

get_header(); ?>

<div class="main-page">

    <img class="mob-main" src="/images/home-mob.png" alt="Da Vinchi Group дизайн архитектурные решения">

    <div class="bckg-wrp main-bg">
        <img src="/images/projects-back.png" data-bg="0" alt="" class="bckg active">
        <img src="/images/main/2-min.jpg" data-bg="1" alt="" class="bckg hide">
        <img src="/images/main/3-min.jpg" data-bg="2" alt="" class="bckg hide">
        <img src="/images/main/4-min.jpg" data-bg="3" alt="" class="bckg hide">
        <img src="/images/main/5-min.jpg" data-bg="4" alt="" class="bckg hide">
        <img src="/wp-content/uploads/2017/04/8.jpg" data-bg="5" alt="" class="bckg hide">
        <img src="/images/main/7-min.jpg" data-bg="6" alt="" class="bckg hide">
        <img src="/images/main/8-min.jpg" data-bg="7" alt="" class="bckg hide">
        <img src="/images/main/9-min.jpg" data-bg="8" alt="" class="bckg hide">
        <img src="/images/main/10-min.jpg" data-bg="9" alt="" class="bckg hide">
        <img src="/images/main/11-min.jpg" data-bg="10" alt="" class="bckg hide">
        <img src="/images/main/12-min.jpg" data-bg="11" alt="" class="bckg hide">
        <img src="/images/main/13-min.jpg" data-bg="12" alt="" class="bckg hide">
        <img src="/images/main/14-min.jpg" data-bg="13" alt="" class="bckg hide">
        <img src="/images/main/1-min.jpg" data-bg="14" alt="" class="bckg">

    </div>

    <div class="overlay-content">
        <p class="title"><?php echo __('[:ru]Единственным критерием истины является опыт[:en]The only criterion of truth is experience[:]') ?></p>
        <p class="author"><?php echo __('[:ru]Леонардо да Винчи[:en]Leonardo da Vinci[:]') ?></p>
        <a href="/projects.html" class="button"><?php echo __('[:ru]Наши проекты[:en]Our Projects[:]') ?></a>
    </div>

    <div class="content-table">
        <div class="row">
            <a href="#" class="cell"></a>
            <a href="/projects.html" data-id="1" class="cell button-13"></a>
            <a href="/projects.html" data-id="2" class="cell button-12"></a>
            <a class="cell button-8" data-id="3" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>
        </div>

        <div class="row">
            <a href="#" class="cell"></a>
            <a class="cell button-9" data-id="5" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>
            <a class="cell button-10" data-id="6" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>
            <a class="cell button-11" data-id="7" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>
        </div>

        <div class="row">
            <a href="#" class="cell" data-id="8"></a>
            <a class="cell button-5" data-id="9" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>
            <a class="cell button-6" data-id="10" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>
            <a class="cell button-7" data-id="11" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>
        </div>

        <div class="row">

            <a class="cell button-1" data-id="12" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>

            <a class="cell button-2" data-id="13" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>

            <a class="cell button-3" data-id="14" href="/projects.html" class="cell">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>

            <a class="cell button-4" data-id="4" href="/projects.html">
                <div class="logo-table">
                    <div class="text-cell">
                        <p class="name"></p>
                        <p class="city"></p></div>
                </div>
            </a>
        </div>
    </div>


</div>
<footer id="footer">

</footer>

</div><!------ #page ------->


<div id="preloader">
    <main>
        <div class="dank-ass-loader">
            <div class="row">
                <div class="arrow up outer outer-18"></div>
                <div class="arrow down outer outer-17"></div>
                <div class="arrow up outer outer-16"></div>
                <div class="arrow down outer outer-15"></div>
                <div class="arrow up outer outer-14"></div>
            </div>
            <div class="row">
                <div class="arrow up outer outer-1"></div>
                <div class="arrow down outer outer-2"></div>
                <div class="arrow up inner inner-6"></div>
                <div class="arrow down inner inner-5"></div>
                <div class="arrow up inner inner-4"></div>
                <div class="arrow down outer outer-13"></div>
                <div class="arrow up outer outer-12"></div>
            </div>
            <div class="row">
                <div class="arrow down outer outer-3"></div>
                <div class="arrow up outer outer-4"></div>
                <div class="arrow down inner inner-1"></div>
                <div class="arrow up inner inner-2"></div>
                <div class="arrow down inner inner-3"></div>
                <div class="arrow up outer outer-11"></div>
                <div class="arrow down outer outer-10"></div>
            </div>
            <div class="row">
                <div class="arrow down outer outer-5"></div>
                <div class="arrow up outer outer-6"></div>
                <div class="arrow down outer outer-7"></div>
                <div class="arrow up outer outer-8"></div>
                <div class="arrow down outer outer-9"></div>
            </div>
        </div>
    </main>
</div>

<?php wp_footer(); ?>

</body>
</html>

