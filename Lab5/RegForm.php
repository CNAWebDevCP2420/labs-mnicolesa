<?php
   setcookie("name", "", time()+3600, "/","", 0);
   setcookie("age", "", time()+3600, "/", "",  0);
?>
<html>
<Title>Registration Form</title>


<body>
Sign up today to receive special offers and coupons in your email! Just fill in the boxes and press "Submit"! Easy!
<form name="RegistrationForm" method="post" action="">
<table border="0" width="500" align="center" class="test">
      
       <tr><td>First Name</td>
       <td><input type="text" class="demoInputBox" name="firstName" value="<?php if(isset($_POST['firstName'])) echo $_POST['firstName']; ?>"></td>
       </tr>
       <tr><td>Last Name</td>
       <td><input type="text" class="demoInputBox" name="lastName" value="<?php if(isset($_POST['lastName'])) echo $_POST['lastName']; ?>"></td>
       </tr>
   
       <tr><td>Email</td>
       <td><input type="text" class="demoInputBox" name="userEmail" value="<?php if(isset($_POST['userEmail'])) echo $_POST['userEmail']; ?>"></td>
       </tr>
      
     
   </table>
   <div><input type="submit" name="submit" value="Submit" class="btnRegister"></div>
</form>

 <?php
         echo $_COOKIE["name"]. "<br />";
         
       
         echo $HTTP_COOKIE_VARS["name"]. "<br />";
         echo $_COOKIE["age"] . "<br />";
         echo $HTTP_COOKIE_VARS["age"] . "<br />";
      ?>
 </body>
</html>