<?php include 'includes/header.php'; ?>


<?php

  $db = new Database();

  $query = "SELECT 
   posts.id as id,
   posts.title as title,
   posts.author as author,
   posts.created_at as created_at,
   cats.cat_name as cat_name
   FROM posts 
   INNER JOIN cats ON posts.category = cats.id ORDER BY created_at DESC";

  $posts = $db->select($query); 

  $query = "SELECT * FROM cats ORDER BY created_at DESC";

  $cats = $db->select($query);
  
?>
<table class="table table-striped">
	<tr>
		<th>Post ID#</th>
		<th>Post Title</th>
		<th>Category</th>
		<th>Author</th>
		<th>Date</th>
	</tr>
    <?php while($post = $posts->fetch(PDO::FETCH_OBJ)) : ?>
        <tr>
            <td><?php echo $post->id; ?></td>
            <td><a href="edit_post.php?id=<?php echo $post->id; ?>"><?php echo $post->title; ?></a></td>
            <td><?php echo $post->cat_name; ?></td>
            <td><?php echo $post->author; ?></td>
            <td><?php echo formatDate($post->created_at); ?></td>
            
        </tr>
    <?php endwhile; ?>
</table>


<table class="table table-striped">
	<tr>
		<th>Category ID#</th>
		<th>Category Name</th>
	</tr>

    <?php while ($cat = $cats->fetch(PDO::FETCH_OBJ)) : ?> 
	<tr>
		<td><?php echo $cat->id; ?></td>
		<td><a href="edit_category.php?id=<?php echo $cat->id; ?>"><?php echo $cat->cat_name; ?></a></td>
	</tr>
    <?php endwhile; ?>
</table>

<?php include 'includes/footer.php'; ?>	
	     