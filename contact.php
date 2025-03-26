<!doctype html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Welcome to iDiscuss - Coding Forums</title>
    <style>
    .container {
        min-height: 100vh;}
    </style>
</head>
<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }
    * {
        box-sizing: border-box;
    }
    /* Style inputs */
    input[type=text],
    select,
    textarea {
        width: 100%;
        padding: 12px;
        border: 1px solid #ccc;
        margin-top: 6px;
        margin-bottom: 16px;
        resize: vertical;
    }

    input[type=submit] {
        background-color: #04AA6D;
        color: white;
        padding: 12px 20px;
        border: none;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    /* Style the container/contact section */
    .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 10px;
    }

    /* Create two columns that float next to eachother */
    .column {
        float: left;
        width: 50%;
        margin-top: 6px;
        padding: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 600px) {

        .column,
        input[type=submit] {
            width: 100%;
            margin-top: 0;
        }
    }
    </style>
<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>
    <?php
  
    $method = $_SERVER['REQUEST_METHOD'];
    if ($method=='POST'){
        // insert thread into db
        $cn_Fn = $_POST['fname'];
        $cn_dest = $_POST['country'];
        $cn_Ln = $_POST['lname'];
        $cn_desc = $_POST['subject'];
        $sql = "INSERT INTO `contact` (`sno`, `Fname`, `Lname`,`cn_dest`, `cn_desc`, `cn_dt`) VALUES (NULL, '$cn_Fn', '$cn_Ln','$cn_dest', '$cn_desc', current_timestamp())";
        $result = mysqli_query($conn, $sql);
    }
    ?>

        <div class="container">
            <div style="text-align:center">
                <h2>Contact Us</h2>
                <!-- <p>Swing by for a cup of coffee, or leave us a message:</p> -->
            </div>
            <div class="row">
                <div class="column">
                    <img src="img/map.jpg" style="width:100%">
                    <div class="coninfo mt-5 text-center">
                        <h2>MY INFORMATION</h2>
                        <h5> <b> Name : </b><em>iDiscuss</em></h5>
                        <h5> <b> Email : </b><em>davidmailsender28@gmail.com</em></h5>
                        <!-- <h5> <b> Contact Number : </b><em>70********</em></h5> -->
                    </div>
                </div>
                <div class="column">
                    <form action="<?php $_SERVER['REQUEST_URI']; ?>" method="post">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" placeholder="Your name..">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" placeholder="Your last name..">
                        <label for="country">Country</label>
                        <select id="country" name="country">
                            <option value="australia">Australia</option>
                            <option value="canada">Canada</option>
                            <option value="usa">U.S.A</option>
                            <option value="usa">India</option>

                            <option value="usa">BanglaDesh</option>
                            <option value="usa">U.A.E</option>
                            <option value="usa">U.K</option>
                        </select>
                        <label for="subject">Subject</label>
                        <textarea id="subject" name="subject" placeholder="Write something.."
                            style="height:170px"></textarea>
                        <input type="submit" value="Submit">
                    </form>
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