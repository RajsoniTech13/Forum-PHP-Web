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
        <h1 class="text-center m-5 bg-col border rounded-circle p-3" >Python</h1>
        <h5 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">1.  Write a program that plays the popular scissor-rock-paper game. <br>(A 
scissor can cut a paper, a rock can knock a scissor, and a paper can wrap a 
rock.) The program randomly generates a number 0, 1, or 2 representing 
scissor, rock, and paper. The program prompts the user to enter a number 
0, 1, or 2 and displays a message indicating whether the user or the 
computer wins, loses, or draws.</h5>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          

            import random
            print("Welcome to the Rock, Paper, Scissors game!")
            print("Enter 0 for scissors, 1 for rock, 2 for paper")
            while True:
                user = int(input("Enter your choice: "))
                computer = random.randint(0, 2)
                if user > 2 or user < 0:
                    print("Invalid choice!")
                    continue
                if user == computer:
                    print("Tie!")
                elif user == 0 and computer == 1:
                    print("computer choosed 1 ")
                    print("You lose!")
                elif user == 1 and computer == 2:
                    print("computer choosed 2 ")
                    print("You lose!")
                elif user == 2 and computer == 0:
                    print("computer choosed 0 ")
                    print("You lose!")
                else:
                    print("You win!")
                    if input("Do you want to play again? (y/n): ") == "n":
                        break
            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        <h5 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">2.  Write a program to print Fibonacci sequence up to n numbers using 
recursion. Fibonacci sequence is defined as below: 𝐹𝑖𝑏𝑜𝑛𝑎𝑐𝑐𝑖 𝑆𝑒𝑞𝑢𝑒𝑛𝑐𝑒 = 1 
1 2 3 5 8 13 21 … 
𝑤ℎ𝑒𝑟𝑒 𝑛 𝑡ℎ 𝑡𝑒𝑟𝑚 𝑥𝑛 = 𝑥𝑛−1 + 𝑥𝑛−2</h5>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          

        def fibbo(n):
            if (n==0):
                return n
            elif (n == 1 or n==2):
                return n
            else:
                 return (fibbo(n-1) + fibbo(n-2))
        n = int(input("Enter a number:-"))
        for i in range(0, n):
        print(fibbo(i))
            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        <h5 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">3. Write a program that defines a function to determine whether input 
number n is prime or not. A positive whole number n > 2 is prime, if no 
number between 2 and √𝑛 (inclusive) evenly divides n. If n is not prime, the 
program should quit as soon as it finds a value that evenly divides n</h5>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          

            import math
            def test_for_prime(n):
                n = abs(n)
                j = 2
                stop=math.sqrt(n)
                while j <= stop:
                    if n % j == 0:
                    return False
                    j += 1
                    return True
            print("This program determines if a number you enter is prime or not.\n")
            n_input = int(input("Please enter a number greater than 1: "))
            result=test_for_prime(n_input)
            if result:
            print(n_input, "Is prime")
            else:
            print(n_input, "is Not prime")
            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        <h5 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">4.  Write a program that lets the user enter the loan amount, number of 
years, and interest rate, and defines a function to calculate monthly EMI, 
total payment and display the amortization schedule for the loan.</h5>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          

            def emi(loan_amount, no_of_years, interest_rate):
                interest_rate = interest_rate / (12 * 100)
                no_of_months = no_of_years * 12
                
                # return monthly EMI, total payment and display the amortization schedule for the loan
                emi = (loan_amount * interest_rate * (1 + interest_rate) ** no_of_months) / ((1 + interest_rate) ** no_of_months - 1)
                total_payment = emi * no_of_months

                # display the amortization 
                amortization_schedule = []
                while no_of_months > 0:
                    interest = loan_amount * interest_rate
                    principal = emi - interest
                    loan_amount = loan_amount - principal
                    no_of_months -= 1
                
                return emi, total_payment


            loan_amount = float(input("Enter the loan amount: "))
            no_of_years = float(input("Enter the number of years: "))
            interest_rate = float(input("Enter the interest rate: "))
            emi, total_payment = emi(loan_amount, no_of_years, interest_rate)
            print("Monthly EMI: ", emi)
            print("Total payment: ", total_payment)
            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        <h5 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">5.  Write a program to print the dates of all the Sundays in a given year</h5>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          
            def dates_of_sundays(year):
                import datetime
                for month in range(1, 13):
                    for day in range(1, 32):
                        try:
                            date = datetime.date(year, month, day)
                        except ValueError:
                            continue
                        if date.strftime("%A") == "Sunday":
                            print(date.strftime("%d/%m/%Y"),end="                             |    ")
            
            year = int(input("Enter the year: "))
            dates_of_sundays(year)
            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        <h5 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">6. Write a program that counts the occurrences of each digit in a string. 
The program counts how many times a digit appears in the string. For 
example, if the input is "12203AB3", then the output should output 0 (1 
time), 1 (1 time), 2 (2 times), 3 (2 times)</h5>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          
            str = input("Enter a string: ")
            for i in range(len(str)):
                if str[i].isdigit():
                # no repetition
                    if str[i] not in str[:i]:
                        print(str[i], " (", str.count(str[i]), " times)", sep="")

            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        <h5 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">7. Write a program to sum the following series:
𝟏
𝟑
+
𝟑
𝟓
+
𝟓
𝟕
+
𝟕
𝟗
+
𝟗
𝟏𝟏
+
𝟏𝟏
𝟏𝟑
…
𝟗𝟓
𝟗𝟕
+
𝟗𝟕
𝟗�</h5>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          
            sum1=0
            for i in range(1,98,2):
                sum1 += i / (i+2)
            print("\nSeries: 1 / 3 + 3 / 5 + 5 / 7 + 7 / 9 + 9 / 11 + 11 / 13 + " + 
                " ... + 95 / 97 + 97 / 99\n") 
            print("The sum of series is",sum1)

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