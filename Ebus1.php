
<!-- Creating a session variable and assigning it to txtTotal -->
<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE html>

<html lang="en" xmins="http.//www.w3.org/1999/xhtml">
    <head>    
        <style>
           
            h1
            {
                text-align:center;
            }
            
            body 
            {
                background-image:url("background img.jpg");
                background-size: cover;
            }
            
            div.form {
                position: relative;
                border:3px solid #00B0FF;
                left:400px;
                width: 650px;
                height: 700px;
                background-image:url("background img ebus1.png")
                    
            }
            
        </style>
    
    </head>
        <body>
            
        <div class="form">
            <form name="intCalc" method="post" action="Ebus2.php">
                <a href="http://localhost:8000/index.php" style="background-color: #eea236; font-size:20px">Home</a>
        <h1>Consulting Services Calculator</h1>    
                <hr/>       
        <center>
            
            <table cellspacing="20">            
                <tr>
                    
                    <td><b><u>Consulting Services:</u></b></td> 
                </tr>
                <tr>
                    <td>Blockchain</td>                    
                    <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                    <img src="Blockchain-logo.jpeg" alt="" width="70px" height="70px"/>               
                </tr>
                <tr>
                    <td>Autonomous Things</td>
                    <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                    <img src="Autonomous Things.jpg" alt="" width="70px" height="70px"/>   
                    
                </tr>
                <tr>
                    <td>Immersive Experience</td>
                    <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                    <img src="cn_immersive_experiences_model_v4.1.png" alt="" width="70px" height="70px"/>
                    
                </tr>
            </table>
        </center>
        <br/>
            <center>
                 <table cellspacing="20">
            <tr>
                    <td><b></b></td>
                    <td><b><u>Amount:</u></b></td>
            </tr>
                <tr>
                    <td>Sub Total</td>
                    <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>                    
                </tr>
                
                <tr>
                    <td>- Discount @ 10%</td>
                    <td><input type="text" id="txtDisc" name="txtDisc" readonly /></td>
                </tr>
                
                <tr>
                    <td>+ VAT @ 20%</td>
                    <td><input type="text" id="txtVAT" name="txtVAT" readonly /></td>
                </tr>
                
                <tr>
                    <td>Total</td>
                    <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly/></td>
                </tr>
            </table>
        </center>
        
        <br />
            <center>
            
            <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate Amount" style="background-color: #5cb85c"/>
            <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear" style="color: firebrick" />
            <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed" style="background-color: #a84cb8" />
        </center>
            </form>
        </div>
        
            <script type="text/javascript">
                function calcSub(){
                    //Assigning variables to the values
                    var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                    var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                    var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                    var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
                    
                    // if radio buttons are clicked, values are assigned
                    if (document.getElementById('Blockchain').checked) {
                        document.intCalc.txtSubTot.value = Blockchain;
                        subAmount = Blockchain;
                        calculation(subAmount);
                        
                    }
                   else if (document.getElementById('AutonomousThings').checked) {
                        document.intCalc.txtSubTot.value = AutonomousThings;
                        subAmount = AutonomousThings;
                        calculation(subAmount);
                        
                    }
                    else if (document.getElementById('ImmersiveExperience').checked) {
                        document.intCalc.txtSubTot.value = ImmersiveExperience;
                        subAmount = ImmersiveExperience;
                        calculation(subAmount);
                    }
                } 
                
                //function for calculationg the values//
                function calculation(parmsTotal) {
                    var subTotal = parseFloat(parmsTotal);
                    var discCalc = parseFloat(subTotal * .10);
                    var vatCalc= parseFloat(subTotal * .20);    
                    var total = parseFloat(subTotal - discCalc + vatCalc);
                    
                    //Inserting thrm intp thr correct fields//
                    document.intCalc.txtDisc.value = discCalc;
                    document.intCalc.txtVAT.value = vatCalc;
                    document.intCalc.txtTotal.value = total;
                }
                
                function AmountClear() {
                    document.getElementById("txtSubTot").value="";
                    document.getElementById("txtDisc").value="";
                    document.getElementById("txtVAT").value="";
                    document.getElementById("txtTotal").value="";
                }
                    
        
       </script>
    </body>
</html> 

