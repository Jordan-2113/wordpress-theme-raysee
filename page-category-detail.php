<?php
get_header();
?>

<head>
    <title>Category-detail</title>
</head>

<main>
    <div class="sandbox-latest category-detail">
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
                    <div class="sandbox-category" onclick="stick(<?php echo $order_number; ?>)" id="sandboxCate<?php echo $order_number; ?>"><?php echo $cat_name; ?></div>
                <?php $i++; } ?>
            </div>
        </div>
        <div class="sandbox-latest-content">
            <div class="sandbox-latest-lists" id="sandBox1">
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
                <a href="<?php the_permalink(); ?>" class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                            </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists" id="sandBox2">
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
                <a href="<?php the_permalink(); ?>" class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                            </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists" id="sandBox3">
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
                <a href="<?php the_permalink(); ?>" class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                            </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists" id="sandBox4">
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
                <a href="<?php the_permalink(); ?>" class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                            </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists" id="sandBox5">
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
                <a href="<?php the_permalink(); ?>" class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                            </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
            <div class="sandbox-latest-lists" id="sandBox6">
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
                <a href="<?php the_permalink(); ?>" class="sandbox-latest-list">
                    <div class="sandbox-latest-list-img">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>"  alt="">
                    </div>
                    <div class="sandbox-latest-list-text">
                        <p><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></p>
                        <h3><?php echo the_title();?></h3>
                        <div><?php echo get_the_content();?></div>
                    </div>
                            </a>
                <?php
                    endwhile;
                    wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

    <?php
                if(isset($_POST['category1'])) {
                    $category1=$_POST['category1'];
                    error_log($category1.'Your here', 0);
                }
           ?>
</main>

<script>
    $(document).ready(function () {
        $("#sandboxCate<?php echo $category1; ?>").click();
    });
</script>




<?php
get_footer();
?>