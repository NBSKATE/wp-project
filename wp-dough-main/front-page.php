<?php
/** config for home template **/

$title = get_the_title();
$content = get_the_content();
$post = get_post();
$args = ['post_type' => 'reviews', 'orderby' => 'date', 'order' => 'DESC', 'numberposts' => 3];
$review_posts = get_posts($args);



render('views/templates/home.php', ['title' => $title, 'content' => $content, 'buttonGroup' => $buttonGroup]);


?>

<!-- V body van homepage V -->

<body>

<h1>WONDER REVIEWS</h1>
<h2><a href="http://wordpress-basics/abous-us/">about us</a></h2>
<hr>
<h2><a href="http://wordpress-basics/reviews/">reviews</a></h2>

<p>kont</p>
<div>
    <?php foreach($review_posts as $review):?>
        <hr>
        <h2><?php echo $review->post_title;?></h2>
        <p><?php echo $review->post_content;?></p>
        <p>full review <a href="http://wordpress-basics/reviews/">here</a></p>
        <hr>
        <?php endforeach; ?>
        
        
</div>
    
</body>
