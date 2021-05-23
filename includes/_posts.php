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
        $postTitle = $row['postTitle'];
        $postBody = $row['postBody'];
        $postID = $row['postID'];

        echo '<div class="container p-3 shadow p-3 bg-body rounded">
        <div class="d-flex">
        <h1><i class="fa fa-user"></i></h1>
        <div class="postTitle py-2 px-2"><h3><a href="postD.php?postID=' . $postID . '"> ' . $postTitle .' </a></h3></div>
        </div>
        <div class="postDesc"><p>' . $postBody .'</p></div>
    </div>';

    }
?> 