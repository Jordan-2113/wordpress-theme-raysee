
<?php
get_header();
?>
<head>
  <title>Article</title>
</head>


<main>
        <div class="main-share">
            <div class="main-share-article">
                <div class="main-share-article-title">
                    <h3>関連記事</h3>
                    <div></div>
                </div>
                <div class="main-share-category-content">
                    <?php 
                        $the_query = new WP_Query(array(
                                    'post_type' => 'post',
                                    'orderby' => 'date',
                                    'post_status' => 'publish',
                                    'order' => 'DESC',
                                    'posts_per_page' => -1,
                        )); 
                                while ( $the_query->have_posts() ) : 
                                    $the_query->the_post();
                        ?>
                    <a href="<?php the_permalink(); ?>" class="main-share-article-list">
                        <div class="main-share-article-img">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                        </div>
                        <div class="main-share-article-content">
                            <h3><?php echo the_title();?></h3>
                            <h5><?php echo get_the_content();?></h5>
                            <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt="">
                            <?php echo get_the_date('Y年n月j日'); ?></p>
                        </div>
                    </a>
                    <?php
                        endwhile; 
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </main>

    
<?php
get_footer();
?>