<?php
  $id = $_GET['id'];
  require_once('../database/connection.php');
  $db= getDatabaseConnection();
  $article= getNewsItems($db,$id);
  $comments= getComments($db,$id);
  ?>
common();
    <section id="news">
      
      <article>
        <header>
          <h1><a href="article.php"><?=$article['title']?></a></h1>
        </header>
        <img src="https://picsum.photos/600/300?<?=$article['id']?>" alt="">
        <p> <?=$article['introduction']?></p>
        <section id="comments">
          <h1><?=$article['comments']?></h1>
          <?php foreach ($comments as $comment) { ?>
          <article class="comment">
            <span class="user"><?=$comment['name']?></span>
            <span class="date"><?=date('F j', $comment['published'])?></span>
            <p><?= $comment['text']?></p>
          </article>
          <?php } ?>
          <form>
            <h2>Add your voice...</h2>
            <label>Username 
              <input type="text" name="username">
            </label>
            <label>E-mail
              <input type="email" name="email">
            </label>
            <label>Comment
              <textarea name="comment"></textarea>            
            </label>
            <button formaction="#" formmethod="post">Reply</button>
          </form>
        </section>
        <footer>
          <span class="author">Dominic Woods</span>
          <span class="tags"><a href="index.html">#politics</a> <a href="index.html">#economy</a></span>
          <span class="date">15m</span>
          <a class="comments" href="article.php#comments">5</a>
        </footer>
      </article>
    </section>
common_footer();
