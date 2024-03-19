<?php
  require_once('../database/connection.php');
  require_once('../database/news.php');
  $db= getDatabaseConnection();
  $articles=getAllNews($db);
  common();   
  
  common_footer();
?>
    <section id="news">
    <?php foreach($articles as $article) { 
      $tags = explode(',', $article['tags']);
      $date = date('F j', $article['published']);
      ?>
      <article>
        <header>
          <h1><a href="article.php?id=<?=$article['id']?>"><?=$article['title']?></a></h1>
        </header>
        <img src="https://picsum.photos/600/300?<?=$article['id']?>" alt="">
        <p><?=$article['introduction']?></p>
        <footer>
          <span class="author"><?=$article['name']?></span>
          <span class="tags"> <?php foreach ($tags as $tag) { ?>
              <a href="index.php">#<?=$tag?></a>
            <?php } ?></span>
          <span class="date"><?=$date?></span>
          <a class="comments" href="article.php?id=<?=$article['id']?>#comments"><?=$article['comments']?></a>
        </footer>
      </article>
      <?php } ?>
    </section>
