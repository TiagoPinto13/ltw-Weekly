<?php
    require_once('../templates/comments.php');
?>

<?php function output_article($article, $comments = null) {
    
    $tags = explode(',', $article['tags']);
    $date = date('F j', $article['published']); 
    $paragraphs = explode("\n\n", $article['fulltext']); ?>
<?php } ?>
