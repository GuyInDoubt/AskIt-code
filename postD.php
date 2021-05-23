<!doctype html>
<html lang="en">

<head>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>AskIt</title>
</head>

<body>
    <!--Including components-->
    <?php include 'includes/_header.php'; ?>
    <?php include 'includes/_dblink.php'; ?>
    <?php       
    $id = $_GET['postID']; 
    $sql = "SELECT * FROM `userposts` WHERE postID = $id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $postTitle = $row['postTitle'];
        $postBody = $row['postBody'];

        echo ' 
        <div class="container">
            <div class="card mx-5 my-3">
                <h5 class="card-header">Featured</h5>
                <div class="card-body p-3">
                    <h3 class="card-title">' . $postTitle . '</h3>
                    <p class="card-text">' . $postBody . '</p>
                </div>
            </div>
            <h4 class="mx-5 mt-5 text-secondary">Discussion</h4>
        </div>
        ';
    }
    ?>
      <div class="container my-3">
         <form action="<?php $_SERVER['REQUEST_URI']?>" method="post">
         <div class="mb-3 mx-5">
          <label for="Post Body" class="form-label">Add comment</label>
           <textarea class="form-control" id="comment" name="comment"></textarea>
         </div>
         <button type="submit" class="btn btn-success mx-5">Submit</button>
         </form>
      </div>
    <?php
        $method = $_SERVER['REQUEST_METHOD'];
        if($method == 'POST'){
            $comment = $_POST['comment'];
            $sql = "INSERT INTO `comments` (`comment`, `postID`, `commentTime`, `commentUser`) VALUES ('$comment', '$id', current_timestamp(), '0')";
            $result = mysqli_query($conn, $sql);
        }
    ?>
    <?php       
    $id = $_GET['postID']; 
    $sql = "SELECT * FROM `comments` WHERE postID = $id";
    $result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $id = $row['commentID'];
        $comment = $row['comment'];
        $time = $row['commentTime'];
        echo '<div class="container mx-5">
        <div class="d-flex mx-5">
        <h2><i class="fa fa-user px-3 ml-5"></i></h2>
        <div class="commentUser py-2"><h5>GirlInDoubt at ' . $time . '</h5></div>
        </div>
        <div class="container mx-5"><div class="comment mx-5"><p>' . $comment .'</p></div></div>
    </div>';
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>