<?php include 'includes/header.php'; ?>


<?php 

  $id = $_GET['id'];

  $db = new Database();

  $query = "SELECT * FROM posts WHERE id = " . $id;
  
  $post = $db->select($query);

  $posts = $post->fetch(PDO::FETCH_OBJ);

  $query = "SELECT * FROM cats";

  $cats = $db->select($query);

?>

<div class="blog-post">
            <h2 class="blog-post-title"><?php echo($posts->title); ?></h2>
            <p class="blog-post-meta"><?php echo formatDate($posts->created_at); ?> by <a href="#">Mark</a></p>
				
				<p><?php echo($posts->body); ?>
</p>
<p>
Praesent sit amet magna gravida, accumsan erat vitae, tempor libero. Mauris vel aliquet lectus, non fringilla velit. Nullam ornare congue justo, sed pharetra risus tempor ut. In et dapibus justo, sed consequat massa. Etiam sapien dui, elementum ut bibendum vitae, elementum sed erat. Etiam vel pulvinar enim, at euismod ligula. Proin laoreet, velit vitae fringilla congue, neque ante iaculis eros, at congue diam leo at lorem. Fusce eget vulputate quam. Morbi viverra felis placerat tincidunt vulputate. Praesent tincidunt eget risus eget congue. Vestibulum erat felis, pretium scelerisque urna ac, sodales pulvinar est. Integer nec metus justo. Praesent eu tristique nisi.</p>
          </div><!-- /.blog-post -->		      
<?php include 'includes/footer.php'; ?>