<!doctype html>
<html lang="en">

<head>
    <!--Meta Tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>AskIt</title>
</head>

<body>
    <!--Navbar-->
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
        <a class="nav-link" aria-current="page" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  active" href="about.php">About</a>
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

    <div class="card text-center align-items-center bg-secondary pt-4 pb-3">
        <img class="mx-2"
            src="https://styles.redditmedia.com/t5_2qh1i/styles/communityIcon_tijjpyw1qe201.png?width=256&s=4e76eadc662b8155a93d4d7487a6d3acb35f4334"
            alt="" width="100" height="100" style="border-radius: 50px">
        <div class="card-body text-light">
            <h2>AskIt</h2>
            <h5>A forum for everything geeky</h5>
            <h5>To help, discover and create</h5>
        </div>
    </div>
    <ul class="nav justify-content-center shadow p-2 mb-3 bg-body rounded">
        <li class="nav-item">
            <a class="nav-link" href="index.php">Go to forum</a>
    </ul>
    <div class="container">
        <div class="p-3">
            <h4 class="text-secondary">About AskIt</h4>
            <p>AskIt is an online forum where all programming enthusiasts can post microblogs, tips, suggestions for
                other users, ask questions to get their programming problems resolved, post their projects and even find
                links to tutorials of different languages. </p>
        </div>
        <div class="p-3">
            <h4 class="text-secondary">Forum Rules</h4>
            <ol>
                <li class="py-2">
                    <h5>Please use SEARCH first<h5>
                            <h6>There is a pretty good chance that your problem has been addressed on the forum before,
                                please use search feature first to see if there are already some good threads on the
                                subject</h6>
                </li>
                <li class="py-2">
                    <h5>Be descriptive of your problem<h5>
                            <h6>Try to be as descriptive as possible when describing your problem, this helps other
                                users to assist you better</h6>
                </li>
                <li class="py-2">
                    <h5>Remain respectful of other members at all times<h5>
                            <h6>All posts should be professional and courteous. You have every right to disagree with
                                your fellow community members and explain your perspective.</h6>
                </li>
                <li class="py-2">
                    <h5>No Spam / Advertising / Self-promote in the forum<h5>
                            <h6>Forum defines spam as unsolicited advertisement for goods, services and/or other web
                                sites, or posts with little, or completely unrelated content. Do not spam the forums
                                with links to your site or product, or try to self-promote your website, business or
                                forums etc.</h6>
                </li>
                <li class="py-2">
                    <h5>Do not post other's projects as your own<h5>
                            <h6>Please post your OWN projets. If you wanna post a project made by someone else, make
                                sure to credit them.</h6>
                </li>
            </ol>
        </div>
        <div class="p-3">
            <h4 class="text-secondary">The developer</h4>
            <div class="card">
                <div class="card-header bg-dark text-light">
                    Developed and designed by
                </div>
                <div class="card-body">
                    <h5 class="card-title">Shreyansh @GuyInDoubt</h5>
                    <p class="card-text">A curious web developer and programming enthusiast.</p>
                    <p>Contact through the links given below</p>
                </div>
                <div class="card-footer bg-dark">
                    <div class="btn-group" role="group" aria-label="Basic outlined example">
                        <button type="button" class="btn btn-outline-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                            </svg>
                            <a class="text-secondary" href="mailto:guyindoubtx@gmail.com">Mail</a>
                        </button>
                        <button type="button" class="btn btn-outline-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-github" viewBox="0 0 16 16">
                                <path
                                    d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z" />
                            </svg>
                            <a class="text-secondary" href="https://github.com/GuyInDoubt">Github</a>
                        </button>
                        <button type="button" class="btn btn-outline-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                class="bi bi-linkedin" viewBox="0 0 16 16">
                                <path
                                    d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                            </svg>
                            <a class="text-secondary" href="https://www.linkedin.com/in/guyindoubt/">LinkedIn</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'includes\_login.php'; ?>
    <?php include 'includes\_signup.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
</body>

</html>