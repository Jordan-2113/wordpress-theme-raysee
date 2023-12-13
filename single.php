<?php
get_header();
?>

<head>
  <title>single article</title>
</head>


<main>
  <div class="main-visual">
    <div class="main-title">
      <div class="main-title-time">
      <?php
        $created_date = get_the_date('Y-m-d', $post_id);
        // Extract year, month, and date from the created date
        $yeara = date('Y', strtotime($created_date));
        $montha = date('m', strtotime($created_date));
        $datea = date('d', strtotime($created_date));
        ?>
        <div class="main-title-year"><?php echo $yeara?></div>
        <div class="main-title-date"><?php echo $montha?>/<?php echo $datea ?></div>
      </div>
      <div class="main-title-head">
        <h1><?php echo the_title(); ?></h1>
      </div>
    </div>
    <div class="main-img">
      <div class="main-img-date">
        <div class="main-img-dates">
        <?php
          // Get the categories for the current post
          $categories = get_the_category();

          // Display category names
          if ($categories) {
              foreach ($categories as $category) {
                  echo $category->name;
                  break;
              }
          }
          ?>
        </div>
        <div><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt=""><?php echo get_the_date('Y年n月j日'); ?></div>
      </div>
    </div>
  </div>
  <div class="main-share">
    <div class="main-share-article">
      <div class="main-share-single-list">
        <div class="main-share-single-img">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
        </div>
        <div class="main-share-single-content">
          <div>
            <?php echo get_the_content(); ?>
          </div>
          <!-- <div class="main-share-single-date"><img src="<?php echo get_template_directory_uri()?>/assets/img/main-time-ico.svg" alt="">
            <?php echo get_the_date('Y年n月j日'); ?>
          </div> -->
        </div>
      </div>
    </div>
    <?php
            // Get the current post ID
            $post_id = get_the_ID();
            // Get the current count for the post
            $count = get_post_meta( $post_id, 'ranking', true );
        ?>
    <div id="ranking-block" class="ranking-block">
      <span class="count-value">
        <?php echo $count; ?>
      </span>
      <button id="count-button" class="counter-button"><img src="<?php echo get_template_directory_uri()?>/assets/img/star-img.png"
          alt="">アクセス数</button>
    </div>
    <a href="<?php echo home_url('/')?>" class="ranking-demo-img">
      <img src="<?php echo get_template_directory_uri()?>/assets/img/ranking.png" alt="">
    </a>

    <div class="main-share-article">
      <div class="main-share-article-title">
        <h3>関連記事</h3>
        <div></div>
      </div>
      <div class="main-share-article-lists">
        <?php
                // Get the current post ID
                $post_id = get_the_ID();

                // Get the category IDs for the current post
                $category_ids = wp_get_post_categories( $post_id );

                // Query related posts based on category IDs
                $related_posts = new WP_Query( array(
                'category__in' => $category_ids,
                'post__not_in' => array( $post_id ),
                'posts_per_page' => 4,
                ) );

                // Display related posts
                if ( $related_posts->have_posts() ) :
                ?>
        <?php while ( $related_posts->have_posts() ) : $related_posts->the_post(); ?>
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
        </a>
        <?php endwhile; ?>
        <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
    <div class="main-share-rank" id="kind">
      <div class="main-share-rank-title">
        <div></div>
        <h3><img src="<?php echo get_template_directory_uri()?>/assets/img/main-rank-icon.svg" alt="">コラムランキング</h3>
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
          <div><img src="<?php echo get_template_directory_uri()?>/assets/img/main-intro-img.png" alt=""></div>
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
  jQuery(document).ready(function ($) {
    // Handle click event for count button
    $('#count-button').on('click', function () {
      // Send AJAX request to increment count
      $.ajax({
        url: '<?php echo admin_url( 'admin- ajax.php' ); ?>',
        type: 'POST',
        data: {
        action: 'increment_count',
        post_id: '<?php echo $post_id; ?>'
      },
        success: function (response) {
          // Update count value on success
          $('#count-block .count-value').text(response);
        }
    });
  });
});
</script>
<script>
jQuery(document).ready(function($) {
  $.ajax({
    url: '<?php echo admin_url('admin-ajax.php'); ?>',
    type: 'POST',
    data: {
      action: 'increment_count',
      post_id: '<?php echo $post_id; ?>'
    },
    success: function(response) {
      $('#count-block .count-value').text(response);
      $('#count-block .ranking-value').text('<?php echo $ranking; ?>');
    }
  });
});
</script>
<?php
get_footer();
?>