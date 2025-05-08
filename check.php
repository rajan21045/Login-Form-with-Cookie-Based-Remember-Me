<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['cpassword'];
    
    
   if(isset($_POST['remember'])) {
        $remember = $_POST['remember'];
    } 
          else {
          $remember = false;
                }

 
        $filename = 'data.txt';
        $file = fopen($filename, 'a+');
  

   
    if($file && $remember==true) {
        $data = "Name: $name, Email: $email, Password: $password, Confirm Password: $confirm_password\n";
        fwrite($file, $data);
        fclose($file);
        $cookie_name = "admin";
        $cookie_value = $name;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
        echo "Data Is Saved And Cookie Is Set!!! It Happen Due To You Have Checked Remember Me........<br>";
    } 
    
    
    else if($file && $remember==false) {
        $data = "Name: $name, Email: $email, Password: $password, Confirm Password: $confirm_password\n";
        fwrite($file, $data);
        fclose($file);
        echo "Data Is Saved. It Happen Due To You Have Not Checked Remember Me........<br>";
    }
    
    
    else {
        echo "Error opening file!";
    }
    
    
}


?>