<?php
/**
 * Template Name: Testing
 */



$posts = get_posts(['post_type' => 'reviews', 'numberposts' => 2, 'orderby' => 'date', 'order' => 'DESC']);
// var_dump($posts);


$terms = get_the_terms($posts[0], 'reviewsCategory');
// var_dump($terms);

?>

<body>
    <h1><?php echo $terms[0]->name; ?></h1>
</body>