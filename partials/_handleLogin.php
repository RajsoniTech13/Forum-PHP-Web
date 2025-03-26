<html>
    <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>

<?php
$login = false;
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $name = $_POST['loginName'];
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

    $sql = "SELECT * FROM users WHERE user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1){ 
        $row = mysqli_fetch_assoc($result);
        if ($row['is_verify']==1) {
            
        
        if(password_verify($pass, $row['user_pass'])){
            $login = true;
            session_start();
            $_SESSION['loggedin'] = true;
            $_SESSION['sno'] = $row['sno'];
            $_SESSION['useremail'] = $email;
            $_SESSION['username'] = $name;
            echo "logged in". $email;
            header("Location: /forum/index.php");
        }else{
            $showError ="Password is Wrong..!";
        } 
    }else{
        echo"<script>
        alert('Email Not Verified');
        window.location.href='http://localhost/forum/index.php';
</script>
";
    }      
    }else{
    $showError ="Email is Wrong..!";
    }
    echo ' <div class="container my-4" >
        <div class="jumbotron">
            <h1 class="display-4">'.$showError.'</h1>
            <hr class="my-4">
            <h3>Please go back to Login and Please Try Again...!</h3>
        </div>
    </div>';
}
?>
</html>