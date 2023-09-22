<?php get_header();
pageBanner(
    array(
        'title' => 'Search Results',
        'subtitle' => 'You searched for &rdquo;' . esc_html(get_search_query(false)) . '&ldquo;'
    )
)
    ?>



<div class="container container--narrow page-section">
    <?php
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            get_template_part('template-parts/content', get_post_type());
        }
    } else {
        echo "<h2 class='headline headline--small-plus'>No search results found</h2>";
    }

    echo get_search_form();

    

    echo paginate_links();

    ?>
</div>

<?php
get_footer();
?>