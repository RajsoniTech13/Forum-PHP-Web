<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    #ques {
        min-height: 533px;
    }
    .bg-img{
        background-image: url(../img/bg-card.jpg);
        }
    </style>
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>
 
<body class="bg-dark">
    <?php include 'partials/_dbconnect.php';?>
<header class="slider-header">
     <?php include 'partials/_header.php';?>
      
    <div class="slider">
        <div class="midtext">
            <h2>Welcome to iDiscuss</h2>
			<h1>Solve your Doubt of  <span class="change_content"> </span>  </h1>
			<p>"Experience is the name everyone gives to their mistakes."</p>
        </div>
    </div> 
    </div>
</header>
    
   

<div class="cards-s " >
    <!-- Category container starts here -->
    <div class="container my-4  " id="ques">
        <h2 class="text-center my-4 text-white">iDiscuss - Browse Categories</h2>
        <div class="row my-4">
            <!-- Fetch all the categorys -->

            <!-- Fetch all the categories and use a loop to iterate through categories -->
            <?php 
                    $sql = "SELECT * FROM `catagories`"; 
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){
                    // echo $row['category_id'];
                    // echo $row['category_name'];
                    $id = $row['category_id'];
                    $cat = $row['category_name'];
                    $desc = $row['category_description'];
                    echo '<div class="col-md-4 my-2  " style="display:inline-block;">
                            <div class="card p-3 border  rounded" style=" background-color: black; width: 18rem;">
                                <img src="img/card-'.$id.'.jpg" class="card-img-top" alt="image for this category">
                                <div class="card-body  ">
                                    <h5 class="card-title"><a href="threadlist.php?catid=' . $id . '">' . $cat . '</a></h5>
                                    <p class="card-text text-white">' . substr($desc, 0, 100). '... </p>
                                    <a href="threadlist.php?catid=' . $id . '" class="btn btn-primary">View Threads</a>
                                </div>
                            </div>
                            </div>';
                    } 
                    ?> 

        </div>
    </div>
    </div>
    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>