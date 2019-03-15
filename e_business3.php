<!Doctype html>
<html>
    <head>
        <title>Receipt</title>

 
 <style>
     
      div.form {
                position: relative;
                border:3px solid #00B0FF;
                left:400px;
                width: 650px;
                height: 650px;
                background-image:url("background img ebus1.png")
                    
            }
            .txt{
                text-align: center;
                font-size: 25px;
            }
            
            body {
                background-image: url("HD-Technology-Wallpaper-6.jpg");
             background-size: cover;
            }
     
     
 </style>
</head>
     <body>
         <div class="txt">
         <div class="form">
             <form name="E-Receipt">
                 <a href="index.php" style="background-color: #eea236; font-size:20px">Home</a>
                 <h1 style="font-size:50px"><b>E-Receipt</b></h1>
             <hr>
             <center>
                 <br>
                 <br>
                 <br>
                         
                         <?php

session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$PhoneNumber = $_POST['txtPhoneNumber'];
        
echo "The name is : ".$fullNameValue.".";
echo "<br></br>";
echo "<br></br>";
echo "the Phone number is : ".$PhoneNumber.".";
echo "<br></br>";
echo "<br></br>";
echo "The total value is : £".$totalValue2.".";

?>
                 <br><br>
                 
                 <a href="http://localhost:8000/index.php" style="background-color: #4cae4c; font-size:30px; border-bottom-style: solid"><b>Finish</b></a>              
             
             </center>
 </div>
         </div>
    </body>

</html>