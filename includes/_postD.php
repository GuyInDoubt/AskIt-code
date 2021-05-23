<?php include 'includes/_header.php'; ?>
<?php       
    $id = $_GET['postID']; 
    $sql = "SELECT * FROM `userposts` WHERE postID = $id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $postTitle = $row['postTitle'];
        $postBody = $row['postBody'];
    }
?> 