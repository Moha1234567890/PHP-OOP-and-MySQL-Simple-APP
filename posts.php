<?php include 'includes/header.php'; ?>

<?php 
  $db = new Database();

  if(isset($_GET['cats'])) {
    $cats = $_GET['cats'];

    $query = "SELECT * FROM posts WHERE category = " . $cats;
    global $posts;
    $posts = $db->select($query);

   
  }
 
  //$posts;

  

  $query = "SELECT * FROM cats";

  $cats = $db->select($query);

  ?>

  <?php while($post = $posts->fetch(PDO::FETCH_OBJ)) : ?>
<div class="blog-post">
            <h2 class="blog-post-title"><?php echo $post->title; ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($post->created_at); ?> by <a href="#"><?php echo $post->author; ?></a></p>
				<p><?php echo $post->body; ?></p>
           <a class="readmore" href="post.php?id=<?php echo $post->id; ?>">Read More</a>
          </div><!-- /.blog-post -->
		  
      <?php endwhile; ?>
<?php include 'includes/footer.php'; ?>