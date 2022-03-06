<?php include 'includes/header.php'; ?>




<?php 

  

  $db = new Database();

   if(isset($_POST['submit'])) {
    
    $title = $_POST['title'];
    $body = $_POST['body'];
    $category = $_POST['category'];
    $author = $_POST['author'];
    $tags = $_POST['tags'];


    if($title == '' OR $body == '' OR $category == '' OR $author == '' OR $tags == '') {
      echo "<div class='alert alert-danger'>one or more fields are empty</div>";
    } else {

      $query = "INSERT INTO posts SET  title = '$title', body = '$body', 
      category = '$category', author = '$author', tag = '$tags'";

      $db->insert($query);


    }



    

   }

   ?>

   <?php

  //var_dump($posts);

  $query = "SELECT * FROM cats";

  $cats = $db->select($query);

?>

<form role="form" method="post" action="add_post.php">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title">
  </div>
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body"></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
      <?php while($cat = $cats->fetch(PDO::FETCH_OBJ)) : ?>

   
		<option value="<?php echo $cat->id; ?>"><?php echo $cat->cat_name; ?></option>

    <?php endwhile; ?>

	</select>
  </div>
  <div class="form-group">
    <label>Author</label>
    <input name="author" type="text" class="form-control" placeholder="Enter Author Name">
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input name="tags" type="text" class="form-control" placeholder="Enter Tags">
  </div>
  <div>
	<input name="submit" type="submit" class="btn btn-default" value="Submit" />
	<a href="index.php" class="btn btn-default">Cancel</a>
  </div>
  <br>
</form>

<?php include 'includes/footer.php'; ?>