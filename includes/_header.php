<?php
session_start();

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
<img class="mx-2" src="https://styles.redditmedia.com/t5_2qh1i/styles/communityIcon_tijjpyw1qe201.png?width=256&s=4e76eadc662b8155a93d4d7487a6d3acb35f4334" alt="" width="34" height="34" style="border-radius: 17px">
  <a class="navbar-brand" href="index.php">AskIt</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categories
        </a>
        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item text-light" href="C++.php?category_ID=1">C++</a></li>
          <li><a class="dropdown-item text-light" href="Java.php?category_ID=2">Java</a></li>
          <li><a class="dropdown-item text-light" href="Python.php?category_ID=3">Python</a></li>
          <li><a class="dropdown-item text-light" href="Web Development.php?category_ID=4">Web Development</a></li>
        </ul>
      </li>
    </ul>
    <form class="d-flex mx-2 mt-1">
     <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
     <button class="btn btn-success" type="submit">Search</button>
    </form>';
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
       echo '
       <div class="ml-2 mt-1">
       <button class="btn btn-success">' . $_SESSION['userEmail'] . '</button>
       <a href="includes/_logout.php" class="text-success">Log out</a>
       </div>
       ';
    }
    else{
      echo '
      <div class="ml-2 mt-1">
      <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#logIn">Log In</button>
      <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#signUp">Sign Up</button>
      </div>
      ';
    }

 echo '</div>
</div>
</nav>
'
?>
<?php include 'includes/_login.php'; ?>
<?php include 'includes/_signup.php'; ?>
<?php 
if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  echo '<div class="alert alert-success mb-0" role="alert" id="signUpSuccess">
         Sign In successful, procceed to <button class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#logIn" class="btn-close" data-bs-dismiss="alert" aria-label="Close">log in</button>
        </div>';
}        
?>