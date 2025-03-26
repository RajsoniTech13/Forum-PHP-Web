<?php 
session_start();

echo '<nav class="navbar  navbar-expand-lg navbar-dark  " id="navbar">
<div class="title ml-5 mr-5 md-5 " >iDiscuss</div>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item active">
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
          Codes
        </a>
        <div class="dropdown-menu bg-dark">
          <a class="dropdown-item bg-dark" href="python.php">Python</a>
     
          <a class="dropdown-item bg-dark" href="cpp.php">C++</a>
          <a class="dropdown-item bg-dark" href="c.php">C</a>
          
        </div>
      </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Top Categories
      </a>
      ';
      echo '
      <div class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">';

      $sql = "SELECT category_name, category_id FROM `catagories` LIMIT 3";
      $result = mysqli_query($conn, $sql); 
      while($row = mysqli_fetch_assoc($result)){
        echo '<a class="dropdown-item " href="threadlist.php?catid='. $row['category_id']. '">' . $row['category_name']. '</a>'; 
      }


    echo ' </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="contact.php" >Contact Us</a>
    </li>
  </ul>
  <div class="row mx-2">';
  if (isset($_SESSION['loggedin'])&& $_SESSION['loggedin'] ==true ) {
    echo ' 
    <form class="form-inline my-2 my-lg-0" method ="get" action="search.php">
    
    <p class="text-light my-0 " >  Welcome '.$_SESSION['username'].'</p>
    <a href= "partials/_logout.php" class="btn btn-success ml-2 ">logout</a>
  </form>';
  }
  else {
  echo  '
  <button class="btn btn-success ml-2  " data-bs-toggle="modal" data-bs-target="#loginModal">login</button>
  <button class="btn btn-success mx-2  " data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>';
  }
  echo '  </div>
  </div>
</nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';

if(isset($_GET['signupsuccess']) && $_GET['signupsuccess']=="true"){
  
  echo '<div class="alert alert-success alert-dismissible fade show my-0" role="alert">
              <strong>Success!</strong> You can now login
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
          </div>';  
        
        }

        
        
        ?>
        <!-- // <form class="form-inline my-2 my-lg-0" method ="get" action ="search.php">
        //     <input class="form-control mr-sm-2" type="search" name ="search" placeholder="Search the problems" aria-label="Search" >
        //     <button class="btn btn-outline-success my-2 my-sm-0 mr-3" type="submit">Search</button>
        //   </form>
        <input class="form-control mr-sm-2" type="search" name ="search" placeholder="Search" aria-label="Search" >
    <button class="btn btn-outline-success my-2 my-sm-0 mr-2" type="submit">Search</button> -->