<?php

/*
 * Template Name: home
 */

$title = get_the_title();
$content = get_the_content();
$post = get_post();
$args = ['post_type' => 'reviews', 'orderby' => 'date', 'order' => 'DESC', 'numberpost' => 3];
$review_posts = get_posts($args);

$homeButton = ['url' => get_home_url(), 'title' => 'Klik hier voor de homepage', 'class' => null];
$adminButton = ['url' => get_home_url() . '/wp-admin', 'title' => 'Klik om in de admin dashboard te komen', 'class' => 'admin-btn'];
$buttonGroup = [$homeButton, $adminButton];

/*render('views/templates/home.php', ['title' => $title, 'content' => $content, 'buttonGroup' => $buttonGroup]);*/


?>

<!-- V body van homepage V -->
<body>

<h1><a href="http://wordpress-basics/abous-us/">about us</a></h1>
<hr>
<h1><a href="http://wordpress-basics/reviews/">reviews</a></h1>

<p>kont</p>
<div>
    <?php foreach($review_posts as $review):?>
        <h2><?php echo $review->post_title;?></h2>
        <p><?php echo $review->post_content;?></p>
        <?php endforeach; ?>
        
</div>
    
</body>