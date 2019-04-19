<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage wsf
 * @since wsf 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
        if (is_single()) :
            if(!(in_category(5))):
                the_title('<h1 class="entry-title">', '</h1>');
                echo '<div class="date">' . get_the_date() . '</div>';
            endif;
        endif;
        ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
        /* translators: %s: Name of current post */
        the_content(sprintf(
            __('Continue reading %s', 'wsf'),
            the_title('<span class="screen-reader-text">', '</span>', false)
        ));

        wp_link_pages(array(
            'before' => '<div class="page-links"><span class="page-links-title">' . __('Pages:', 'wsf') . '</span>',
            'after' => '</div>',
            'link_before' => '<span>',
            'link_after' => '</span>',
            'pagelink' => '<span class="screen-reader-text">' . __('Page', 'wsf') . ' </span>%',
            'separator' => '<span class="screen-reader-text">, </span>',
        ));
        ?>
    </div>

    <footer class="entry-footer">
        <?php edit_post_link(__('Edit', 'wsf'), '<span class="edit-link">', '</span>'); ?>
    </footer>

</article>
