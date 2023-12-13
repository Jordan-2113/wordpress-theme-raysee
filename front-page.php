<?php
get_header();
?>

<head>
    <title>HOME</title>
</head>

<div class="sandbox-main">
    <div class="sandbox-main-img">
    <?php
        $args = array(
            'post_type' => 'bannerimg',
            'posts_per_page' => 1 // Change the number of posts to display as needed
        );
        $banner_query = new WP_Query($args);
        ?>
        <?php if ($banner_query->have_posts()) : ?>
            <?php while ($banner_query->have_posts()) : $banner_query->the_post(); ?>
                <img src="<?php echo get_the_post_thumbnail_url(); ?>">
            <?php endwhile; ?>
        <?php endif; ?>
        <!-- <img src="<?php echo get_template_directory_uri()?>/assets/img/sandbox-main.png" alt=""> -->
    </div>
    <div class="slick-content-one sandbox-main-slider">
        <div class="sandbox-main-slide">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/sandbox-slide (1).png" alt="">
        </div>
        <div class="sandbox-main-slide">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/sandbox-slide (2).png" alt="">
        </div>
        <div class="sandbox-main-slide">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/sandbox-slide (3).png" alt="">
        </div>
        <div class="sandbox-main-slide">
            <img src="<?php echo get_template_directory_uri()?>/assets/img/sandbox-slide (4).jpg" alt="">
        </div>
    </div>
</div>
<main>
    <div class="sandbox-latest" id="colCategory">
        <div class="sandbox-latest-title">
            <h2>カテゴリー別 最新記事</h2>
        </div>
        <div class="sandbox-latest-categories">
            <div class="sandbox-latest-category">
                <?php
                $categories = get_categories(array(
                    'orderby' => 'id',
                    'order' => 'ASC'
                ));
                    $i = 0;
                foreach ($categories as $category) {
                    $cat_name = $category->name;
                    $order_number = $i + 1;
                    $cat_img = get_term_meta($category->term_id, 'category_image', true);
                    ?>
                <div class="sandbox-category" onclick="stick(<?php echo $order_number; ?>)"
                    id="sandboxCate<?php echo $order_number; ?>">
                    <?php echo $cat_name; ?>
                </div>
                <?php $i++; } ?>
            </div>
        </div>
        <div class="sandbox-latest-content">
            <div class="sandbox-latest-lists slick-content-two" id="sandBox1">
                <?php 
                    $the_query = new WP_Query(array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'category_parent' => '0',
                    )); 
                            while ( $the_query->have_posts() ) : 
                                $the_query->the_post();
                    ?>
                <div class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists  slick-content-two" id="sandBox2">
                <?php 
                    $the_query = new WP_Query(array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'category_name' => '金運',
                    )); 
                            while ( $the_query->have_posts() ) : 
                                $the_query->the_post();
                    ?>
                <div class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists  slick-content-two" id="sandBox3">
                <?php 
                    $the_query = new WP_Query(array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'category_name' => '総合運',
                    )); 
                            while ( $the_query->have_posts() ) : 
                                $the_query->the_post();
                    ?>
                <div class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists  slick-content-two" id="sandBox4">
                <?php 
                    $the_query = new WP_Query(array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'category_name' => '人間関係',
                    )); 
                            while ( $the_query->have_posts() ) : 
                                $the_query->the_post();
                    ?>
                <div class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists  slick-content-two" id="sandBox5">
                <?php 
                    $the_query = new WP_Query(array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'category_name' => '仕事運',
                    )); 
                            while ( $the_query->have_posts() ) : 
                                $the_query->the_post();
                    ?>
                <div class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists  slick-content-two" id="sandBox6">
                <?php 
                    $the_query = new WP_Query(array(
                                'post_type' => 'post',
                                'orderby' => 'date',
                                'post_status' => 'publish',
                                'order' => 'DESC',
                                'category_name' => '占い',
                    )); 
                            while ( $the_query->have_posts() ) : 
                                $the_query->the_post();
                    ?>
                <div class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>
    <div class="main-share">
        <div class="main-share-rank">
            <div class="main-share-rank-title">
                <div></div>
                <h3><img src="<?php echo get_template_directory_uri()?>/assets/img/main-rank-icon.svg" alt="">コラムランキング
                </h3>
                <div></div>
            </div>
            <div class="main-share-rank-content">
                <?php 
                    $the_query = new WP_Query(array(
                        'meta_key' => 'ranking',
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC',
                        'posts_per_page' => 3,
                    )); 
                    $counter = 0;
                    while ( $the_query->have_posts() && $counter < 3 ) : 
                        $the_query->the_post();
                        $counter++;
                    ?>
                <a href="<?php the_permalink(); ?>" class="main-share-article-list">
                    <div class="main-share-article-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
                    </div>
                    <div class="main-share-article-content">
                        <h3>
                            <?php echo the_title();?>
                        </h3>
                        <div class="main-share-article-content-clip">
                            <h5>
                                <?php echo get_the_content();?>
                            </h5>
                        </div>
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt="">
                            <?php echo get_the_date('Y年n月j日'); ?>
                        </p>
                    </div>
                    <div class="main-share-rank-order">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/rank-order-<?php echo $counter; ?>.svg"
                            alt="">
                    </div>
                </a>
                <?php
                        if ( $counter == 3 ) {
                            break;
                        }
                    endwhile; 
                    wp_reset_postdata();
                    ?>
            </div>
        </div>
        <?php
                if(isset($_POST['category1'])) {
                    $category1=$_POST['category1'];
                    error_log($category1.'Your here', 0);
                }
           ?>
        <div class="main-category">
            <div class="main-category-title">
                <div></div>
                <h3>コラムカテゴリー</h3>
                <div></div>
            </div>
            <form class="main-category-content" action="https://fukudake3ea3cd852.wpcomstaging.com/category-detail/"
                method="POST">
                <?php
                $categories = get_categories(array(
                    'orderby' => 'id',
                    'order' => 'ASC'
                ));
                    $i = 0;
                foreach ($categories as $category) {
                    $cat_name = $category->name;
                    $order_number = $i + 1;
                    $cat_img = get_term_meta($category->term_id, 'category_image', true);
                    ?>
                <button type="submit" name="category1" value="<?php echo $order_number; ?>" class="main-category-list">
                    <div><img src="<?php echo get_template_directory_uri()?>/assets/img/main-intro-img.png" alt="">
                    </div>
                    <h4>
                        <?php echo $cat_name; ?>
                    </h4>
                </button>
                <?php $i++; } ?>
            </form>
        </div>
    </div>
</main>

<script>
    $(document).ready(function () {
        $("#sandboxCate1").click();
    });
</script>
<?php
get_footer();
?>