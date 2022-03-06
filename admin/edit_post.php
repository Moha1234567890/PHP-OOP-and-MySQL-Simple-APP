<?php include 'includes/header.php'; ?>


<?php 

  $id = $_GET['id'];

  $db = new Database();

  $query = "SELECT * FROM posts WHERE id = " . $id;
  
  $post = $db->select($query);

  $posts = $post->fetch(PDO::FETCH_OBJ);

  //var_dump($posts);

  $query = "SELECT * FROM cats";

  $cats = $db->select($query);

?>



<?php

if(isset($_POST['submit'])) {
    
  $title = $_POST['title'];
  $body = $_POST['body'];
  $category = $_POST['category'];
  $author = $_POST['author'];
  $tags = $_POST['tags'];


  if($title == '' OR $body == '' OR $category == '' OR $author == '' OR $tags == '') {
    echo "<div class='alert alert-danger'>one or more fields are empty</div>";
  } else {

    $query = "UPDATE posts SET  title = '$title', body = '$body', 
    category = '$category', author = '$author', tag = '$tags' WHERE id = ". $id;

    $db->update($query);

  }
  }
?>


<?php 

  if(isset($_POST['delete'])) {
    $query = "DELETE FROM posts WHERE id = " .$id;

    $db->delete($query);

  }





?>

<form role="form" method="post" action="edit_post.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label>Post Title</label>
    <input name="title" type="text" class="form-control" placeholder="Enter Title" value="<?php echo $posts->title; ?>">
  </div>
  <div class="form-group">
    <label>Post Body</label>
    <textarea name="body" class="form-control" placeholder="Enter Post Body"><?php echo $posts->body; ?></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="category" class="form-control">
      <?php while($cat = $cats->fetch(PDO::FETCH_OBJ)) : ?>

        <?php 
          if($cat->id == $posts->category) {
            $selected = 'selected';
          } else {
            $selected = '';
          }

          ?>
		<option <?php echo $selected; ?> value="<?php echo $cat->id; ?>"><?php echo $cat->cat_name; ?></option>

    <?php endwhile; ?>

	</select>
  </div>
  <div class="form-group">
    <label>Author</label>
    <input name="author" type="text" value="<?php echo $posts->author; ?>" class="form-control" placeholder="Enter Author Name">
  </div>
  <div class="form-group">
    <label>Tags</label>
    <input name="tags" type="text" value="<?php echo $posts->tag; ?>" class="form-control" placeholder="Enter Tags">
  </div>
  <div>
	<input name="submit" type="submit" class="btn btn-default" value="Submit" />
	<a href="index.php" class="btn btn-default">Cancel</a>
	<input name="delete" type="submit" class="btn btn-danger" value="Delete" />
	
  </div>
  <br>
</form>

<?php include 'includes/footer.php'; ?>