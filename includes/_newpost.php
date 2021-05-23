<?php include 'includes/_dblink.php'; ?>

<?php 
    $sql = "SELECT * FROM `categories`"; 
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
        $id = $row['category_ID'];
    }
?>    
<?php       
    $id = $_GET['category_ID']; 
    $sql = "SELECT * FROM `userposts` WHERE postCategory = $id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
    }
?> 

<div class="container my-4">
  <h3 class="mx-3 text-secondary">New Post</h3>
  <form action="<?php $_SERVER['REQUEST_URI']?>" method="post">
    <div class="mb-3 mx-3">
        <label for="Post Title" class="form-label">Post title</label>
        <input type="text" class="form-control" id="postTitle" name="postTitle">
    </div>
    <div class="mb-3 mx-3">
        <label for="Post Body" class="form-label">Post Body</label>
        <textarea class="form-control" id="postBody" name="postBody" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-success mx-3">Submit</button>
  </form>
</div>

<?php
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST'){
    $postTitle = $_POST['postTitle'];
    $postBody = $_POST['postBody'];
    $sql = "INSERT INTO `userposts` (`postTitle`, `postBody`, `postCategory`, `postUserID`, `timestamp`) VALUES ('$postTitle', '$postBody', '$id', '0', current_timestamp())";
    $result = mysqli_query($conn, $sql);
}
?>