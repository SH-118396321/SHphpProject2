<!-- Creating a session variable and assigning it to txtTotal -->
<?php
session_start();
$fullNameValue = "";
$PhoneNumber = "";
$totalValue2 = "";
/*
 * create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtPhoneNumber'] = $PhoneNumber;
$_SESSION['txtTotal'] = $totalValue2;

/*
 * allocate the mobile number session variable to a text box
 */

?>

<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        
        <style>
            
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}


div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

div.form {
                position:relative;
                border:3px solid #00B0FF;
                left:400px;
                width: 550px;
                height: 550px;
                background-image:url("background img ebus1.png")
                    
            }
            
body{
             background-image: url("HD-Technology-Wallpaper-6.jpg");
             background-size: cover;
            }           

            img {
                border-radius: 50px;
                height:50px;
                width:50px;
                padding:10px;
            }           
            

        </style>
    </head>
    
    <body>
        
        
        <div class ="form">
            <form Name="details" method="post" action="e_business3.php">
                <a href="http://localhost:8000/Home.html" style="background-color: #eea236; font-size:20px">Home</a>
                <h1 style="text-align: center">Personal Details</h1>
                <hr/>
                
                <center>
                    
                    <table  cellspacing="25">
                        <tr>
                        <img src="Blockchain-logo.jpeg" alt=""/>
                        <img src="windows_upcomingfeatures_v08_vr_740x417-100699130-large.jpg" alt=""/>
                        <img src="Autonomous Things.jpg" alt=""/>
                            <td style="text-size:30px"><b><u>Enter in your details below:</u></b></td>
                           
                        </tr>
                        
                        <tr>
                            <td><strong>Name:</strong></td>
                            <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                        </tr>
                        <br><br>
                        <tr>
                            <td><strong>phone Number:</strong></td>
                            <td><input type="text" id="txtPhoneNumber" name ="txtPhoneNumber" value=""  required/></td>
                        </tr>
                        <br><br>
                        <tr>
                            <td><strong>PIN:</strong></td>
                            <td><input type ="password" id="txtPassword" name="txtPassword" value="" maxlength="4" required/></td>
                            
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value ="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
               
                </div>    
           
                <center>
                <input style="border-radius:50px; width:300px" type="submit" name="btnContinue" id="btnContinue" onClick="" value="Continue" />
                </center>
        
        </body>
</html>


