<!doctype html>
<html lang="en">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style2.css">
<link rel="stylesheet" href="css/prism.css">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 
    <title>Welcome to iDiscuss - Coding Forums</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php'; ?>

    <style>

    #ques {
        min-height: 1000px;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
        margin: 0;
    }

    html {
        box-sizing: border-box;
    }

    *,
    *:before,
    *:after {
        box-sizing: inherit;
    }

    .column {
        float: left;
        width: 33.3%;
        margin-bottom: 16px;
        padding: 0 8px;
    }

    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        margin: 8px;
    }

    .about-section {
        padding: 50px;
        text-align: center;
        background-color: #474e5d;
        color: white;
    }

    .container {
        padding: 0 16px;
    }

    .container::after,
    .row::after {
        content: "";
        clear: both;
        display: table;
    }

    .title {
        color: grey;
    }

    .button {
        border: none;
        outline: 0;
        display: inline-block;
        padding: 8px;
        color: white;
        background-color: #000;
        text-align: center;
        cursor: pointer;
        width: 100%;
    }

    .button:hover {
        background-color: #555;
    }

    @media screen and (max-width: 650px) {
        .column {
            width: 100%;
            display: block;
        }
    }
    .bg-col{
        background-color:lightblue;
    }
    </style>
    </head>

    <body>
        <div class="container">
        <h1 class="text-center m-5 bg-col border rounded-circle p-3" >C Programing Language</h1>
        <h4 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">1. printing Hello Without Semicolon</h4>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          
// using while loop
#include &lt;stdio.h&gt; 
int main()    
{    
   while(!printf("hello world")){}    
   return 0;  
}   
            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        <h4 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">2.  Develop a C program that prints the Size of Structure</h4>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          
 #include&lt;stdio.h&gt;
 
 int main(){
     struct A {
         int x;
         double y;
         float z;
     };
     printf("size of struct :- %lu",sizeof(struct A));
   return 0;
}
            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        <h4 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">3.Develop a C program that prints 0 to 11 using enum years.</h4>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          
#include&lt;stdio.h&gt;

enum years{Jan,feb,Mar,Apr,May,June,July,Aug,Sept,Oct,Nov,Dec};
    int main(){
        int i;
        for(i=Jan;i<=Dec;i++){
            printf("%d\t",i);
        }
      return 0;
  }
            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        
    </div>

    <script src="js/main.js" defer></script>
    <script src="js/prism.js"></script>

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