<?php function common(){?>
    <!DOCTYPE html>
<html lang="en-US">
  <head>
    <title>Super Legit News</title>    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="csss/style.css" rel="stylesheet">
    <link href="csss/layout.css" rel="stylesheet">
    <link href="csss/responsive.css" rel="stylesheet">
    <link href="csss/comments.css" rel="stylesheet">
    <link href="csss/forms.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <h1><a href="csss/article.php">Super Legit News</a></h1>
      <h2><a href="csss/article.php">Where fake news are born!</a></h2>
      <div id="signup">
        <a href="csss/register.html">Register</a>
        <a href="csss/login.html">Login</a>
      </div>
    </header>
    <nav id="menu">
      <!-- just for the hamburguer menu in responsive layout -->
      <input type="checkbox" id="hamburger"> 
      <label class="hamburger" for="hamburger"></label>

      <ul>
        <li><a href="csss/article.php">Local</a></li>
        <li><a href="csss/article.php">World</a></li>
        <li><a href="csss/article.php">Politics</a></li>
        <li><a href="csss/article.php">Sports</a></li>
        <li><a href="csss/article.php">Science</a></li>
        <li><a href="csss/article.php">Weather</a></li>
      </ul>
    </nav>
    <aside id="related">
      <article>
        <h1><a href="#">Duis arcu purus</a></h1>
        <p>Etiam mattis convallis orci eu malesuada. Donec odio ex, facilisis ac blandit vel, placerat ut lorem. Ut id sodales purus. Sed ut ex sit amet nisi ultricies malesuada. Phasellus magna diam, molestie nec quam a, suscipit finibus dui. Phasellus a.</p>
      </article>        
      <article>
        <h1><a href="#">Sed efficitur interdum</a></h1>
        <p>Integer massa enim, porttitor vitae iaculis id, consequat a tellus. Aliquam sed nibh fringilla, pulvinar neque eu, varius erat. Nam id ornare nunc. Pellentesque varius ipsum vitae lacus ultricies, a dapibus turpis tristique. Sed vehicula tincidunt justo, vitae varius arcu.</p>
      </article>
      <article>
        <h1><a href="#">Vestibulum congue blandit</a></h1>
        <p>Proin lectus felis, fringilla nec magna ut, vestibulum volutpat elit. Suspendisse in quam sed tellus fringilla luctus quis non sem. Aenean varius molestie justo, nec tincidunt massa congue vel. Sed tincidunt interdum laoreet. Vivamus vel odio bibendum, tempus metus vel.</p>
      </article>
    </aside>
<?php }?>
<?php function common_footer(){ ?>
    <footer>
      <p>&copy; Fake News, 2022</p>
    </footer>
  </body>
</html>
<?php }?>