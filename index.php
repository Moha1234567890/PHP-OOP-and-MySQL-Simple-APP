
<?php include "includes/header.php"; ?>
<?php 
  $db = new Database();

  $query = "SELECT * FROM posts ORDER BY created_at ASC";

  $posts = $db->select($query);
  

  $query = "SELECT * FROM cats ORDER BY created_at ASC";

  $cats = $db->select($query);
  

  
  ?>

  <?php while($post = $posts->fetch(PDO::FETCH_OBJ)) : ?>

    
<div class="blog-post">
            <h2 class="blog-post-title"><?php echo($post->title); ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($post->created_at); ?>    by  <a href="#"><?php echo ($post->author); ?></a></p>
				    <p><?php echo shortenText($post->body) ; ?></p>
           <a class="readmore" href="post.php?id=<?php echo($post->id); ?>">Read More</a>
          </div><!-- /.blog-post -->
		  <?php endwhile; ?>
          <!-- <div class="blog-post">
            <h2 class="blog-post-title">PHP 5.6.0beta4 Released</h2>
            <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus pretium commodo felis vel ultrices. Etiam id dui eros. Praesent nunc dui, volutpat at eleifend nec, suscipit a sapien. Morbi leo urna, aliquam a purus eget, tempus cursus nisl. In hac habitasse platea dictumst. Aliquam pulvinar at lorem vel vulputate. Nunc tempus enim neque. Fusce justo nibh, volutpat eget auctor et, malesuada quis odio. Suspendisse convallis consequat lectus, ullamcorper consequat mauris luctus in. Suspendisse accumsan lorem varius tincidunt tristique. Ut nulla libero, feugiat vitae dui ac, dictum adipiscing libero. Sed sit amet augue mi. Nullam luctus ligula ultricies erat volutpat scelerisque. Etiam molestie sodales aliquam. Donec nisl odio, fringilla quis nibh quis, pulvinar ornare nibh. Integer lorem ligula, scelerisque ut felis et, pretium ultricies arcu.</p>
          <a class="readmore" href="post.php?id=1">Read More</a>
		  </div> -->  
<?php include 'includes/footer.php'; ?>
