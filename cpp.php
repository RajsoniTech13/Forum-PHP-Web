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
        <h1 class="text-center m-5 bg-col border rounded-circle p-3" >C++ Codes</h1>
        <h4 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">1. Develop a C++ program that takes data of Employee like id,salary,name,address,department from user and print Employee's Data with Member functions using Class. </h4>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
            #include&lt;iostream&gt;
#include&lt;string&gt;
using namespace std;

class Employee{
    int id,salary;
    string name,address,department;
public:
    void setData(int id,int salary,string name,string address,string department);
    void display();                     
};
    void Employee::setData(int id,int salary,string name,string address,string department){
        this->id=id;
        this->salary=salary;
        this->name=name;
        this->address=address;
        this->department=department;
    }
    
    void Employee::display(){
        cout&lt;&lt;&quot;Name : &quot;&lt;&lt;name&lt;&lt;endl;
        cout&lt;&lt;&quot;Id : &quot;&lt;&lt;id&lt;&lt;endl;
        cout&lt;&lt;&quot;Department :&quot;&lt;&lt;department&lt;&lt;endl;
        cout&lt;&lt;&quot;Salary : &quot;&lt;&lt;salary&lt;&lt;endl;
        cout&lt;&lt;&quot;Address :&quot;&lt;&lt;address;

    }
int main(){
    Employee Em;
    int id,salary;
    string name,address,department;
    cout&lt;&lt;&quot;\tEnter employee Data :&quot;&lt;&lt;endl;
    cout&lt;&lt;&quot;Enter Name :- &quot; ;
    cin>>name;
    cout&lt;&lt;&quot;Enter Id :- ";
    cin>>id;
    cout&lt;&lt;&quot;Enter Department :- ";
    cin>>department;
    cout&lt;&lt;&quot;Enter Salary :- ";
    cin>>salary;
    cout&lt;&lt;&quot;Enter Address :- ";
    cin>>address;
    Em.setData(id,salary,name,address,department);
    cout&lt;&lt;&quot;-------------------------------------------------------------";
    cout&lt;&lt;&quot;\n\tEmployee's Data :&quot;&lt;&lt;endl;
    Em.display();

}
            </code>
        </pre>
        <button id="copy-button">Copy</button>
      </div>
        <h4 class="text-justify bg-dark text-white p-3 border rounded mt-5 ">2.  Write a C++ program that counts annual interest and display ( Take account no.,name,time and interest rate  as Input ) using member functions of class.</h4>
      <div class="code-wrapper">
        <pre>
            <code id="code" class="language-css">
          

           
 
            #include&lt;iostream&gt;
#include&lt;string&gt;
using namespace std;
class Account{
    int ac_no,balance,Time;
    float interest_rate=2.8;
    string ac_name,ac_type;
public:
    void setData(int ac_no,int balance,string ac_name,string ac_type,int Time,float interest_rate){
        this->ac_no=ac_no;
        this->balance=balance;
        this->ac_name=ac_name;
        this->ac_type=ac_type;
        this->Time=Time;
        this->interest_rate=interest_rate;
    }
    void annual_interest(){
        balance=(balance*interest_rate*Time)/100;
    }
    int get_interest(){
        return balance;
    }
};
  int main(){
      Account ac;
      int ac_no,balance,Time,x;
    float interest_rate=2.8;
    string ac_name,ac_type;

    cout<<"\tEnter Account Details :&quot;&lt;&lt;endl<<"Enter Account Holder's Name : ";
    cin>>ac_name;
    cout<<"Enter Account No. : ";
    cin>>ac_no;
    cout<<"Enter Account Balance : ";
    cin>>balance;
    cout<<"Enter Account Type : ";
    cin>>ac_type;
    cout<<"Enter Time (in Years) : ";
    cin>>Time;
    cout<<"\tChoose :&quot;&lt;&lt;endl<<"1. Default Interest rate is 2.8% &quot;&lt;&lt;endl<<"2. Add your Interest rate &quot;&lt;&lt;endl<<"Choose !!&quot;&lt;&lt;endl;
    cin>>x;

    if(x==2){
        cout<<"Enter Interest Rate : ";
        cin>>interest_rate;
    }

    ac.setData(ac_no,balance,ac_name,ac_type,Time,interest_rate);
    ac.annual_interest();
    cout<<"\nAnnual Interest is : &quot;&lt;&lt;ac.get_interest();
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