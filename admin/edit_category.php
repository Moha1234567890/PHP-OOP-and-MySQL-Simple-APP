<?php include 'includes/header.php'; ?>


<?php 

  $id = $_GET['id'];

  $db = new Database();

  $query = "SELECT * FROM cats WHERE id = " . $id;
  
  $cat = $db->select($query);

  $cats = $cat->fetch(PDO::FETCH_OBJ);

  //var_dump($posts);



?>



<?php

if(isset($_POST['submit'])) {
    
  $cat_name = $_POST['cat_name'];
  


    if($cat_name == '') {
      echo "<div class='alert alert-danger'>one or more fields are empty</div>";
    } else {

      $query = "UPDATE cats SET  cat_name = '$cat_name' WHERE id = ". $id;

      $db->update($query);

    }
  }
?>

<?php 

  if(isset($_POST['delete'])) {
    $query = "DELETE FROM cats WHERE id = " .$id;

    $db->delete($query);

  }





?>

<form role="form" method="post" action="edit_category.php?id=<?php echo $id; ?>">
  <div class="form-group">
    <label>Category Name</label>
    <input name="cat_name" type="text" value="<?php echo $cats->cat_name; ?>" class="form-control" placeholder="Enter Category">
  </div>
  <div>
  <input name="submit" type="submit" class="btn btn-default" value="Submit" />
  <a href="index.php" class="btn btn-default">Cancel</a>
  <input name="delete" type="submit" class="btn btn-danger" value="Delete" />
  </div>
  <br>
</form>
<?php include 'includes/footer.php'; ?>