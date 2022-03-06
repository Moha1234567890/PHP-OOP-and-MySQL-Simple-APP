<?php include 'includes/header.php'; ?>

<?php 

  

  $db = new Database();

   if(isset($_POST['submit'])) {
    
    $cat_name = trim($_POST['cat_name']);
  


    if($cat_name == '') {
      echo "<div class='alert alert-danger'>name is empty</div>";
    } else {

      $query = "INSERT INTO cats SET  cat_name = '$cat_name'";

      $db->insert($query);


    }



    

   }

   ?>
<form role="form" method="post" action="add_category.php">
  <div class="form-group">
    <label>Category Name</label>
    <input name="cat_name" type="text" class="form-control" placeholder="Enter Category">
  </div>
  <div>
  <input name="submit" type="submit" class="btn btn-default" value="Submit" />
  <a href="index.php" class="btn btn-default">Cancel</a>
  </div>
  <br>
</form>
<?php include 'includes/footer.php'; ?>