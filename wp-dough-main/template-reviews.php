<?php

/**
 * Template Name: Reviews
 */

 $title = get_the_title();
 $content = get_the_content();
 $post = get_post();
 $args = ['post_type' => 'reviews', 'orderby' => 'date', 'order' => 'DESC'];
 $review_posts = get_posts($args);
?>

<h1><?php echo $title ?></h1>
<h2><?php echo $content ?></h2> 

<a href="http://wordpress-basics/">Homepage</a>

<body>
<div>
    <?php foreach($review_posts as $review):?>
        <hr>
        <h2><?php echo $review->post_title;?></h2>
        <p><?php echo $review->post_content;?></p>
        <h2><?php echo get_field('score', $review->ID) ?></h2>
        <h2><?php echo get_field('link', $review->ID) ?></h2>       
        <hr>
        <?php endforeach; ?>
    </div>
</body>