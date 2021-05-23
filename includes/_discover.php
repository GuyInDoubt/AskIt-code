<?php include 'includes/_dblink.php'; ?>

<h1 class="text-center mt-3 mb-10">Discover</h1> 
    <?php 
    $sql = "SELECT * FROM `categories`"; 
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)){
      $category_ID = $row['category_ID'];
      $categoryName = $row['category_Name'];
      $categoryDesc = $row['category_Desc'];
      echo '<div class="d-flex justify-content-evenly flex-wrap text-center">
            <div class="card mx-3 mb-5" style="width: 18rem;">
              <img src="https://source.unsplash.com/300x200/?coding,{' . $categoryName . '}" class="card-img-top">
              <div class="card-body">
              <h5 class="card-title">' . $categoryName . '</h5>
                <p class="card-text ">' . $categoryDesc . '</p>
                <a href="' . $categoryName . '.php?category_ID=' . $category_ID . '" class="btn btn-primary">Open</a>
              </div>
            </div>';
    }
    ?> 