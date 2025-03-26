<?php
require("partials/_dbconnect.php");
// $em=$_GET['email'];
// $vc=$_GET['v_code'];
if (null !== $_GET['email'] && $_GET['v_code']) {
    # code...
    $sql= "SELECT * FROM `users` WHERE `user_email`= '$_GET[email]' AND `verification_code`= '$_GET[v_code]' ";
    $res= mysqli_query($conn,$sql);
    if ($res) {
        if (mysqli_num_rows($res)==1){
            # code...
            $res_fetch= mysqli_fetch_assoc($res);
            if ($res_fetch['is_verify']==0) {
                # code...
                $updt = "UPDATE `users` SET `is_verify`=1 WHERE `user_email`='$res_fetch[user_email]'";
                if (mysqli_query($conn,$updt)) {
                    $_SESSION['loggedin'] = true;
                    # code...
                    echo"<script>
                        alert('Email Verification Successfull');    
                        window.location.href='http://localhost/forum/index.php';
              </script>";
                }

            }
            else{
                echo"<script>
                        alert('Email Already Registered');
                        window.location.href='http://localhost/forum/index.php';
              </script>
            ";
            }
        }
            
    }else{
           echo"<script>
                        alert('cannot run query');
                        window.location.href='http://localhost/forum/index.php';
              </script>
            ";

    }
}
?>
